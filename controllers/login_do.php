<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 12.02.2018
 * Time: 9:50
 */
// vormi poolt tulnud andmed
$username = $http->get('username');
$password = $http->get('password');

// kontrollime nende sisu
echo $username.'<br />';
echo $password.'<br />';

// koostame päring kasutaja kontrollimiseks
$sql = 'SELECT * FROM USER '.
    'WHERE username='.fixDb($username).
    ' AND password='.fixDb(md5($password));
echo $sql.'<br />';