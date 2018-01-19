<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 19.01.2018
 * Time: 11:09
 */
// loeme sisse projekti konfiguratsiooni
require_once 'conf.php';

// loome test objekti template klassist
$testTabel = new template('views/test.html');

//määrame reaaalväärtused
$testTabel->set('esimene','1');
$testTabel->set('teine','2');

// lisame objekti testvaade
echo '<pre>';
print_r($testTabel);
echo '<pre />';
$testTabel->parse();