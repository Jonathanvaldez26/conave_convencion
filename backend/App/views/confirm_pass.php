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
                                <p>Introduce tu contraseña para terminar con tu registro</p>
                                <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                    <i class="fa fa-user-circle"></i>
                                </p>
                            </div>
                            <div class="card-body pt-1">
                                <form class="form-horizontal" id="pass_form" action="/Register/finalize" method="POST">
                                    <input type="hidden" id="id_registro" name="id_registro" value="<?=$id_registro?>">
                                    <input type="hidden" id="email" name="email" value="<?=$email?>">
                                    <div class="mb-3 form-group">
                                        <label>Contraseña *</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Ingresa tu password*" aria-label="Password" required="required">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label>Confirma tu Contraseña *</label>
                                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirma tu password" aria-label="Confirmar tu Password" required="required">
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-outline-danger w-100 my-4 mb-2 ms-auto " type="submit" id="btn_registro_password">Registrar</button>
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

<script>
    $(document).ready(function(){
        
        // $("#pass_form").on("submit",function(event){
        //         event.preventDefault();
                
        //             var formData = new FormData(document.getElementById("pass_form"));
        //             console.log(formData);
        //             $.ajax({
        //             url:"/Register/finalize",
        //             type: "POST",
        //             data: formData,
        //             cache: false,
        //             contentType: false,
        //             processData: false,
        //             beforeSend: function(){
        //                 console.log("Procesando....");

                    
        //             },
        //             success: function(respuesta){
                        
        //                 if(respuesta == 'success'){
        //                     Swal.fire(
        //                         'OK',
        //                         'Te has registrado correctamente!!',
        //                         'success'
        //                     )
        //                 }
        //                 console.log(respuesta);

        //             },
        //             error:function (respuesta)
        //             {
        //                 console.log(respuesta);
        //             }

        //         });
        //     });
    });
</script>