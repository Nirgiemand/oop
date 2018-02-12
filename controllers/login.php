<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 12.02.2018
 * Time: 8:55
 */
// loome sisselogimisvormi objekt
$loginForm = new template('login');

// paneme paika vajalikud väärtused malli sisustamiseks
$loginForm->set('kasutaja', 'Kasutajanimi');
$loginForm->set('parool', 'Kasutaja parool');
$loginForm->set('nupp', 'Logi sisse');

//paneme väärtused malli
// selleks oleks vaja trükkida välja sisselogimisvorm {content} elemendis
$mainTmpl->set('content', $loginForm->parse());
