<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 31.01.2018
 * Time: 8:47
 */
// loome menüü peamalli objekti template klassist
$menuTmpl = new template('menu.menu');
// loome menüü elemendi malli objekti
$menuItemTmpl = new template('menu.menu_item');

// koostame päringu menüü ja sisu ülesehitamiseks
$sql ='SELECT content_id, content, title '.
    'FROM content WHERE parent_id ='.fixDb(0).
    ' AND show_in_menu='.fixDb(1);
// kontrollime päringu kirjeldust
// echo $sql;
$result = $db->getData($sql);
echo '<pre>';
print_r($result);
echo '</pre>';



// ###############################################
//AVALEHT
$menuItemTmpl->set('menu_item_name', 'Avaleht');
//loome avalehe lingi
$link = $http->getLink(array('control'=>'default'));
$menuItemTmpl->set('menu_item_url',$link);
// täidame loodud elemendiga lehe menüü
$menuItem = $menuItemTmpl->parse();
$menuTmpl->add('menu_items', $menuItem);
// tegutseme ühe menüü elemendiga
// esimene
$menuItemTmpl->set('menu_item_name', 'esimene');
// loome lingi
$link = $http->getLink(array('control' => 'esimene'));
$menuItemTmpl->set('menu_item_url', $link);
// täidame loodud elemendiga lehe menüü
$menuItem = $menuItemTmpl->parse();
$menuTmpl->add('menu_items', $menuItem);
// tegutseme ühe menüü elemendiga
// teine
$menuItemTmpl->set('menu_item_name', 'teine');
// loome lingi
$link = $http->getLink(array('control' => 'teine'));
$menuItemTmpl->set('menu_item_url', $link);
// täidame loodud elemendiga lehe menüü
$menuItem = $menuItemTmpl->parse();
$menuTmpl->add('menu_items', $menuItem);
// koostame valmis menüü vaade
$menu = $menuTmpl->parse();
// ja lisame antud vaade peamalli elemendile
// nimega {menu}
$mainTmpl->set('menu', $menu);
