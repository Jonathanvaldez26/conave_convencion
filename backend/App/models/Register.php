<?php

namespace App\models;
defined("APPPATH") or die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Register
{

    public static function insert($register)
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
        INSERT INTO utilerias_administradores VALUES(null,:nombre,:usuario,:title,:name_user,:middle_name,:surname,:second_surname,:telephone,:international_code,:id_nationality,:id_state, :id_country,:organization,:position_organization,:address,:organization_country,:organization_postal_code,:wadd_member,:apm_member,:scholarship,:business_name_iva,:code_iva,:payment_method_iva,:email_receipt_iva,:postal_code_iva)                        
sql;

        $parametros = array(
            ':nombre' => $register->_name,
            ':usuario' => $register->_email,
            ':title' => $register->_title,
            ':name_user' => $register->_name,
            ':middle_name' => $register->_middle_name,
            ':surname' => $register->_surname,
            ':second_surname' => $register->_second_surname,
            ':telephone' => $register->_telephone,
            ':international_code' => $register->_international_code,
            ':id_nationality' => $register->_nationality,
            ':id_state' => $register->_state,
            ':id_country' => $register->_residence,
            ':organization' => $register->_organization,
            ':position_organization' => $register->_position,
            ':address' => $register->_address,
            ':organization_country' => $register->_organization_country,
            ':organization_postal_code' => $register->_organization_postal_code,
            ':wadd_member' => $register->_wadd_member,
            ':apm_member' => $register->_apm_member,
            ':scholarship' => $register->_scholarship,
            ':business_name_iva' => $register->_business_name_iva,
            ':code_iva' => $register->_code_iva,
            ':payment_method_iva' => $register->_payment_method_iva,
            ':email_receipt_iva' => $register->_email_receipt_iva,
            ':postal_code_iva' => $register->_postal_code_iva
        );

        $id = $mysqli->insert($query, $parametros);
        $accion = new \stdClass();
        $accion->_sql = $query;
        $accion->_parametros = $parametros;
        $accion->_id = $id;

        return $id;
    }

    public static function getCountryAll()
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
      SELECT * FROM paises ORDER BY country ASC
sql;
        return $mysqli->queryAll($query);
    }

    public static function getState($pais)
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
     SELECT * FROM estados WHERE id_pais = $pais;
sql;
        return $mysqli->queryAll($query);
    }
}
