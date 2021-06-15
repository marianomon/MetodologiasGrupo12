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

    public function GetPasswordCartonero($dni){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE dni = ? LIMIT 1");
        $sentencia->execute(array($dni));
        $password = $sentencia->fetch(PDO::FETCH_OBJ);   
        return $password;
    }

    public function GetUser($id_user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario where id_usuario = ?");
        $sentencia->execute(array($id_user));
        $user = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $user;
    }

    public function InsertarUsuario($nombre,$contraseña,$email,$direccion,$telefono,$horarioPreferencia,$apellido){
        $sentencia = $this->db->prepare("INSERT INTO usuario(`nombre`, `contraseña`, `email`, `direccion`, `telefono`, `horarioPreferencia`, `apellido`) VALUES(?,?,?,?,?,?,?)");
        $sentencia->execute(array($nombre,$contraseña,$email,$direccion,$telefono,$horarioPreferencia,$apellido));
    }

    public function InsertarUsuarioCart($nombre,$contraseña,$direccion,$nacimiento,$apellido,$userType,$dni){
        $sentencia = $this->db->prepare("INSERT INTO usuario(`nombre`, `contraseña`, `direccion`, `fechaNacimiento`, `apellido`, `isAdm`, dni) VALUES(?,?,?,?,?,?,?)");
        $sentencia->execute(array($nombre,$contraseña,$direccion,$nacimiento,$apellido,$userType, $dni));
    }
}

?>