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
        <script src="/js/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script>
            $(document).ready(function() {
        
                $("#update_form").on("submit", function(event) {
                    event.preventDefault();
        
                    var formData = new FormData(document.getElementById("update_form"));
                    for (var value of formData.values()) {
                       console.log(value);
                    }
  
                    $.ajax({
                        url: "/Account/Actualizar",
                        type: "POST",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            console.log("Procesando....");
        
        
                        },
                        success: function(respuesta) {
        
                            if (respuesta == 'success') {
                                swal("Se actualizaron tus datos correctamente!", "", "success").
                                then((value) => {
                                    window.location.replace("/Account/");
                                });
                            } else {
                                swal("Usted No Actualizo Nada!", "", "warning").
                                then((value) => {
                                    window.location.replace("/Account/")
                                });
                            }
                        },
                        error: function(respuesta) {
                            console.log(respuesta);
                        }
        
                    });
                });
        
                $(document).on('change', '#file-input', function(e) {
                    $("#form_upload_image").submit();
                });
        
                $("#form_upload_image").on("submit", function(event) {
                    event.preventDefault();
                    // alert("funciona");
        
                    var formData = new FormData(document.getElementById("form_upload_image"));
                    console.log(formData);
        
                    $.ajax({
                        url: "/Account/uploadImage",
                        type: "POST",
                        data: formData,
                        dataType: "json",
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            console.log("Procesando....");
        
        
                        },
                        success: function(respuesta) {
                            console.log(respuesta);
                            if(respuesta.status == "success"){
                                //location.reload();
                                $("#img-user").attr("src","../../../img/users_conave/"+respuesta.img);
                            }
                           
                        },
                        error: function(respuesta) {
                            console.log(respuesta);
                        }
        
                    });
                });
        
            });
        </script>
html;

        $userData = LoginDao::getUser($_SESSION['usuario'])[0];

        $lineaGeneral = LineaGeneralDao::getLineaPrincialAll();
        
        
        $optionsLineaPrincipal = '';
        $optionsActividad = '';
        $optionsTalla = '';
        $idLineaPrincipal = '';
        $nombreLineaPrincipal = '';
        $optionsGenero = '';

        foreach ($lineaGeneral as $key => $value) {

            if($userData['id_linea_principal'] == $value['id_linea_principal']){
                $idLineaPrincipal =  $value['id_linea_principal'];
                $nombreLineaPrincipal =  $value['nombre'];
            }
            
            $optionsLineaPrincipal.=<<<html
                <option value="{$value['id_linea_principal']}">{$value['nombre']}</option>
               
html;
        }   

        if($userData['genero'] != ''){
            if($userData['genero'] == "Hombre"){
                $optionsGenero = <<<html
                    <option value="Hombre" selected>Masculino</option>
                    <option value="Mujer">Femenino</option>
html;
    
            }
            else if($userData['genero'] == "Mujer"){
                $optionsGenero = <<<html
                    <option value="Hombre">Masculino</option>
                    <option value="Mujer" selected>Femenino</option>
html;
    
            }
            else{
                $optionsGenero = <<<html
                    <option value="Hombre">Masculino</option>
                    <option value="Mujer">Femenino</option>
html;
    
            }

        
        } else {
            $optionsGenero .=<<<html
                <option value="Hombre">Masculino</option>
                <option value="Mujer">Femenino</option>
html;
        }
           

        $userData = RegisterDao::getUserRegisterUpdateData($userData['email'])[0];

        if($userData['img'] != ''){
            $imgUser=<<<html
            <img src="../../../img/users_conave/{$userData['img']}" id="img-user" alt="bruce" class="w-100 h-100 border-radius-lg shadow-sm">
html;

        }else{
            $imgUser=<<<html
            <img src="../../../img/user.png" alt="bruce" id="img-user" class="w-100 border-radius-lg shadow-sm">
html;
        }

        if ($userData['alergias'] == '') {
            $alergias =<<<html
            <div class="col-md-3">
                <label class="form-label mt-4">Alergias *</label>
                <input class="form-control" name="alergias" id="alergias" maxlength="149" name="alergias" data-color="dark" type="text" value="Ninguna" placeholder="" readonly />
            </div>
html;
        } else{
            $alergias =<<<html
            <div class="col-md-3">
                <label class="form-label mt-4">Alergias *</label>
                <input class="form-control" name="alergias" id="alergias" maxlength="149" name="alergias" data-color="dark" type="text" value="{$userData['alergias']}" placeholder="" readonly />
            </div>
html;
        }

        if ($userData['alergias_otro'] == '') {
            $alergias_otro =<<<html
            <div class="col-md-3">
                <label class="form-label mt-4">Alergias Otro *</label>
                <input class="form-control" name="alergias_otro" id="alergias_otro" maxlength="149" name="alergias" data-color="dark" type="text" value="Ninguna" placeholder="" readonly />
            </div>
html;
        } else{
            $alergias_otro =<<<html
            <div class="col-md-3">
                <label class="form-label mt-4">Alergias Otro *</label>
                <input class="form-control" name="alergias_otro" id="alergias_otro" maxlength="149" name="alergias" data-color="dark" type="text" value="{$userData['alergias_otro']}" placeholder="" readonly />
            </div>
html;
        }

        if ($userData['alergia_medicamento_cual'] == '') {
            $alergia_medicamento_cual =<<<html
            <div class="col-md-3">
                <label class="form-label mt-4">Alergias Medicamento *</label>
                <input class="form-control" name="alergia_medicamento_cual" id="alergia_medicamento_cual" maxlength="149" name="alergias" data-color="dark" type="text" value="Ninguna" placeholder="" readonly />
            </div>
html;
        } else{
            $alergia_medicamento_cual =<<<html
            <div c<div class="col-md-3">
                <label class="form-label mt-4">Alergias Medicamento *</label>
                <input class="form-control" name="alergia_medicamento_cual" id="alergia_medicamento_cual" maxlength="149" name="alergias" data-color="dark" type="text" value="{$userData['alergia_medicamento_cual']}" placeholder="" readonly />
            </div>
html;
        }

      View::set('imgUser',$imgUser);
      View::set('alergias',$alergias);
      View::set('alergias_otro',$alergias_otro);
      View::set('alergia_medicamento_cual',$alergia_medicamento_cual);
      View::set('header',$this->_contenedor->header($extraHeader));
      View::set('footer',$this->_contenedor->header($extraFooter));
      View::set('userData', $userData);
      View::set('optionsLineaPrincipal',$optionsLineaPrincipal);
      View::set('optionsGenero',$optionsGenero);
      View::set('optionsActividad',$optionsActividad);
      View::set('optionsTalla',$optionsTalla);
      View::set('idLineaPrincipal',$idLineaPrincipal);
      View::set('nombreLineaPrincipal',$nombreLineaPrincipal);
      View::render("account_all");
    }


