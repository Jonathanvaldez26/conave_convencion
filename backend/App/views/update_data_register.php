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
                        <form class="form-horizontal" id="update_form" action="/Register/DataPassword" method="POST">
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <input type="hidden" id="id_registro" name="id_registro" value="<?= $userData['id_registro'] ?> ">
                                        <label class="form-label">Nombre *</label>
                                        <div class="input-group">
                                            <input id="nombre" name="nombre" class="form-control" type="text" placeholder="Alec" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['nombre'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <label class="form-label">Segundo Nombre *</label>
                                        <div class="input-group">
                                            <input id="segundo_nombre" name="segundo_nombre" class="form-control" type="text" placeholder="Alec" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['segundo_nombre'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <label class="form-label">Apellido Paterno *</label>
                                        <div class="input-group">
                                            <input id="apellido_paterno" name="apellido_paterno" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['apellido_paterno'] ?>">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <label class="form-label mt-4">Apellido Materno *</label>
                                        <div class="input-group">
                                            <input id="apellido_materno" name="apellido_materno" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['apellido_materno'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label class="form-label mt-4">Me identifico como: *</label>
                                        <select class="form-control" style="cursor: pointer;" name="genero" id="genero" placeholder="Genero">
                                            <!-- <option value="Hombre">Hombre</option>
                                            <option value="Mujer">Mujer</option>
                                            <option value="Otro">Otro</option> -->
                                            <?php echo $optionsGenero; ?>
                                        </select>
                                        <!-- <input type="text" class="form-control" value="<?= $userData['genero'] ?>" disabled> -->
                                    </div>
                                    <div class="col-sm-4 col-12">

                                        <label class="form-label mt-4">Fecha de Nacimiento *</label>

                                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?= $userData['fecha_nacimiento'] ?>">
                                        </select>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <label class="form-label mt-4">Email Rregistrado y Verificado</label>
                                            <div class="input-group">
                                                <input id="email" name="email" class="form-control" type="email" placeholder="example@email.com" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['email'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label class="form-label mt-4">Número de Telefono</label>
                                            <div class="input-group">
                                                <input id="telefono" name="telefono" class="form-control" type="number" placeholder="+40 735 631 620" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['telefono'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 align-self-center">
                                            <label class="form-label mt-4">Pertenezco a la Línea ASOFARMA</label>
                                            <select class="form-control" style="cursor: pointer;" name="linea_principal" id="linea_principal" tabindex="-1" data-choice="active">
                                                <?php echo $optionsLineaPrincipal; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label mt-4">Alergias</label>
                                            <input class="form-control" id="alergias" name="alergias" data-color="dark" type="text" value="<?= $userData['alergias'] ?>" placeholder="Enter something" />

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Regresar</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Next">Finalizar</button>
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