<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db_con
 *
 * @author jamal
 */
class db_con {

    //put your code here

    const db_server = "localhost";
    const db_name = "db_crenjal"; // "crenjalc_jamal_zareie";
    const db_user = "root"; //"crenjalc_jamal";
    const db_password = ""; // "1430548JaMaL";

    private $db = null;

    public function db_con() {
        //PDO Database Connection
        $dsn = 'mysql:dbname=' . self::db_name . ';port:80;host=' . self::db_server;
        //Try-Catch Block
        try {
            $this->db = new PDO($dsn, self::db_user, self::db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            echo 'Connection Failed: ' . $e->getMessage();
        }
    }

    public function insert($table, $fields, $params) {
        $query = "insert into $table ($fields) values ($params)";
        $insert = $this->db->prepare($query);
        return $insert->execute();
    }

    public function select($table, $fields, $where, $order, $limit) {
        $query_new = $this->db->prepare("select $fields from $table where $where ORDER by $order limit $limit");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function select_one($table, $fields, $where, $order, $limit) {
        $query_new = $this->db->prepare("select $fields from $table where $where ORDER by $order limit $limit");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetch();
        }
        return FALSE;
    }

    public function update($table, $set, $where) {
        $up = "UPDATE $table SET $set Where $where";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function delete($table, $where) {
        $del = "delete from $table where $where";
        $delet = $this->db->prepare($del);
        return $delet->execute();
    }

    function clientIP() {
        static $_list = array('REMOTE_ADDR', 'HTTP_CLIENT_IP', 'CLIENT_IP', 'HTTP_X_REAL_IP', 'HTTP_PROXY_CONNECTION', 'HTTP_FORWARDED', 'HTTP_CF_CONNECTING_IP', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_X_FORWARDED', 'HTTP_X_FORWARDED_HOST', 'HTTP_X_FORWARDED_SERVER', 'FORWARDED_FOR_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED_FOR_IP', 'HTTP_X_FORWARDED_FOR', 'FORWARDED', 'X_FORWARDED_FOR', 'FORWARDED_FOR', 'X_FORWARDED', 'HTTP_VIA', 'VIA');

        foreach ($_list as $_value) {
            if (isset($_SERVER[$_value]))
                return $_SERVER[$_value];
            elseif (getenv($_value))
                return getenv($_value);
            elseif (isset($HTTP_SERVER_VARS[$_value]))
                return $HTTP_SERVER_VARS[$_value];
            elseif (@apache_getenv($_value, TRUE))
                return apache_getenv($_value, TRUE);
            elseif (isset($_ENV[$_value]))
                return $_ENV[$_value];
            else
                continue;
        }

        return FALSE;
    }

    function hacking($str) {
        $str = htmlspecialchars($str);
        $str = mysql_real_escape_string($str);
        return $str;
    }

}

$dbclass = new db_con();
?>
