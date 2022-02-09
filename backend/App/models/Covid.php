<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Covid implements Crud{

    public static function getAll(){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT id_prueba_covid, perfil_id, fecha_carga_documento, fecha_prueba_covid, tipo_prueba, resultado, documento, status FROM prueba_covid ORDER BY id_prueba_covid ASC;
      sql;
      return $mysqli->queryAll($query);
    }

    public static function getById($id){
        return "getByID"+$id;
    }

    public static function insert($data){
        return "insert"+$data;
    }

    public static function update($data){
        return "update"+$data;
    }

    public static function delete($id){
        return "delete"+$id;
    }
}