<?php
echo $header;
?>
    <script src="/backend/public/assets/js/plugins/choices.min.js"></script>
    <body class="">
    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/curved9.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">¡Bienvenido!</h1>
                        <p class="text-lead text-white">Convención Nacional CONAVE 2022, Crece sin Límites. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <p>Introduce tu email para crear tu cuenta</p>
                            <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                <i class="fa fa-user-circle"></i>
                            </p>
                        </div>
                        <div class="card-body pt-1">
                            <form role="form" class="text-start" id="email_form" action="/Register/" method="POST">
                                <div class="mb-3">
                                    <label>Correo Eléctronico Institucional *</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Ej. usuario@asofarma.com.mx" aria-label="Correo Eléctronico">
                                </div>
                                <div class="mb-3">
                                    <label>Confirma tu Email *</label>
                                    <input type="email" id="confirm_email" name="confirm_email" class="form-control" placeholder="Ej. usuario@asofarma.com.mx" aria-label="Confirmar tu Correo Eléctronico">
                                </div>
                                <div class="text-center">
                                    <button type="button" id="btn_registro_email" class="btn bg-gradient-faded-info w-100 my-4 mb-2" style="color:white">Registrarme</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </main>

    </body>

<?php echo $footer; ?>