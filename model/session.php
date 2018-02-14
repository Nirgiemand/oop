<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 14.02.2018
 * Time: 14:53
 */

class session
{
    var $sid = false; // sessiooni id
    var $vars = array(); // tühi massiiv, kuhu saame lisada väärtused
    var $http = false; // $http objekti jaoks
    var $db = false; // $db objekti jaoks
    var $timeout = 1800; // 30 minutit sessiooni pikkus
    var $anonymous = true;

    /**
     * session constructor.
     * @param bool $http
     * @param bool $db
     */
    public function __construct(&$http, &$db)
    {
        $this->http = &$http;
        $this->db = &$db;
        $this->sessionCreate();
    } // anonüümne sessioon lubatud

    // loome sessiooni
    function sessionCreate($user = false) {
        // kui kasutaja on anonüümne
        if($user == false) {
            // tekitame kasutaja andmed andmebaasi jaoks
            $user = array(
                'user_id' => 0,
                'role_id' => 0,
                'username' => 'Anonüümne'
            );
            // loome sid
            $sid = md5(uniqid(time().mt_rand(1,1000), true));
            $sql ='INSERT INTO session SET '.
                'sid='.fixDb($sid).', '.
                'user_id='.fixDb($user['user_id']).', '.
                'user_data ='.fixDb(serialize($user)).', '.
                'login_ip ='.fixDb(REMOTE_ADDR).', '.
                'created= NOW()';
            // saadame päringu andmebaasi
            $this->db->query($sql);
            // määrame sid $this->sid
            $this->sid = $sid;
            // lisame andmed $http objekti sisse, et nad oleksid kättesaadavad veebis
            $this->http->set('sid', $sid);
        }
    }


}