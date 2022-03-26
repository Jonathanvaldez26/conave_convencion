<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Home{

    public static function getCountByUser($id){
      $mysqli = Database::getInstance();
      $query=<<<sql
    SELECT count(*) as count from pickup where utilerias_asistentes_id = '$id';
sql;
      return $mysqli->queryAll($query);
    }

    public static function getCountPickUp($id){
        $mysqli = Database::getInstance();
        $query=<<<sql
        SELECT count(*) as count from pickup where utilerias_asistentes_id = '$id';
sql;
        return $mysqli->queryOne($query);
    }

    public static function getTallaPlayera($id){
      $mysqli = Database::getInstance();
      $query=<<<sql
      SELECT talla_playera from utilerias_asistentes ua 
      INNER JOIN registros_acceso ra
      ON ua.id_registro_acceso = ra.id_registro_acceso
      WHERE utilerias_asistentes_id = '$id'
sql;
      return $mysqli->queryAll($query);
    }
}