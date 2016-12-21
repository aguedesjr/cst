<?
session_start();
//Requer autenticação
session_start();
	$login = $_SESSION['login'];
	if (!isset($_SESSION["autenticado"])){
		//<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.cstsaraiva.com.br/cliente.php">
		header ("location:cliente.php");
		exit;
	}
//Requer conexão previa com o banco
require_once ("configs/conn.php");

if (isset($_GET["userlogin"])){
  $login = utf8_decode($_GET["userlogin"]);
}else {if (isset($_POST["userlogin"])){
  $login = utf8_decode($_POST["userlogin"]);
}};
if (isset($_GET["usersenha"])){
  $senha = utf8_decode($_GET["usersenha"]);
}else {if (isset($_POST["usersenha"])){
  $senha = utf8_decode($_POST["usersenha"]);
}};
if (isset($_GET["userperfil"])){
  $permissao = $_GET["userperfil"];
}else {if (isset($_POST["userperfil"])){
  $permissao = $_POST["userperfil"];
}};

$sql = "INSERT INTO users (login,senha,perfil) VALUES ('$login',ENCRYPT('$senha'),'$permissao');";

// Executa o comando SQL
mysql_query($sql);
// Finaliza a conexão com o banco de dados
mysql_close($conexao);
// Redireciona para a página de usuários
header ("location:clientelogado.php");
 ?>
