<?php
class modeldb {
    private $url = "mysql:host=localhost;dbname=manage_libraries;charset=utf8";
    private $user = "root";
    private $pas = "";
    public function select($table){
        $query = "SELECT * FROM $table";
        $db = new PDO($this->url, $this->user, $this->pas);
        $customerlist = $db->query($query);
        $list ="";
        $recos=0;
        foreach ($customerlist as $key){
            $stt=0;
            foreach ($key as $tk=>$value){
                if($stt % 2===0){
                    $list[$recos][$tk]=$value;
                }
                $stt++;
            }
            $recos++;
        }
        return $list;
    }
    public function add($data){
        $data_full="NULL";
        foreach ($data as $value){
            $data_full+=",'$value'";
        }
        $query = "INSERT INTO table_name VALUES ($data_full)";
        $db = new PDO($this->url, $this->user, $this->pas);
        $db->query($query);
    }
}
?>