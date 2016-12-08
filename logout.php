<? 
	session_start();
	//Codigo de logout
	$_SESSION = array();
	session_destroy(); //Encerra a sessao
	unset($_SESSION[login]); //Limpa o login
	include ("head.php");
	header ("location:cliente.php");
?>