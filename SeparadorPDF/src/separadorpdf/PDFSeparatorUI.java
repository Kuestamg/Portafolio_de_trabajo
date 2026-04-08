package separadorpdf;

import java.awt.BorderLayout;
import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.io.File;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import javax.swing.*;
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;

public class PDFSeparatorUI extends JFrame {

    private JTextField txtPalabraClave;
    private JLabel lblArchivo;
    private File archivoPDF;
    private JButton btnCargar, btnSeparar;
    private JProgressBar progressBar;

    public PDFSeparatorUI() {
        setTitle("Separador de PDF por Palabra Clave");
        setSize(520, 220);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
        setLocationRelativeTo(null);

        JPanel panelMain = new JPanel(new BorderLayout(10,10));

        // Panel superior: cargar archivo y mostrar nombre
        JPanel panelArriba = new JPanel(new FlowLayout(FlowLayout.LEFT, 10, 10));
        btnCargar = new JButton("Cargar PDF");
        lblArchivo = new JLabel("Ningún archivo seleccionado");
        panelArriba.add(btnCargar);
        panelArriba.add(lblArchivo);

        // Panel medio: palabra clave
        JPanel panelCentro = new JPanel(new FlowLayout(FlowLayout.LEFT, 10, 10));
        panelCentro.add(new JLabel("Palabra clave:"));
        txtPalabraClave = new JTextField(25);
        panelCentro.add(txtPalabraClave);

        // Panel inferior: botones y barra de progreso
        JPanel panelAbajo = new JPanel(new FlowLayout(FlowLayout.CENTER, 10, 10));
        btnSeparar = new JButton("Separar PDF");
        progressBar = new JProgressBar();
        progressBar.setVisible(false);
        progressBar.setStringPainted(true);
        progressBar.setIndeterminate(true);

        panelAbajo.add(btnSeparar);
        panelAbajo.add(progressBar);

        panelMain.add(panelArriba, BorderLayout.NORTH);
        panelMain.add(panelCentro, BorderLayout.CENTER);
        panelMain.add(panelAbajo, BorderLayout.SOUTH);

        add(panelMain);

        btnCargar.addActionListener(this::accionCargarPDF);
        btnSeparar.addActionListener(this::accionSepararPDF);
    }

    private void accionCargarPDF(ActionEvent e) {
        JFileChooser chooser = new JFileChooser();
        if (chooser.showOpenDialog(this) == JFileChooser.APPROVE_OPTION) {
            archivoPDF = chooser.getSelectedFile();
            lblArchivo.setText("Archivo: " + archivoPDF.getName());
        }
    }

    private void accionSepararPDF(ActionEvent e) {
        if (archivoPDF == null) {
            JOptionPane.showMessageDialog(this, "Seleccione un archivo PDF primero.", 
                    "Error", JOptionPane.ERROR_MESSAGE);
            return;
        }

        String palabraClave = txtPalabraClave.getText().trim();

        // Validación estricta: solo "Jurisprudencia" o "Aislada"
        if (!(palabraClave.equals("Jurisprudencia") || palabraClave.equals("Aislada"))) {
            JOptionPane.showMessageDialog(this,
                    "La palabra clave",
                    "Error", JOptionPane.ERROR_MESSAGE);
            return;
        }

        JFileChooser chooser = new JFileChooser();
        chooser.setFileSelectionMode(JFileChooser.DIRECTORIES_ONLY);
        if (chooser.showSaveDialog(this) != JFileChooser.APPROVE_OPTION) return;

        File carpetaSalida = chooser.getSelectedFile();

        // Desactivar botones y mostrar progreso
        btnCargar.setEnabled(false);
        btnSeparar.setEnabled(false);
        progressBar.setVisible(true);

        SwingWorker<Void, Void> worker = new SwingWorker<>() {
            @Override
            protected Void doInBackground() {
                try {
                    dividirPorPalabraClave(archivoPDF, palabraClave, carpetaSalida);
                } catch (IOException ex) {
                    SwingUtilities.invokeLater(() ->
                            JOptionPane.showMessageDialog(PDFSeparatorUI.this,
                                    "Error: " + ex.getMessage(),
                                    "Error", JOptionPane.ERROR_MESSAGE));
                }
                return null;
            }

            @Override
            protected void done() {
                progressBar.setVisible(false);
                btnCargar.setEnabled(true);
                btnSeparar.setEnabled(true);
                JOptionPane.showMessageDialog(PDFSeparatorUI.this,
                        "Proceso terminado.",
                        "Listo", JOptionPane.INFORMATION_MESSAGE);
            }
        };
        worker.execute();
    }

    public static void dividirPorPalabraClave(File archivoPDF, String palabraClave, File carpetaSalida) throws IOException {
        try (PDDocument documentoOriginal = PDDocument.load(archivoPDF)) {
            PDFTextStripper stripper = new PDFTextStripper();
            int totalPaginas = documentoOriginal.getNumberOfPages();
            List<Integer> puntosDivision = new ArrayList<>();

            for (int i = 0; i < totalPaginas; i++) {
                stripper.setStartPage(i + 1);
                stripper.setEndPage(i + 1);
                String texto = stripper.getText(documentoOriginal);

                if (texto.contains(palabraClave)) { // búsqueda sensible a mayúsculas/minúsculas
                    puntosDivision.add(i);
                }
            }

            if (puntosDivision.isEmpty()) {
                throw new IOException("No se encontró la palabra clave en el documento.");
            }

            puntosDivision.add(totalPaginas);
            carpetaSalida.mkdirs();

            for (int i = 0; i < puntosDivision.size() - 1; i++) {
                int inicio = puntosDivision.get(i);
                int fin = puntosDivision.get(i + 1);

                try (PDDocument nuevoDoc = new PDDocument()) {
                    for (int j = inicio; j < fin; j++) {
                        nuevoDoc.addPage(documentoOriginal.getPage(j));
                    }
                    String nombreArchivo = carpetaSalida.getAbsolutePath() +
                            File.separator + "seccion_" + (i + 1) + ".pdf";
                    nuevoDoc.save(nombreArchivo);
                }
            }
        }
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> new PDFSeparatorUI().setVisible(true));
    }
}
