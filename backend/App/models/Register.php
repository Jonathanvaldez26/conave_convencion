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
