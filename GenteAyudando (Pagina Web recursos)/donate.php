<?php
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Donacion Gente Ayudando </title>
<link rel="icon" href="images/logo.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://js.stripe.com/v3/"></script>
<style>
    body { background-color: #f8f9fa; }
    .card-donation { border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); }
    #card-element { padding: 10px; border: 1px solid #ced4da; border-radius: 5px; }
    #card-errors { font-size: 0.875rem; }
</style>
</head>
<body>

<section class="py-5" style="background: url('images/donacion.png') center/cover no-repeat; position: relative;">
    <div style="background-color: rgba(240, 212, 160, 0.85); position: absolute; top:0; left:0; width:100%; height:100%;"></div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg border-0 p-4" style="background-color: rgba(255, 255, 255, 0.95); border-radius: 15px;">
                    <h3 class="mb-3 text-center" style="color:#ff6600;">Haz tu Donación</h3>
                    <p class="text-center text-dark mb-4">Tu aporte ayuda a mejorar la vida de muchas personas.</p>
                    <form id="donation-form" method="POST" action="charge.php">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Juan Pérez" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="correo@ejemplo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="+52 722 123 4567">
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Monto </label>
                            <input type="number" step="0.01" class="form-control" name="amount" id="amount" placeholder="50.00" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje (opcional)</label>
                            <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Tu mensaje..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Datos de tarjeta</label>
                            <div id="card-element" class="form-control p-2 border"></div>
                            <div id="card-errors" class="text-danger mt-2"></div>
                        </div>
                        <button class="btn" style="background-color:#ff6600; color:white; font-weight:bold;" id="submit-btn">Donar Ahora</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Agregar algo de CSS adicional -->
<style>
    #donation-form .form-control:focus {
        border-color: #ff6600;
        box-shadow: 0 0 5px #ff6600;
    }
    #submit-btn:hover {
        background-color: #e65c00;
    }
</style>


<script>
// Configurar Stripe
const stripe = Stripe('pk_test_51S8pCNRUcVGoxVOIf0bwH0Jbt8IZvo40jMbefDn4cAPBFmkmE2xJX9qBlmE7nLpqfoZYQvpmNXJ9x7ujbiFSXnls001QAxEu7b'); // reemplaza con tu key pública
const elements = stripe.elements();
const card = elements.create('card', {style:{base:{fontSize:'16px',color:'#495057', '::placeholder':{color:'#6c757d'}}}});
card.mount('#card-element');

const form = document.getElementById('donation-form');
form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const {token, error} = await stripe.createToken(card);

    if (error) {
        document.getElementById('card-errors').textContent = error.message;
    } else {
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'stripeToken';
        hiddenInput.value = token.id;
        form.appendChild(hiddenInput);
        form.submit();
    }
});
</script>

</body>
</html>
