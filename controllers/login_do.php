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
$sql = 'SELECT * FROM user '.
    'WHERE username='.fixDb($username).
    ' AND password='.fixDb(md5($password));

$result = $db->getData($sql);
echo '<pre>';
print_r ($result);
echo '</pre>';