<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 19.01.2018
 * Time: 10:22
 */

class template
{
    // klassi muutujad
    var $file = ''; // HTML malli faili nimi
    var $content = false; // HTML malli sisu, mis alguses puudub, HTML failist loetud sisu
    var $vars = array ();

    /**
     * template constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        $this->file = $file; // määrame kasutatava malli nime
        $this->loadFile(); // laadime määratud nimega faili sisu
    }
    // HTML malli elementide nimetuste ja reaalväärtuste paarid

    // HTML failist sisu lugemine

    // HTML malli faili nime ja õiguste kontrollimine ning sisu lugemine, kui vajalikud tingimused on täidetud
    function loadFile () {
        if (!is_dir(VIEW_DIR)) {
            echo 'Ei ole leitud '. VIEW_DIR. 'nimega kataloogi <br />';
            exit;
        }
        // kui faili nimi on määratud kujul /views/failinimi.html
        $file = VIEW_DIR.$this->file.'.html'; // abiasendus
        if(file_exists($fail) and is_file($file) and is_readable($this)) {
            $this->readFile($file);
        }

    // kui fail asub alamkataloogis views/alamkaust/failinimi.html
        $file = VIEW_DIR.str_replace('.', '/',$this->file).'html'; // abiasendus
        if(file_exists($fail) and is_file($file) and is_readable($this)) {
        $this->readFile($file);

        }
        // kui ikkagi faili sisu on puudulik
        if($this->content === false) {
            echo 'Ei suutnud lugeda '.$this->$file.'sisu  <br />';
            exit;
        }


    function readFile($file) {
        /*
         $fp = fopen($file, 'r');
        $this->content = fread($fp,filesize($file));
        fclose($fp); */
        $this->content = file_get_contents($file);
    }
    // malli elemendi nime ja reaalväärtuse paari koostamine ja lisamine $this->vars masiivi sisse.
        function set($name, $value) {
            $this->vars [$name] =$value;
        }
        // täidame mallist loetud sisu reaalsete väärtustega ja anname muudetud sisu tagasi põhiprogrammile
        function parse () {
            $str = $this->content; // malli sisu algväärtus
            foreach ($this->vars as $name=>$value) {
                str
            }
        }
}};