<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 2.02.2018
 * Time: 10:26
 */
// saame teada, millise nimega kontrollerit on vaja
$control = $http->get('control'); // kontrolleri nimi
// koostame vasatav faili nimi, kus kontrolleri sisu asumas
$file = CONTROL_DIR.$control.'.php';
if(file_exists($file) and is_file($file) and is_readable($file)){
    require_once $file;
} else {
    $file = CONTROL_DIR.DEFAULT_CONTROL.'.php';
    require_once $file;
}