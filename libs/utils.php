<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 31.01.2018
 * Time: 9:23
 */
function fixUrl($str){
    return urlencode($str);
}

function fixDb($value){
    return '"'.addslashes($value).'"';
}