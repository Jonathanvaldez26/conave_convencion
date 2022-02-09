<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\controllers\Contenedor;
use \Core\Controller;

class Account extends Controller{

    private $_contenedor;

    function __construct(){
        parent::__construct();
        $this->_contenedor = new Contenedor;
        View::set('header',$this->_contenedor->header());
        View::set('footer',$this->_contenedor->footer());
    }

    public function getUsuario(){
      return $this->__usuario;
    }

    public function index() {
     $extraHeader =<<<html
      <style>
        .logo{
          width:100%;
          height:150px;
          margin: 0px;
          padding: 0px;
        }
      </style>

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
      <script src="../../../assets/js/plugins/choices.min.js"></script>

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
        window.addEventListener("keypress", function(event){
            if (event.keyCode == 13){
                event.preventDefault();
            }
        }, false);
        
          window.onload = function() {
          var myInput = document.getElementById('confirm_email');
          var myInput_conf = document.getElementById('confirm_email_iva');
          myInput.onpaste = function(e) {
            e.preventDefault();
          }
          myInput_conf.onpaste = function(e) {
            e.preventDefault();
          }
          
          myInput.oncopy = function(e) {
            e.preventDefault();
          }
          myInput_conf.oncopy = function(e) {
            e.preventDefault();
          }
        }
     
        $(document).ready(function(){
                
                $('input[type="checkbox"]').on('change', function() 
                {
                    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
                    $('#ModalPayOne').show();
                });
                
                $.validator.addMethod("checkUserName",function(value, element) {
                  var response = false;
                    $.ajax({
                        type:"POST",
                        async: false,
                        url: "/Login/isUserValidate",
                        data: {usuario: $("#usuario").val()},
                        success: function(data) {
                            if(data=="true"){
                                $('#btnEntrar').attr("disabled", false);
                                response = true;
                            }else{
                                $('#btnEntrar').attr("disabled", true);
                            }
                        }
                    });

                    return response;
                },"El usuario no es correcto");
            });
      </script>
html;
      View::set('header',$this->_contenedor->header($extraHeader));
      View::set('footer',$this->_contenedor->footer($extraFooter));
      View::render("account_all");
    }

}
