<?php

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//carrega uma lista
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
/* $search = Usuario::search("us");
echo json_encode($search); */

//carrea um usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("Amauri", "cortina07");

echo $usuario;

?>