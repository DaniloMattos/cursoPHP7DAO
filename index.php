<?php 

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
//=========
//carrega um usuario v

/*
$root = new Usuario();

$root->loadbyId(3);

echo $root;
*/
//========
// Carrega uma lista de usuários V
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/
//========
//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);
//========
//Carrega um usuario usando o login e senha
//$usuario = new Usuario();
//$usuario->login("danilo","12345667");

//echo $usuario;
/*
//Criando um novo usuário INSERT
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "a@%$¨#");

echo $usuario;
 ?>