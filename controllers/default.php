<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 2.02.2018
 * Time: 10:31
 */
$page_id = (int)$http->get('page_id'); // lehe id
// lehe id järgi küsime sisu andmebaasist
$sql = 'SELECT content FROM content '.
    'WHERE content_id='.fixDb($page_id);
$result = $db->getData($sql);
// kui vastavalt page_id-le ei leidu andmebaasis vastust
if($result == false) {
    // siis pöördume avalehele - is_first_page = "1"
    $sql = 'SELECT * FROM content WHERE '.
        'is_first_page='.fixDb(1);
    $result = $db->getData($sql);
}
if($result != false) {
    // siis tulemus koosneb ainult 1-st reast - see ongi vastava lehe sisu
    $page = $result[0];
    $mainTmpl->set('content', $page['content']);
}