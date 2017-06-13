<?php
require_once "controler/controller.php";
class book_controller extends controller {
    public function ListBook(){
        $model=$this->connecdb();
        $data=$model->join("book","category");
        $this->view("header");
        $this->view("content",$data);
        $this->view("footer");
    }
    public function NewBook($data_erro=null){
        $model=$this->connecdb();
        $data=$model->select("category");
        $this->view("header");
        $this->view("new_book",$data,$data_erro);
        $this->view("footer");
    }
    public function add_book($data){
    if ($this->validate($data)){
        $model=$this->connecdb();
        $data=$model->add($data);
        header('Location: http://demo-bt.com/library/?page=ListBook');
    }else
        echo "dữ liệu nhập bị lỗi";
        return $data;
    }
    public function edit($data,$id){
        if ($this->validate($data)){
            $model=$this->connecdb();
            $data=$model->edit($data,$id);
            header('Location: http://demo-bt.com/library/?page=ListBook');
        }else
            echo "dữ liệu nhập bị lỗi";
        return $data;
    }
    public function edit_book($id,$data_erro){
        $model=$this->connecdb();
        $data=$model->select("category");
        if ($data_erro === ""){
            $data_erro=$model->where("book",$id)[0];
        }
        $this->view("header");
        $this->view("new_book",$data,$data_erro);
        $this->view("footer");
    }
    private function validate($data){
        $check=0;
        foreach ($data as $row=>$value){
            if ($value === ""){
                $check++;
                break;
            }
        }
        return $check === 0;
    }
    public function delete($id){
        $model=$this->connecdb();
        $data=$model->delete($id);
        header('Location: http://demo-bt.com/library/?page=ListBook');
    }
}

?>