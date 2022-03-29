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

    public static function getItinerarioAsistente($id){
      $mysqli = Database::getInstance();
      $query=<<<sql
      SELECT i.id_itinerario, ce.nombre as aerolinea_origen, cee.nombre as aerolinea_destino, i.fecha_salida, i.hora_salida, i.fecha_regreso, i.hora_regreso, a.aeropuerto as aeropuerto_salida, aa.aeropuerto as aeropuerto_regreso, i.nota, concat(ra.nombre, " ", ra.segundo_nombre, " ", ra.apellido_paterno, " ", ra.apellido_materno) as nombre 
      FROM itinerario i 
      INNER JOIN catalogo_aerolinea ce on ce.id_aerolinea = i.aerolinea_origen 
      INNER JOIN catalogo_aerolinea cee on cee.id_aerolinea = i.aerolinea_destino 
      INNER JOIN aeropuertos a on a.id_aeropuerto = i.aeropuerto_salida 
      INNER JOIN aeropuertos aa on aa.id_aeropuerto = i.aeropuerto_regreso 
      INNER JOIN utilerias_asistentes ua on ua.utilerias_asistentes_id = i.utilerias_asistentes_id 
      INNER JOIN registros_acceso ra on ra.id_registro_acceso = ua.id_registro_acceso 
      WHERE ua.utilerias_asistentes_id = $id
      
sql;
      return $mysqli->queryAll($query);
    }
}