<?php
require_once "controler/controller.php";

class book extends controller {
    public function ListBook(){
        $model=$this->connecdb();
        $data=$model->select("book");
        $this->view("header","");
        $this->view("content",$data);
        $this->view("footer","");
    }
    public function new_book(){
        $this->view("header","");
        $this->view("new_book","");
        $this->view("footer","");
    }
}

?>