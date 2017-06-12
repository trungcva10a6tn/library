<?php
require_once "controler/controller.php";
class book_controller extends controller {
    public function ListBook(){
        $model=$this->connecdb();
        $data=$model->select("book");
        $this->view("header");
        $this->view("content",$data);
        $this->view("footer");
    }
    public function NewBook(){
        $this->view("header");
        $this->view("new_book");
        $this->view("footer");
    }
    public function add_book($data){

    }
}

?>