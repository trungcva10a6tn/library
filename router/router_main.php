<?php
require_once "controler/book_controller.php";
if (isset($_GET['page'])){
    $page = $_GET['page'];
    if($page === 'ListBook'){
        $view= new book_controller();
        $view->ListBook();
    }
    if($page === 'NewBook'){
        if (!empty($_POST)){
            echo "trung: ".$_POST['name_book'];
        }
        $view= new book_controller();
        $view->NewBook();
    }
}else{
    $view= new book_controller();
    $view->ListBook();
}
?>