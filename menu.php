<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 31.01.2018
 * Time: 8:47
 */
// loome menüü peamalli objekti template klassist
$menu = new template('menu.menu');
// loome menüü elemendi malli objekti
$menuItem = new template('menu.menu_item');

// koostame päringu menüü ja sisu ülesehitamiseks
$sql ='SELECT content_id, content, title '.
    'FROM content WHERE parent_id ='.fixDb(0).
    ' AND show_in_menu='.fixDb(1);
// kontrollime päringu kirjeldust
// echo $sql;
$result = $db->getData($sql);
// ehitame menüü
if($result != false){
    foreach ($result as $page){
        $menuItem->set('menu_item_name', $page['title']);
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        $menuItem->set('link', $link);
        $http->set('page_id', $page['content_id']);
        $menu->add('menu_items', $menuItem->parse());

    }
}
// lisame lisaelemendid, mis ei ole andmebaasist tulemas

// katsetamiseks lisan uue konstandi, mis määrab kasutaja id - sellest lähtun, kas kasutajale on võimalik antud
// menüü element näidata või mitte

define('USER_ID', 0); // mitte sisselogitud kasutaja

//näitame sisselogimine neile, kes ei ole sisse logitud
if(USER_ID == ROLE_NONE) {
    $menuItem->set('menu_item_name', 'Logi sisse');
    $link = $http->getLink(array('control'=>'login'));
    $menuItem->set('link', $link);
    $menu->add('menu_items', $menuItem->parse());
}


// kui

$mainTmpl->add('menu', $menu->parse());