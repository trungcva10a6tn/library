<?php
require_once "model/model.php";

class controller{
    public function view ($url,$dt){
        $data=$dt;
        include "view/".$url.".php";
    }
    public function connecdb(){
        $connecdb= new modeldb();
        return $connecdb;
    }
}
?>