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
        echo "prueba de controlador";
    }

}
