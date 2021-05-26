<?php

class LoginModel {
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'
    .'dbname=centrodeacopio;charset=utf8'
    , 'root', '');
    }
    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE email = ?");
        $sentencia->execute(array($user));
        $password = $sentencia->fetch(PDO::FETCH_OBJ);   
        return $password;
    }
    public function GetUser($id_user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario where id_usuario = ?");
        $sentencia->execute(array($id_user));
        $user = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $user;
    }
}

?>