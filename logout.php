<? 
	session_start();
	//Codigo de logout
	$_SESSION = array();
	session_destroy(); //Encerra a sessao
	unset($_SESSION[login]); //Limpa o login
	include ("head.php");
	header ("location:cliente.php");
?>
<!-- Testado no site e está funcional -->
<!-- <meta HTTP-EQUIV="REFRESH" content="0; url=http://www.cstsaraiva.com.br/cliente.php"> -->