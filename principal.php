<?php 
include "lib.php";
$usuario= $_POST['usuario'];
$senha = $_POST['senha'];
verificaUsuario($usuario,$senha);
layout("form_login");
?>
