<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Data {

  public static function update($user){
    $mysqli = Database::getInstance(true);
    $query=<<<sql
    UPDATE registros_acceso SET id_bu = :id_bu, id_posicion = :id_posicion, id_residencia = :id_residencia, id_aeropuerto = :id_aeropuerto, id_cp = :id_cp, id_linea_principal = :id_linea_principal, numero_empleado = :numero_empleado, nombre = :nombre, segundo_nombre = :segundo_nombre, apellido_materno = :apellido_materno, apellido_paterno = :apellido_paterno, genero = :genero, fecha_nacimiento = :fecha_nacimiento, telefono = :telefono, actividad = :actividad, talla_playera = :talla_playera, alergias = :alergias WHERE email = :email;
sql;
    $parametros = array(
      ':id_linea_principal'=>$user->_linea_principal,
      ':id_bu'=>$user->_bu,
      ':id_posicion'=>$user->_posicion,
      ':id_residencia'=>$user->_residencia,
      ':id_aeropuerto'=>$user->_aeropuerto,
      ':id_cp'=>$user->_cp,
      ':nombre'=>$user->_nombre,
      ':numero_empleado'=> $user->_numero_empleado,
      ':segundo_nombre'=>$user->_segundo_nombre,
      ':apellido_paterno'=>$user->_apellido_paterno,
      ':apellido_materno'=>$user->_apellido_materno,
      ':genero'=>$user->_genero,
      ':fecha_nacimiento'=>$user->_fecha_nacimiento,
      ':telefono'=>$user->_telefono,
      ':actividad'=>$user->_actividad,
      ':talla_playera'=>$user->_talla,
      ':alergias'=>$user->_alergias,
      ':email'=>$user->_email
      
    );


      $accion = new \stdClass();
      $accion->_sql= $query;
      $accion->_parametros = $parametros;
      $accion->_id = $user->_administrador_id;
      // UtileriasLog::addAccion($accion);
      return $mysqli->update($query, $parametros);
  }

  public static function updateInAdmin($user){
    $mysqli = Database::getInstance(true);
    $query=<<<sql
    UPDATE registros_acceso SET nombre = :nombre, segundo_nombre = :segundo_nombre, apellido_materno = :apellido_materno, apellido_paterno = :apellido_paterno, genero = :genero, fecha_nacimiento = :fecha_nacimiento, telefono = :telefono, alergias = :alergias WHERE email = :email;
sql;
    $parametros = array(
      
      ':nombre'=>$user->_nombre,
      ':segundo_nombre'=>$user->_segundo_nombre,
      ':apellido_paterno'=>$user->_apellido_paterno,
      ':apellido_materno'=>$user->_apellido_materno,
      ':genero'=>$user->_genero,
      ':fecha_nacimiento'=>$user->_fecha_nacimiento,
      ':telefono'=>$user->_telefono,
      ':alergias'=>$user->_alergias,
      ':email'=>$user->_email
      
    );


      $accion = new \stdClass();
      $accion->_sql= $query;
      $accion->_parametros = $parametros;
      $accion->_id = $user->_administrador_id;
      // UtileriasLog::addAccion($accion);
      return $mysqli->update($query, $parametros);
  }


  public static function insert($register)
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
        INSERT INTO utilerias_asistentes VALUES(null,:id_registro_acceso,:usuario,:contrasena,:politica,1)                        
sql;

        $parametros = array(
            ':id_registro_acceso' => $register->_id_registro_acceso,
            ':usuario' => $register->_email,
            ':contrasena' => $register->_password,
            ':politica' => $register->_politica
        );

        $id = $mysqli->insert($query, $parametros);
        $accion = new \stdClass();
        $accion->_sql = $query;
        $accion->_parametros = $parametros;
        $accion->_id = $id;

        return $id;
    }
   
}
