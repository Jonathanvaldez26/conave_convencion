<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\controllers\Contenedor;
use \Core\Controller;
use \App\models\Covid AS CovidDao;

class Covid extends Controller{

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
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
html;

      $pruebas = CovidDao::getAll();
      $tabla = '';
      $status = '';
      $fechaActual = date('d-m-Y');
      foreach ($pruebas as $key => $prueba) {
        if($prueba['status'] = 1){
          $status.=<<<html
          <span class="badge badge-sm badge-success">Se valido Correctamente</span>   
html;
        }elseif ($prueba['status'] = 2)
        {
            $status.=<<<html
            <span class="badge badge-sm badge-secondary">En Espera a Validar</span>
html;
        }

        $tabla.=<<<html
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">Prueba Covid Lab {$prueba['id_prueba_covid']}</h6>
                <p class="text-xs text-secondary mb-0">{$prueba['fecha_prueba_covid']}</p>
              </div>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            {$status}
          </td>
          <td>
            <div class="text-center">
              <div class="d-flex flex-column justify-content-center" style="text-transform: capitalize;"S>
                <h6 class="mb-0 text-xs">{$prueba['tipo_prueba']}</h6>
              </div>
            </div>
          </td>
          <td>
          <div class="text-center">
              <div class="d-flex flex-column justify-content-center" style="text-transform: capitalize;">
                <h6 class="mb-0 text-xs">{$prueba['resultado']}</h6>
              </div>
            </div>
          </td>
          <td>
          <div class="text-center">
              <div class="d-flex flex-column justify-content-center" style="text-transform: capitalize;">
                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ver-documento">
                  Ver documento
                </button>
              </div>
            </div>
          </td>
        </tr>
html;
      }
      $extraFooter =<<<html
     
html;

      $iframe_doc = <<<html
        <div class="modal-body">
          <iframe src="/assets/pdf/{$prueba['documento']}" style="width:100%; height:460px;" frameborder="0" >
          </iframe>
        </div>
html;
      
      View::set('iframe_doc',$iframe_doc);
      View::set('tabla',$tabla);
      View::set('fechaActual',$fechaActual);
      View::set('header',$this->_contenedor->header($extraHeader));
      View::set('footer',$this->_contenedor->footer($extraFooter));
      View::render("covid_all");
    }

    public function uploadPrueba(){
        echo "funciona";
        // $ticket = $_FILES["file_"];
      // $ticket_name = $_FILES["file_"]['name'];
      // $nota = $_POST['note_'];
      // echo $nota;
      // var_dump($ticket);
      // echo $ticket_name;

      $documento = new \stdClass();
      

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {


          $titulo = 'PruebaCovid';
          $fecha_prueba = $_POST['fecha_'];
          $tipo_prueba = $_POST['tipo_prueba_'];
          $resultado = $_POST['resultado_'];
          $file = $_FILES["file_"];
          $usuario = $_POST["user_"];
          $fecha = date("Y-m-d h:i:s");
          $ruta = $usuario.$titulo.$fecha;



          // var_dump($fecha_prueba);
          // echo "<br>";
          // var_dump($tipo_prueba);
          // echo "<br>";
          // var_dump($resultado);
          // echo "<br>";
          // var_dump($file);
          // echo "<br>";
          // var_dump($usuario);
          // exit;

          move_uploaded_file($file["tmp_name"], "pruebas_covid/".$usuario.'.pdf');

          $documento->_url = $usuario.'.pdf';
          $documento->_user = $usuario;
          $documento->_fecha_prueba = $fecha_prueba;
          $documento->_tipo_prueba = $tipo_prueba;
          $documento->_resultado = $resultado;

          
          $id = CovidDao::insert($documento);

          if ($id) {
              echo 'success';

          } else {
              echo 'fail';
          }
      } else {
          echo 'fail REQUEST';
      }
    }

}
