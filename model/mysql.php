<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 2.02.2018
 * Time: 10:49
 */

class mysql
{
    // klassi väljad
    var $conn = false; // ühendus db serveriga
    var $host = false; // db serveri nim/ip
    var $user = false; // db  kasutaja nimi
    var $pass = false; // db kasutaja parool
    var $dbname = false; // db nimi

    /**
     * mysql constructor.
     * @param bool $host
     * @param bool $user
     * @param bool $pass
     * @param bool $dbname
     */
    public function __construct($host, $user, $pass, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->connect(); // ühenduse loomine
    }
    function connect() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if($this->conn == false) {
            echo 'Probleem andmebaasi ühendamisega <br />';
            echo mysqli_connect_error();
            exit;
        }
    }

    // funktsioon päringu edastamiseks
    function query($sql){
        $result = mysqli_query($this->conn, $sql);
        if($result == false) {
            echo 'Probleem päringuga <br />';
            echo '<b>'.$sql.'<br />';
            return false;
        }
        return $result;
    }


}