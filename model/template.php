<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 19.01.2018
 * Time: 10:22
 */

class template
{
    // klassi muutujad
    var $file = ''; // HTML malli faili nimi
    var $content = false; // HTML malli sisu, mis alguses puudub, HTML failist loetud sisu
    var $vars = array (); // HTML malli elementide nimetuste ja reaalväärtuste paarid

    // HTML failist sisu lugemine
    function readFile($file) {
        /*
         $fp = fopen($file, 'r');
        $this->content = fread($fp,filesize($file));
        fclose($fp); */
        $this->content = file_get_contents($file)
    }
}