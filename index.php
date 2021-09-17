<?php 

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//carrega um usuario
//$root = new Usuario();

//$root->loadById(3);

//echo $root;


//carrega uma lista de usuarios
//pelo fato do metodo não usar nenhum atributo da classe usuario, ele se torna um metodo estatico e pode ser chamado diretamente sem ser instaciado
//$lista = Usuario::getList();

//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");

//echo json_encode($search);


//carrega um usuario usando o login e senha
$usuario = new Usuario ();
$usuario->login("root", "!@#$");

echo $usuario;



?>