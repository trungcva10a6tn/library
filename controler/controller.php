<?php
require_once "model/model.php";

class controller{
    public function view ($url,$data_in){
        $data=$data_in;
        include "view/".$url.".php";
    }
    public function connecdb(){
        $connecdb= new modeldb();
        return $connecdb;
    }
}
?>