<?php
echo $header;
?>

<!-- <script src="/backend/public/assets/js/plugins/choices.min.js"></script> -->

<body class="">
    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/Cintillo-04.png');">
            <span class="mask bg-gradient-danger opacity-0"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">¡Bienvenido!</h1>
                        <p class="text-lead text-white">Convención Nacional de Ventas 2022, Creciendo 5in Límites. </p>
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
                                    <div class="col-12 col-lg-3">
                                        <!-- <input type="text" id="id_registro" name="id_registro" value="<?= $userData['id_registro'] ?> "> -->
                                        <label class="form-label">Primer Nombre *</label>
                                        <div class="input-group">
                                            <input id="nombre" name="nombre" maxlength="29" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="Alec" required="" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['nombre'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label class="form-label">Segundo Nombre </label>
                                        <div class="input-group">
                                            <input id="segundo_nombre" name="segundo_nombre" maxlength="49" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="Alec" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['segundo_nombre'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <label class="form-label">Apellido Paterno *</label>
                                        <div class="input-group">
                                            <input id="apellido_paterno" name="apellido_paterno" maxlength="29" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['apellido_paterno'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-3">
                                        <label class="form-label">Apellido Materno *</label>
                                        <div class="input-group">
                                            <input id="apellido_materno" name="apellido_materno" maxlength="29" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['apellido_materno'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">



                                    <div class="col-12 col-lg-4">
                                        <label class="form-label mt-4">Género: *</label>
                                        <select class="form-control" style="cursor: pointer;" name="genero" id="genero" placeholder="Genero">
                                            <option value="" disabled selected>Selecciona una opción</option>
                                            <!-- <option value="Mujer">Mujer</option>
                                            <option value="Hombre">Hombre</option> -->
                                            <?php echo $optionsGenero; ?>
                                        </select>
                                        <!-- <input type="text" class="form-control" value="<?= $userData['genero'] ?>" disabled> -->
                                    </div>
                                    <div class="col-12 col-lg-4">

                                        <label class="form-label mt-4">Fecha de Nacimiento * </label>

                                        <input type="date" class="form-control" max="<?php echo $fecha_min ?>" id="fecha_nacimiento" name="fecha_nacimiento" required="" value="<?= $userData['fecha_nacimiento'] ?>">



                                    </div>

                                    <div class="col-lg-4 col-12">
                                        <label class="form-label mt-4">Número de Teléfono *</label>
                                        <div class="input-group">
                                            <input id="telefono" name="telefono" maxlength="10" pattern="[0-9]" class="form-control" type="number" placeholder="+40 735 631 620" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['telefono'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-12 col-lg-2">
                                        <label class="form-label mt-4">Número de empleado *</label>
                                        <div class="input-group">
                                            <!-- <input id="numero_empleado" name="numero_empleado" maxlength="29" pattern="[a-zA-Z0-9]*" class="form-control" type="text" placeholder="" required="required"  value="<?= $userData['numero_empleado'] ?>" style="text-transform:uppercase;" readonly> -->
                                            <?php echo $numeroEmpleado; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12">
                                        <label class="form-label mt-4">Correo electrónico registrado y verificado *</label>
                                        <div class="input-group">
                                            <input id="email" name="email" maxlength="49" class="form-control" type="email" placeholder="example@email.com" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['email'] ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-12">
                                        <label class="form-label mt-4">Unidad de Negocio *</label>
                                        <select class="form-control" style="cursor: pointer;" name="bu" id="bu" tabindex="-1" data-choice="active" required>
                                            <option value="" disabled selected>Selecciona una opción</option>
                                            <?php echo $optionsBu; ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-3 col-sm-12">
                                        <label class="form-label mt-4">Línea *</label>
                                        <select class="form-control" style="cursor: pointer;" name="linea_principal" id="linea_principal" tabindex="-1" data-choice="active" required>
                                            <option value="" disabled selected>Selecciona una opción</option>
                                            <?php echo $optionsLineaPrincipal; ?>
                                        </select>
                                    </div>


                                </div>
                                <div class="row">

                                    <div class="col-lg-4 align-self-center">
                                        <label class="form-label mt-4">Posición *</label>
                                        <select class="form-control" style="cursor: pointer;" name="posicion" id="posicion" tabindex="-1" data-choice="active" required>
                                            <option value="" disabled selected>Selecciona una opción</option>
                                            <?php echo $optionsPosiciones; ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <label class="form-label mt-4">Estado *</label>
                                        <select class="form-control" style="cursor: pointer;" name="residencia" id="residencia" tabindex="-1" data-choice="active" required>
                                            <option value="" disabled selected>Selecciona una opción</option>
                                            <?php echo $optionsEstados; ?>
                                        </select>
                                        <!-- <input type="text" name="residencia_value" id="residencia_value"> -->
                                    </div>


                                    <div class="col-md-4 col-sm-12"  id="show-cp" style="display: none;">
                                        <label class="form-label mt-4">Código Postal *</label><br>
                                        <input type="text" class="form-control" id="cp" name="cp" list="list_cp">
                                        <datalist id="list_cp">

                                        </datalist>
                                        <!-- <select class="form-control" name="cp" id="cp" required>
                                            <option value="" disabled selected>Seleccione una opción</option>
                                            <?php //echo $optionsCp; ?>
                                        </select> -->
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <label class="form-label mt-4">Aeropuerto *</label>
                                        <select class="form-control" style="cursor: pointer;" name="aeropuerto" id="aeropuerto" tabindex="-1" data-choice="active" required>
                                            <option value="" disabled selected>Selecciona una opción</option>
                                            <?php echo $optionsAeropuertos; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label mt-4">Actividad *</label>
                                        <select class="form-control" style="cursor: pointer;" name="actividad" id="actividad" tabindex="-1" data-choice="active" required>
                                            <option value disabled>Selecciona una opción</option>
                                            <option value="caminata_3k">Caminata 3k</option>
                                            <option value="carrera_5k">Carrera 5k</option>
                                        </select>
                                    </div>
                                    <!-- <div class="col-md-3 col-sm-12">
                                        <label class="form-label mt-4">Talla de Playera *</label>
                                        <select class="form-control" style="cursor: pointer;" required="true" name="talla_playera" id="talla_playera" tabindex="-1" data-choice="active">
                                            <option value="" disabled>Seleccione una Talla</option>
                                            <option value="Chica">Chica</option>
                                            <option value="Mediana">Mediana</option>
                                            <option value="Grande">Grande</option>
                                            <option value="Extra_Grande">Extra Grande</option>
                                        </select>
                                    </div> -->
                                    <!-- <div class="col-md-3 col-sm-12">
                                        <label class="form-label mt-4">Restricciones alimenticias</label>
                                        <input class="form-control" id="alergias" maxlength="149" name="alergias" data-color="dark" type="text" value="<?= $userData['alergias'] ?>" placeholder="Enter something" />
                                    </div> -->
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-3 col-sm-12">
                                        <label class="form-label mt-4">Restricciones Alimentarias *</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="restricciones_alimenticias" id="res_ali_1" value="vegetariano">
                                            <label class="form-check-label" for="res_ali_1">
                                                Vegetariano
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="restricciones_alimenticias" id="res_ali_2" value="vegano">
                                            <label class="form-check-label" for="res_ali_2">
                                                Vegano
                                            </label>
                                        </div>
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="restricciones_alimenticias" id="res_ali_3" value="kosher">
                                            <label class="form-check-label" for="res_ali_3">
                                                Kosher
                                            </label>
                                        </div> -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="restricciones_alimenticias" id="res_ali_4" value="ninguna" checked>
                                            <label class="form-check-label" for="res_ali_4">
                                                Ninguna
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="restricciones_alimenticias" id="res_ali_5" value="otro">
                                            <label class="form-check-label" for="res_ali_5">
                                                Otro
                                            </label>
                                        </div>
                                        <div class="col-md-12 col-sm-12 restricciones_alimenticias" style="display: none!important;">
                                            <label class="form-label mt-4">¿Cual?</label>
                                            <input id="restricciones_alimenticias_cual" name="restricciones_alimenticias_cual" maxlength="45" class="form-control" type="text" placeholder="Escriba su restricción"   value="">
                                                
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                        <label class="form-label mt-4">Alérgico a *</label>
                                        <select class="form-control" name="alergias[]" id="select_alergico" multiple="multiple">
                                            <option value="lacteos">Lácteos</option>
                                            <option value="gluten">Gluten</option>
                                            <option value="mariscos">Pescados y/o mariscos</option>
                                            <option value="otros">Otros</option>
                                        </select>

                                        <div class="col-md-12 col-sm-12 cont_alergia_otro" style="display: none;">
                                            <label class="form-label mt-4">Especifique </label>
                                            <input class="form-control" id="alergia_otro" maxlength="149" name="alergia_otro" data-color="dark" type="text" value="" placeholder="Escriba su alergia" />
                                        </div>
                                    </div>
                                   

                                    <div class="col-md-4 col-sm-12">
                                        <label class="form-label mt-4">¿Es usted alérgico a un medicamento?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="confirm_alergia" id="confirm_alergia_si" value="si">
                                            <label class="form-check-label" for="confirm_alergia_si">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="confirm_alergia" id="confirm_alergia_no" value="no" checked>
                                            <label class="form-check-label" for="confirm_alergia_no">
                                                No
                                            </label>
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12 medicamento_cual" style="display: none!important;">
                                            <label class="form-label mt-4">¿Cual?</label>
                                            <input id="alergia_medicamento_cual" name="alergia_medicamento_cual" maxlength="29" pattern="[a-zA-Z0-9]*" class="form-control" type="text" placeholder="Escriba a que medicamento es alérgico"   value="">
                                                
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                </div>


                                <br>
                                <br>
                                <p> Los campos marcados con (*) son obligatorios.</p>



                                <!-- <div class="row">
                                        
                                        
                                    </div> -->

                                <div class="row">
                                    <div class="button-row d-flex mt-4 col-12">
                                        <a class="btn bg-gradient-light mb-0 js-btn-prev" href="/Register" title="Prev">Regresar</a>
                                        <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Next">Siguiente</button>
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

<script>
            $(document).ready(function() {
                $("#residencia").on("change", function() {
                    $("#show-cp").css('display', 'block');
                });

                // $("#cp").on("keyup", function(){
                //     var estado = $("#residencia").val();
                //     var codigo = $(this).val();

                //     $.ajax({
                //         url: "/Register/SearchConcidenciaCp",
                //         type: "POST",
                //         data: {codigo,estado},
                //         dataType: "json",
                //         beforeSend: function() {
                //             console.log("Procesando....");
                //             $('#list_cp')
                //                 .find('option')
                //                 .remove()
                //                 .end();
        
                //         },
                //         success: function(respuesta) {
                //              console.log(respuesta);
    
        
                //             $.each(respuesta, function(key, value) {
                //                 //console.log(key);
                //                 console.log(value);
                //                 $('#list_cp')
                //                     .append($('<option>', {
                //                             'data-value': value.id 
                //                         })
                //                         .text(value.codigo_postal + ' - ' + value.colonia + ' - ' + value.del_mpio + ' - ' + value.estado));
                                
        
                //             });
        
                //         },
                //         error: function(respuesta) {
                //             console.log(respuesta);
                //         }
        
                //     });
                // });
        
        
                //$('#cp').select2();
        
        
                $('#select_alergico').select2();
        
                $('#select_alergico').on("change", function() {
                    $('#alergia_otro').removeAttr('required');
        
                    var valores = $(this).val();
        
                    console.log(valores);
                    if (valores != null) {
                        if (valores.length) {
        
                            console.log(valores.length);
        
                            $.each(valores, function(key, value) {
                                if (value == 'otros') {
                                    console.log(value);
                                    $(".cont_alergia_otro").css('display', 'block');
                                    $("#alergia_otro").attr('required','required');
                                    $("#alergia_otro").val("");
                                } else {
                                    $(".cont_alergia_otro").css('display', 'none');
                                    
                                    
                                }
        
                            });
        
                        }
                    } else {
                        $(".cont_alergia_otro").css('display', 'none');
                    }
                });
        
                $('input:radio[name="confirm_alergia"]').change(function() {
                    if ($("#confirm_alergia_no").is(':checked')) {
                        $(".medicamento_cual").css("display", "none");
                        $("#alergia_medicamento_cual").val("");
                        $('#alergia_medicamento_cual').removeAttr('required');
                    }
        
                    if ($("#confirm_alergia_si").is(':checked')) {
                        $(".medicamento_cual").css("display", "block");
                        $("#alergia_medicamento_cual").attr('required','required');
                    }
                });

                $('input:radio[name="restricciones_alimenticias"]').change(function() {
                    if ($("#res_ali_5").is(':checked')) {
                        $(".restricciones_alimenticias").css("display", "block");
                        $("#restricciones_alimenticias_cual").val("");
                        $("#restricciones_alimenticias_cual").attr('required','required');
                    }else{
                        $(".restricciones_alimenticias").css("display", "none");
                        $('#restricciones_alimenticias_cual').removeAttr('required');
                    }
        
                });
            });
            </script>