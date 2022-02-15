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
      View::set('header',$this->_contenedor->header($extraHeader));
      View::set('footer',$this->_contenedor->footer($extraFooter));
      View::render("account_all");
    }

}
