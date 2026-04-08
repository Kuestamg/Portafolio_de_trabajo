<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>CONTROL ESCOLAR</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

     <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Por favor espera...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">CONTROL ESCOLAR</a>                
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user_.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menú</li>
                    <li class="active">
                            <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <?php 
                                echo '<li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">people</i>
                                        <span>Alumnos</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="agrega_alumno.php">Alta Alumnos</a>
                                        </li>
                                        <li>
                                            <a href="ver_alumnos.php">Ver Alumnos</a>
                                        </li>
                                    </ul>
                                     </li>';

                                echo '<li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">people_outline</i>
                                        <span>Profesor</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="agrega_profesor.php">Alta Profesor</a>
                                        </li>
                                        <li>
                                            <a href="ver_profesores.php">Ver Profesores</a>
                                        </li>
                                    </ul>
                                     </li>';

                                echo '<li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">book</i>
                                        <span>Materias</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="agrega_materia.php">Alta Materia</a>
                                        </li>
                                        <li>
                                            <a href="ver_materias.php">Ver Materias</a>
                                        </li>
                                    </ul>
                                     </li>';

                                echo '<li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">border_color</i>
                                        <span>Evaluaciones</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="agrega_evaluacion.php">Alta Evaluación</a>
                                        </li>
                                        <li>
                                            <a href="ver_evaluaciones.php">Ver Evaluaciones</a>
                                        </li>
                                    </ul>
                                     </li>';

                                echo '<li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">folder_shared</i>
                                        <span>Grupos</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="agrega_grupo.php">Alta Grupo</a>
                                        </li>
                                        <li>
                                            <a href="ver_grupos.php">Ver Grupos</a>
                                        </li>
                                    </ul>
                                     </li>';

                                echo '<li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">people_outline</i>
                                        <span>Inscribir Alumno a Grupo</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="agrega_alumno_grupo.php">Alta Alumno a Grupo</a>
                                        </li>
                                        <li>
                                            <a href="ver_alumno_grupo.php">Ver Alumnos en Grupos</a>
                                        </li>
                                    </ul>
                                     </li>';
                                echo '<li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">beenhere</i>
                                        <span>Calificaciones</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="agrega_calificaciones.php">Alta de Calificacion</a>
                                        </li>
                                        <li>
                                            <a href="ver_calificaciones.php">Ver Calificacion</a>
                                        </li>
                                    </ul>
                                     </li>';
                                echo '<li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">dvr</i>
                                        <span>Reportes por ciclo escolar</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="reporte_profesores_alumno.php">Reporte profesores y alumnos</a>
                                        </li>
                                        <li>
                                            <a href="reporte_menos_promedio.php">Reporte menor promedio escolar</a>
                                        </li>
                                        <li>
                                            <a href="reporte_mayor_promedio.php">Reporte 3 alumnos con mayor promedio</a>
                                        </li>
                                        <li>
                                            <a href="reporte_genero.php">Reporte género alumnos </a>
                                        </li>
                                    </ul>
                                     </li>';
                                // echo '<a href="agrega_materia.php">
                                //         <i class="material-icons">people</i>
                                //         <span>Inscripción a Grupo</span>
                                //     </a>';
                                // echo '<a href="ver_mat_ins.php">
                                //         <i class="material-icons">layers</i>
                                //         <span>Materias inscriptas en curso</span>
                                //     </a>';
                                // echo '<a href="ver_kardex.php">
                                //         <i class="material-icons">layers</i>
                                //         <span>Kardex</span>
                                //     </a>';
                                
                                // echo '<li>
                                //     <a href="javascript:void(0);" class="menu-toggle">
                                //     <i class="material-icons">widgets</i>
                                //         <span>Calificaciones</span>
                                //     </a>
                                //     <ul class="ml-menu">
                                //         <li>
                                //             <a href="agrega_calif.php">Registro de calificaciones</a>
                                //         </li>
                                //         <li>
                                //             <a href="ver_calif.php">Reporte de calificaciones</a>
                                //         </li>
                                //     </ul>
                                // </li>';
                                
                                // echo '<li>
                                //     <a href="javascript:void(0);" class="menu-toggle">
                                //     <i class="material-icons">widgets</i>
                                //         <span>Grupos</span>
                                //     </a>
                                //     <ul class="ml-menu">
                                //         <li>
                                //             <a href="ver_hor_gpo.php">Horarios de grupos</a>
                                //         </li>
                                //         <li>
                                //             <a href="ver_alu_gpo.php">Alumnos por grupo</a>
                                //         </li>
                                //     </ul>
                                // </li>';             
                                // echo '<li>
                                //     <a href="javascript:void(0);" class="menu-toggle">
                                //     <i class="material-icons">widgets</i>
                                //         <span>Grupos</span>
                                //     </a>
                                //     <ul class="ml-menu">
                                //         <li>
                                //             <a href="agrega_grupo.php">Creación de grupos</a>
                                //         </li>
                                //         <li>
                                //             <a href="ver_grupo.php">Reporte de grupos</a>
                                //         </li>
                                //     </ul>
                                // </li>';   
                                // echo '<a href="ver_calif_grupo.php">
                                //         <i class="material-icons">layers</i>
                                //         <span>Reporte de calificaciones por grupos</span>
                                //     </a>';   
                        ?>
                    </li>
                    
                    
                   
                    
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
            
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date('Y'); ?> <a href="javascript:void(0);"></a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>