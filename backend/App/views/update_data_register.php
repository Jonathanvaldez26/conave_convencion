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
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 mx-auto">

                    <div class="card z-index-0" id="basic-info">
                        <div class="card-header">
                            <h5>Información Básica</h5>

                            <?php //$userData; 
                            ?>
                        </div>
                        <form class="form-horizontal" id="update_form" action="/Register/Politicas" method="POST">
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <!-- <input type="text" id="id_registro" name="id_registro" value="<?= $userData['id_registro'] ?> "> -->
                                        <label class="form-label">Nombre *</label>
                                        <div class="input-group">
                                            <input id="nombre" name="nombre" maxlength="29" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*{2,254}" class="form-control" type="text" placeholder="Alec" required="" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['nombre'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <label class="form-label">Segundo Nombre </label>
                                        <div class="input-group">
                                            <input id="segundo_nombre" name="segundo_nombre" maxlength="49" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*{2,254}" class="form-control" type="text" placeholder="Alec"  onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['segundo_nombre'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <label class="form-label">Apellido Paterno *</label>
                                        <div class="input-group">
                                            <input id="apellido_paterno" name="apellido_paterno" maxlength="29" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*{2,254}" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['apellido_paterno'] ?>">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <label class="form-label mt-4">Apellido Materno *</label>
                                        <div class="input-group">
                                            <input id="apellido_materno" name="apellido_materno" maxlength="29" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*{2,254}" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['apellido_materno'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label class="form-label mt-4">Me identifico como: *</label>
                                        <select class="form-control" style="cursor: pointer;" name="genero" id="genero" placeholder="Genero">
                                            <option value="">Selecciona una opción</option>
                                            <!-- <option value="Mujer">Mujer</option>
                                            <option value="Otro">Otro</option> -->
                                            <?php echo $optionsGenero; ?>
                                        </select>
                                        <!-- <input type="text" class="form-control" value="<?= $userData['genero'] ?>" disabled> -->
                                    </div>
                                    <div class="col-sm-4 col-12">

                                        <label class="form-label mt-4">Fecha de Nacimiento *</label>

                                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required="" value="<?= $userData['fecha_nacimiento'] ?>">
                                        </select>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-12">
                                            <label class="form-label mt-4">Email Rregistrado y Verificado</label>
                                            <div class="input-group">
                                                <input id="email" name="email" maxlength="49" class="form-control" type="email" placeholder="example@email.com" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['email'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <label class="form-label mt-4">Número de Telefono</label>
                                            <div class="input-group">
                                                <input id="telefono" name="telefono" maxlength="10" pattern="[0-9]" class="form-control" type="number" placeholder="+40 735 631 620" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['telefono'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 align-self-center">
                                            <label class="form-label mt-4">Pertenezco a la Línea ASOFARMA</label>
                                            <select class="form-control" style="cursor: pointer;" name="linea_principal" id="linea_principal" tabindex="-1" data-choice="active">
                                                <option value="" disabled>Selecciona una opción</option>
                                                <?php echo $optionsLineaPrincipal; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 align-self-center">
                                            <label class="form-label mt-4">Actividad: </label>
                                            <select class="form-control" style="cursor: pointer;" name="actividad" id="actividad" tabindex="-1" data-choice="active">
                                                <option value="" selected disabled>Selecciona una opción</option>
                                                <option value="caminata_3k">Caminata 3k</option>
                                                <option value="carrera_5k">Carrera 5k</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 align-self-center">
                                            <label class="form-label mt-4">Talla de Playera</label>
                                            <select class="form-control" style="cursor: pointer;" name="talla" id="talla" tabindex="-1" data-choice="active">
                                                <option value="" selected disabled>Selecciona una opción</option>
                                                <option value="Chica">Chica</option>
                                                <option value="Mediana">Mediana</option>
                                                <option value="Grande">Grande</option>
                                                <option value="Extra_Grande">Extra Grande</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label mt-4">Restricciones alimenticias</label>
                                            <input class="form-control" id="alergias" maxlength="149" name="alergias" data-color="dark" type="text" value="<?= $userData['alergias'] ?>" placeholder="Enter something" />
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        
                                        
                                    </div> -->

                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <a class="btn bg-gradient-light mb-0 js-btn-prev" href="/Register" title="Prev">Regresar</a>
                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Next">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </main>

</body>

<?php echo $footer; ?>