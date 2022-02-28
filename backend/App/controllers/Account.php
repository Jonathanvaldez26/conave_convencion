<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\controllers\Contenedor;
use \App\models\Login AS LoginDao;
use \App\models\Register AS RegisterDao;
use \App\models\LineaGeneral AS LineaGeneralDao;
use \App\models\Data AS DataDao;
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
        $userData = LoginDao::getUser($_SESSION['usuario'])[0];

        $lineaGeneral = LineaGeneralDao::getLineaPrincialAll();
        $optionsGenero = '';
        $optionsLineaPrincipal = '';
        $optionsActividad = '';
        $optionsTalla = '';
        $idLineaPrincipal = '';
        $nombreLineaPrincipal = '';

        foreach ($lineaGeneral as $key => $value) {

            if($userData['id_linea_principal'] == $value['id_linea_principal']){
                $idLineaPrincipal =  $value['id_linea_principal'];
                $nombreLineaPrincipal =  $value['nombre'];
            }
            $optionsLineaPrincipal.=<<<html
                <option value="{$value['id_linea_principal']}">{$value['nombre']}</option>
               
html;
        }      

        $userData = RegisterDao::getUserRegister($userData['email'])[0];

        //genero
        if($userData['genero'] == 'Hombre'){
            $optionsGenero =<<<html
                <option value="Hombre" selected>Hombre</option>
                <option value="Mujer">Mujer</option>
                <option value="Otro">Otro</option>
html;

        }elseif($userData['genero'] == 'Mujer'){
            $optionsGenero =<<<html
                <option value="Hombre">Hombre</option>
                <option value="Mujer" selected>Mujer</option>
                <option value="Otro">Otro</option>
html;

        }else{
            $optionsGenero =<<<html
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
                <option value="Otro" selected>Otro</option>
html;

        }

        //actividad
        if($userData['actividad'] == 'caminata_3k'){
            $optionsActividad =<<<html
            <option value="caminata_3k" selected>Caminata 3k</option>
html;

        }elseif($userData['actividad'] == 'carrera_5k'){
            $optionsActividad =<<<html
            <option value="carrera_5k" selected>Carrera 5k</option>
html;

        }

        //talla
        if($userData['talla_playera'] == 'Chica'){
            $optionsTalla =<<<html
            <option value="Chica" selected>Chica</option>
            <option value="Mediana">Mediana</option>
            <option value="Grande">Grande</option>
            <option value="Extra_Grande">Extra Grande</option>
html;

        }elseif($userData['talla_playera'] == 'Mediana'){
            $optionsTalla =<<<html
            <option value="Chica">Chica</option>
            <option value="Mediana" selected>Mediana</option>
            <option value="Grande">Grande</option>
            <option value="Extra_Grande">Extra Grande</option>
html;

        }elseif($userData['talla_playera'] == 'Grande'){
            $optionsTalla =<<<html
            <option value="Chica">Chica</option>
            <option value="Mediana">Mediana</option>
            <option value="Grande" selected >Grande</option>
            <option value="Extra_Grande">Extra Grande</option>
html;

        }elseif($userData['talla_playera'] == 'Extra_Grande'){
            $optionsTalla =<<<html
            <option value="Chica">Chica</option>
            <option value="Mediana">Mediana</option>
            <option value="Grande">Grande</option>
            <option value="Extra_Grande" selected>Extra Grande</option>
html;

        }

        if($userData['img'] != ''){
            $imgUser=<<<html
            <img src="../../../img/users_conave/{$userData['img']}" alt="bruce" class="w-100 border-radius-lg shadow-sm">
html;

        }else{
            $imgUser=<<<html
            <img src="../../../img/user.png" alt="bruce" class="w-100 border-radius-lg shadow-sm">
html;
        }

     $extraHeader =<<<html


html;
$extraFooter =<<<html
          
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
        
        

html;

      $extraFooter=<<<html
      <footer class="footer mt-4">
      <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="copyright text-center text-sm text-muted text-lg-start">
                      © <script>
                          document.write(new Date().getFullYear())
                      </script>,
                      made with <i class="fa fa-heart"></i> by
                      <a href="https://www.creative-tim.com" class="font-weight-bold" target="www.grupolahe.com">Creative GRUPO LAHE</a>.
                  </div>
              </div>
              <div class="col-lg-6">
                  <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                      <li class="nav-item">
                          <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">privacy policies</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
html;



      View::set('imgUser',$imgUser);
      View::set('header',$this->_contenedor->header($extraHeader));
      View::set('footer',$extraFooter);
      View::set('userData', $userData);
      View::set('optionsLineaPrincipal',$optionsLineaPrincipal);
      View::set('optionsGenero',$optionsGenero);
      View::set('optionsActividad',$optionsActividad);
      View::set('optionsTalla',$optionsTalla);
      View::set('idLineaPrincipal',$idLineaPrincipal);
      View::set('nombreLineaPrincipal',$nombreLineaPrincipal);
      $idLineaPrincipal = '';
        $nombreLineaPrincipal = '';
      View::render("account_all");
    }


    public function Actualizar(){


        $documento = new \stdClass();


          if ($_SERVER['REQUEST_METHOD'] == 'POST') {

              $id_registro = $_POST['id_registro'];
              $nombre = $_POST['nombre'];
              $segundo_nombre = $_POST['segundo_nombre'];
              $apellido_paterno = $_POST['apellido_paterno'];
              $apellido_materno = $_POST['apellido_materno'];
              $genero = $_POST['genero'];
              $fecha_nacimiento = $_POST['fecha_nacimiento'];
              $email = $_POST['email'];
              $telefono = $_POST['telefono'];
              $linea_principal = $_POST['linea_principal'];
              $actividad = $_POST['actividad'];
              $talla = $_POST['talla'];
              $alergias = $_POST['alergias'];


              $documento->_nombre = $nombre;
              $documento->_segundo_nombre = $segundo_nombre;
              $documento->_apellido_paterno = $apellido_paterno;
              $documento->_apellido_materno = $apellido_materno;
              $documento->_genero = $genero;
              $documento->_fecha_nacimiento = $fecha_nacimiento;
              $documento->_email = $email;
              $documento->_telefono = $telefono;
              $documento->_linea_principal = $linea_principal;
              $documento->_actividad = $actividad;
              $documento->_talla = $talla;
              $documento->_alergias = $alergias;


              $id = DataDao::update($documento);

              if($id){
                  echo "success";
                //header("Location: /Home");
              }else{
                  echo "fail";
               // header("Location: /Home/");
              }


          } else {
              echo 'fail REQUEST';
          }

    }

    public function uploadImage(){


      $documento = new \stdClass();


      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $email = $_POST['email_'];
          $img = $_FILES["file-input"];
          $img_name = $img["tmp_name"];

          move_uploaded_file($img["tmp_name"], "img/users_conave/".$email.".png");

          $documento->_img = $email.'.png';
          $documento->_email = $email;

          $id = RegisterDao::updateImg($documento);

          if($id){

            // $data = [
            //     'status' => 'success',
            //     'img' => $email.'.png'
            // ];
               echo "success";
          }else{
               echo "fail";
            // $data = [
            //     'status' => 'fail'

            // ];
          }

         // echo json_encode($data);


      } else {
          echo 'fail REQUEST';
      }
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }


}
