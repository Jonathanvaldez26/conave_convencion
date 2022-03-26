<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\interfaces\Crud;

class Notificaciones{


    public static function getNotificaciones($id){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM notif WHERE utilerias_asistentes_id = $id 
sql;

        return $mysqli->queryAll($query);
    }
}
