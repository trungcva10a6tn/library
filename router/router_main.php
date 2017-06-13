<?php
require_once "controler/book_controller.php";
if (isset($_GET['page'])){
    $page = $_GET['page'];
    if($page === 'ListBook'){
        $view= new book_controller();
        $view->ListBook();
    }
    if($page === 'NewBook'){
        $view= new book_controller();
        $data_erro="";
        if (isset($_POST["ok"])){
            $data_erro=$view->add_book($_POST);
        }
        $view->NewBook($data_erro);
    }
    if($page === 'edit'){
        $view= new book_controller();
        $data_erro="";
        if (isset($_POST["ok"])){
            $data_erro=$view->edit($_POST,$_GET["id"]);
        }
        $view->edit_book($_GET["id"],$data_erro);
    }
    if($page === 'delete'){
        $view= new book_controller();
        $view->delete($_GET["id"]);
    }
}else{
    $view= new book_controller();
    $view->ListBook();
}
?>