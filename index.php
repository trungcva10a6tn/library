<?php
require_once "controler/book.php";
if (isset($_GET['page'])){
    $page = $_GET['page'];
    if($page === 'book'){
        $view= new book();
        $view->ListBook();
    }
    if($page === 'new_book'){
        if (isset($_POST['name_book'])){
            echo "trung: ".$_POST['name_book'];
        }
        $view= new book();
        $view->new_book();
    }
}else{
    echo "trung";
}
?>