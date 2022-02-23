<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\models\Register AS RegisterDao;
use \App\models\LineaGeneral AS LineaGeneralDao;
use \App\models\Data AS DataDao; 
use \App\controllers\Mailer;
use \App\controllers\Contenedor;
use Core\Controller;

class Register{
    private $_contenedor;

    public function index() {
        $extraHeader =<<<html
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon.ico">
        <link rel="icon" type="image/vnd.microsoft.icon" href="/assets//img/favicon.ico">
        <title>
            Conave Register
        </title>
       
        

html;
        $extraFooter =<<<html
     
        <script src="/js/jquery.min.js"></script>
        <script src="/js/validate/jquery.validate.js"></script>
        <script src="/js/alertify/alertify.min.js"></script>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
       <!--   Core JS Files   -->
          <script src="../../../assets/js/core/popper.min.js"></script>
          <script src="../../../assets/js/core/bootstrap.min.js"></script>
          <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
          <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
          
          
         
          <!-- Kanban scripts -->
          <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
          <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
          <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
              var options = {
                damping: '0.5'
              }
              Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
          </script>
          <!-- Github buttons -->
          <script async defer src="https://buttons.github.io/buttons.js"></script>
          <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
           

          <script>
            $(document).ready(function(){
                $.validator.addMethod("checkUserCorreo",function(value, element) {
                  var response = false;
                    $.ajax({
                        type:"POST",
                        async: false,
                        url: "/Register/isUserValidate",
                        data: {email: $("#email").val()},
                        success: function(data) {
                            if(data=="true"){
                                $('#btn_registro_email').attr("disabled", false);
                                $('#confirm_email').attr("disabled", false);
                                $('#email').attr("disabled", true);

                                response = true;
                            }else{
                                $('#btn_registro_email').attr("disabled", true);
                                $('#confirm_email').attr("disabled", true);
                                document.getElementById("confirm_email").value = "";
                            }
                        }
                    });

                    return response;
                },"Usted no está registrado en la Base de Datos CONAVE 2022, verifique con su área y reintente.");

                $("#email_form").validate({
                   rules:{
                        email:{
                            required: true,
                            checkUserCorreo: true
                        },
                        confirm_email:{
                            required: true,
                            equalTo:"#email"
                        }
                    },
                    messages:{
                        email:{
                            required: "Este campo es requerido",
                        },
                        confirm_email:{
                            required: "Este campo es requerido",
                            equalTo: "El Correo Eléctronico no coincide",
                        }
                    }
                });

                


            });
        </script>
       
html;
        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
        View::render("register");
    }

}
