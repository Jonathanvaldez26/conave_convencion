<?php

namespace App\models;
defined("APPPATH") or die("Access denied");

use \Core\Database;
class Register
{

    public static function getUserRegister($email){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM registros_acceso WHERE email = '$email'
sql;

        return $mysqli->queryAll($query);
    }

    public static function getUserRegisterUpdateData($email){
      $mysqli = Database::getInstance(true);
      $query =<<<sql
      SELECT ra.*, ua.* , bu.nombre as nombre_bu, lp.nombre as nombre_linea, p.nombre as nombre_posicion, e.nombre as nombre_estado, cp.del_mpio, cp.colonia, cp.codigo_postal, a.nombre as nombre_aeropuerto
      FROM registros_acceso ra 
      INNER JOIN utilerias_asistentes ua 
      INNER JOIN bu 
      INNER JOIN linea_principal lp
      INNER JOIN posiciones p 
      INNER JOIN estados e
      INNER JOIN cp
      INNER JOIN estados a
      WHERE ra.id_registro_acceso = ua.id_registro_acceso
      and ra.id_bu = bu.id_bu
      and ra.id_linea_principal = lp.id_linea_principal
      and ra.id_posicion = p.id_posicion
      and ra.id_residencia = e.id_estado 
      and ra.id_cp = cp.id
      and ra.id_aeropuerto = a.id_estado
      and ra.email = '$email'
sql;



      return $mysqli->queryAll($query);
  }

    public static function update($registro){
        $mysqli = Database::getInstance(true);
        $query=<<<sql
      UPDATE registros_acceso SET code = :code WHERE email = :email
sql;
        $parametros = array(
            ':code'=>$registro->_code,
            ':email'=>$registro->_email
        );
        $accion = new \stdClass();
        $accion->_sql= $query;
        $accion->_parametros = $parametros;
        $accion->_id = $registro->_email;
        return $mysqli->update($query, $parametros);
    }


    public static function updateImg($user){
        $mysqli = Database::getInstance(true);

        $query=<<<sql
        UPDATE registros_acceso SET img = ''  WHERE email = :email;
sql;
        $parametros = array(
          ':email'=>$user->_email
        );
  
  
          $accion = new \stdClass();
          $accion->_sql= $query;
          $accion->_parametros = $parametros;
          $accion->_id = $user->_administrador_id;
          // UtileriasLog::addAccion($accion);
         $mysqli->update($query, $parametros);



        $query1=<<<sql
        UPDATE registros_acceso SET img = :img  WHERE email = :email;
sql;
        $parametros1 = array(
          ':img'=>$user->_img,
          ':email'=>$user->_email
          
        );
  
  
          $accion = new \stdClass();
          $accion->_sql= $query1;
          $accion->_parametros = $parametros1;
          $accion->_id = $user->_administrador_id;
          // UtileriasLog::addAccion($accion);
          return $mysqli->update($query1, $parametros1);
      }

      public static function getEstadosAll(){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM estados
sql;

        return $mysqli->queryAll($query);
    }

    public static function getCp($id){
      $mysqli = Database::getInstance(true);
      $query =<<<sql
      SELECT * FROM cp where id_estado = $id
sql;

      return $mysqli->queryAll($query);
  }

}
