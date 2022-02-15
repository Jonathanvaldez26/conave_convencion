<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\models\Register AS RegisterDao;
use \App\controllers\Mailer;

class Register{
    private $_contenedor;

    public function index() {
        $extraHeader =<<<html
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon.ico">
        <link rel="icon" type="image/vnd.microsoft.icon" href="/assets//img/favicon.ico">
        <title>
            APM Register
        </title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
        <link rel="stylesheet" href="/css/alertify/alertify.core.css" />
        <link rel="stylesheet" href="/css/alertify/alertify.default.css" id="toggleCSS" />
        <!--script src="../../../assets/js/plugins/choices.min.js"></script-->

        
        
        

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
          <script src="../../../assets/js/plugins/multistep-form.js"></script>
          <script src="../../../assets/js/plugins/choices.min.js"></script>
          <script type="text/javascript" wfd-invisible="true">
            if (document.getElementById('choices-button')) {
                var element = document.getElementById('choices-button');
                const example = new Choices(element, {});
            }
            var choicesTags = document.getElementById('choices-tags');
            var color = choicesTags.dataset.color;
            if (choicesTags) {
                const example = new Choices(choicesTags, {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                addItems: true,
                classNames: {
                    item: 'badge rounded-pill choices-' + color + ' me-2'
                }
                });
            }
        </script>
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

    public function Success(){

        $register = new \stdClass();

        $email = MasterDom::getDataAll('email');
        $register->_email = $email;

        $codigo_rand = $this->generateRandomString();
        $register->_code = $codigo_rand;

        $id = RegisterDao::update($register);
        if($id >= 1)
        {
            //$this->alerta($id,'add',$method_pay, $name_register);
            $msg = [
                'email' => $register->_email,
                'code' =>  $register->_code
            ];

            $mailer = new Mailer();
            $mailer->mailer($msg);
        }
        else
        {
            //$this->alerta($id,'error',$method_pay, $name_register);
        }
    }

    public function alerta($id, $parametro, $type_deposit, $name_register){
        $regreso = "/Login/";
        $pay = '';

        if($parametro == 'add')
        {
            if($type_deposit == 'paypal')
            {
                $pay = 'CREDIT OR DEBIT CARD';
                $name = $name_register;
                $message_pay = 'Important note: Please include the reference provided by this system in the field "Concepto 
                de pago" as per instructions above. The payment reference must be entered in capital 
                letters. Do not add any spaces between names or include any other punctuation marks, as 
                this may affect your bank transfer confirmation.';
            }
            if($type_deposit == 'deposit')
            {
                $pay = 'DEPOSIT';
                $name = $name_register;
                $message_pay = '';
            }
            if($type_deposit == 'electronic')
            {
                $pay = 'ELECTRONIC TRANSFER';
                $name = $name_register;
                $message_pay = '';
            }

        }

        if($parametro == "error")
        {
            $mensaje = "Al parecer ha ocurrido un problema";
        }

        View::set('regreso',$regreso);
        View::set('pay',$pay);
        View::set('message_pay',$message_pay);
        View::set('name',$name);
        View::render("alerta");
    }

    public function isUserValidate(){
        echo (count(RegisterDao::getUserRegister($_POST['email']))>=1)? 'true' : 'false';
    }

    function generateRandomString($length = 4) {
        return substr(str_shuffle("0123456789"), 0, $length);
    }

}