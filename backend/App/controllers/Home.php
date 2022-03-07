<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\Controller;
use \App\models\Home AS HomeDao;
use \App\models\Covid AS CovidDao;
use \App\models\Vaccination AS VaccinationDao;
use \App\models\PasesAbordar AS PasesAbordarDao;


class Home extends Controller{

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
      <link id="pagestyle" href="/assets/css/style.css" rel="stylesheet" />
html;

        //Modulo Comprobante de vacunacion
        $comprobante_vacunacion = VaccinationDao::getCountHome($_SESSION['utilerias_asistentes_id']);
        if($comprobante_vacunacion['count'] >= 1 ){
        $active_pruebas_covid = "Disponible <i class=\"fa fa-check-circle me-sm-0\" style=\"color: #01a31c\"></i>";
        }else{
          $active_pruebas_covid = "En espera <i class=\"fa fa-clock me-sm-0\" style=\"color: #8a6d3b\"></i>";
        }

        //modulo pases de abordar
        $pruebas_covid = CovidDao::getCount($_SESSION['utilerias_asistentes_id']);
        if($pruebas_covid['count'] >= 1 ){
        $active_pase_abordar = "Disponible <i class=\"fa fa-check-circle me-sm-0\" style=\"color: #01a31c\"></i>";
        }else{
          $active_pase_abordar = "En espera <i class=\"fa fa-clock me-sm-0\" style=\"color: #8a6d3b\"></i>";
        }
       
        $card_permisos = HomeDao::getCountByUser($_SESSION['utilerias_asistentes_id']);

        //$pickup_permisos = HomeDao::getCountPickUp($_SESSION['utilerias_asistentes_id']);
        $tabla = '';

        //foreach ($pickup_permisos as $key => $value) {
        //    if ($value['count'] >= 0) {
        //        $tabla.= <<<html
        //        aaaaaaas
//html;
  //          } else {
    //            $tabla.= <<<html
    //            ssssss
//html;

          //  }
        //}
        View::set('active_pruebas_covid',$active_pruebas_covid);
        View::set('active_pase_abordar',$active_pase_abordar);
        View::set('header',$this->_contenedor->header($extraHeader));
        //View::set('tabla',$tabla);
        View::render("principal_all");
    }

    public function NoCargaPickup(){
        $extraHeader =<<<html
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon.png">
        <link rel="icon" type="image/vnd.microsoft.icon" href="/assets/img/favicon.png">
        <title>
            Convecnion 2022
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

html;

        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
        View::render("code");
    }

}
