<?php
echo $header;
?>
    
    <body class="">
    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/curved9.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">¡Bienvenido!</h1>
                        <p class="text-lead text-white">Convención Nacional CONAVE 2022, Creciendo 5in Límites. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <p>Terminos y Condiciones</p>
                                <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                    <i class="fa fa-user-circle"></i>
                                </p>
                            </div>
                            <div class="card-body pt-1">
                                <form class="form-horizontal" id="pass_form" action="/Register/DataPassword" method="POST">
                                    <!-- <input type="hidden" id="id_registro" name="id_registro" value="<?=$id_registro?>"> -->
                                    <input type="hidden" id="email" name="email" value="<?=$email?>">
                                    <div class="card-header text-center pt-4">
                                        <p>Aquí van los terminos y condiciones</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-4 col-sm-12">
                                            <button class="btn btn-sm btn-success" id="btn_success" name="btn_success" value="1" type="submit">
                                                Acepto terminos, condiciones y politicas del evento
                                            </button>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <button class="btn btn-sm btn-danger" id="btn_danger" name="btn_danger" value="0" type="submit">
                                                No acepto terminos, condiciones y politicas del evento 
                                            </button>
                                        </div>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    // $(document).ready(function(){
        
        
    //     $("#pass_form").on("submit",function(event){
    //             event.preventDefault();
                
    //                 var formData = new FormData(document.getElementById("pass_form"));
    //                 console.log(formData);
    //                 $.ajax({
    //                 url:"/Register/finalize",
    //                 type: "POST",
    //                 data: formData,
    //                 cache: false,
    //                 contentType: false,
    //                 processData: false,
    //                 beforeSend: function(){
    //                     console.log("Procesando....");

                    
    //                 },
    //                 success: function(respuesta){

    //                     console.log(respuesta);
                       
    //                     if(respuesta == 'success'){
    //                         swal("Te has registrado exitosamente!", "", "success").
    //                         then((value) => {
    //                             window.location.replace("/Login");
    //                         });
    //                     }else{
    //                         swal("Hubo un error al registrarte!", "", "error").
    //                         then((value) => {
    //                             window.location.replace("/Login")
    //                         });
    //                     }

    //                 },
    //                 error:function (respuesta)
    //                 {
                        
    //                     console.log(respuesta);
    //                 }

    //             });
    //         });
    // });
</script>