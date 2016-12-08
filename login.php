<?
# Arquivo de verificacao de login e senha

//Requer conexao previa com o banco
require_once ("configs/conn.php");

// Obtem os dados do formulario de login
session_start();
$login = $_POST["login"]; //Recebe o login
$senha = $_POST["senha"]; //Recebe a senha

// trata os dados recebidos;
$login = str_replace(" ", "",$login);
$login = str_replace("/","",$login);
$login = str_replace(";","",$login);
$senha = str_replace(" ", "",$senha);
$senha = str_replace("/","",$senha);
$senha = str_replace(";","",$senha);

// Busca no banco de dados o usuario informado
//$resultado = mysql_query("SELECT login, senha, perfil, nome FROM users WHERE login = '$login' AND senha = ENCRYPT('" .$senha. "', senha);");
$resultado = mysql_query("SELECT login, senha, perfil FROM users WHERE login = '$login' AND senha = ENCRYPT('" .$senha. "', senha);");
$linhas = mysql_num_rows($resultado);

if ($linhas > 0){ //Verifica se encontrou algum usuário

  $_SESSION['autenticado']="sim";
  $_SESSION['login']=mysql_result($resultado,0,"login");
  $_SESSION['perfil']= mysql_result($resultado,0,"perfil");
  //$_SESSION['nome']= mysql_result($resultado,0,"nome");
  //echo "<script>alert('Funcionou!!');</script>";
  header ("location:clientelogado.php");
}
else {
	
	//Página do Cliente com resultado de erro
	include ("head.php");?>
	
	<body>
	
	<? include ("menu.php"); ?>
	
	<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Área do Cliente
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <center><img class="img-responsive" src="img/cliente.png" alt=""></center>
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"> </h2>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
	            <form method="POST" action="login.php" name="login">
				  <div class="form-group">
				  	<center><label for="erro" style="color: red;"><b>Usuário e/ou senha invalida!!</b></label></center><br>
				    <label for="login">Login:</label>
				    <input type="text" class="form-control" id="login" name="login">
				  </div>
				  <div class="form-group">
				    <label for="senha">Senha:</label>
				    <input type="password" class="form-control" id="senha" name="senha">
				  </div>
				  <button type="submit" class="btn btn-default" style="background-color: #3C763D; color: white;">Enviar
				  <i class="fa fa-fw fa-sign-in"></i></button>
				</form>
            </div>
        </div>

        <hr>
	
<?
	include ("footer.php");
}
?>