//         else{
//             $optionsGenero = <<<html
//                 <option value="Hombre">Masculino</option>
//                 <option value="Mujer">Femenino</option>
// html;   
//         }


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
            //   $linea_principal = $_POST['linea_principal'];
            //   $talla = $_POST['talla'];
            //   $actividad = $_POST['actividad'];
              $alergias = $_POST['alergias'];

              $documento->_nombre = $nombre;
              $documento->_segundo_nombre = $segundo_nombre;
              $documento->_apellido_paterno = $apellido_paterno;
              $documento->_apellido_materno = $apellido_materno;
              $documento->_genero = $genero;
              $documento->_fecha_nacimiento = $fecha_nacimiento;
              $documento->_email = $email;
              $documento->_telefono = $telefono;
              //$documento->_linea_principal = $linea_principal;
              //$documento->_talla = $talla;
              //$documento->_actividad = $actividad;
              $documento->_alergias = $alergias;

              $id = DataDao::updateInAdmin($documento);

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

          $numero_rand = $this->generateRandomString();
          $email = $_POST['email_'];
          $img = $_FILES["file-input"];
          $img_name = $img["tmp_name"];

          //move_uploaded_file($img["tmp_name"], "img/users_conave/".$email.".png");
          $this->deleteFile($email);

          move_uploaded_file($img["tmp_name"], "img/users_conave/".$numero_rand.".png");

          $documento->_img = $numero_rand.'.png';
          $documento->_email = $email;

          $id = RegisterDao::updateImg($documento);

          if($id){

            
            $data = [
                'status' => 'success',
                'img' => $numero_rand.'.png'
            ];
               //echo "success";
          }else{
               //echo "fail";

               $data = [
                'status' => 'fail'
            
                ];
            
          }

         
         echo json_encode($data);


      } else {
          echo 'fail REQUEST';
      }
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

    public function deleteFile($id_registro){
        $regitser = RegisterDao::getUserRegister($id_registro)[0];
        if (file_exists('img/users_conave/'.$regitser['img'])) {
           // echo "El fichero ". $regitser['img']." existe";
            unlink('img/users_conave/'.$regitser['img']);
        }
    }


}
