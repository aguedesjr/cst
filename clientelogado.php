<? 
	session_start();
	$login = $_SESSION['login'];
	if (!isset($_SESSION["autenticado"])){
		//<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.cstsaraiva.com.br/cliente.php">
		header ("location:cliente.php");
		exit;
	}
	if ($_SESSION['perfil'] == "USER"){
	include ("head.php");
?>

<body>

    <? include ("menu.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                <div class="col-md-11">Área do Cliente</div>
                <form method="POST" action="logout.php" name="logout">
                	<button type="submit" class="btn btn-default" style="background-color: #bc0909; color: white;">Sair
                	<i class="fa fa-fw fa-sign-out"></i> </button>
                </form>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-md-3"></div>
	            <iframe frameborder="0" width="600" height="600" src="arq.php"></iframe>
        </div>

        <hr>

<?  include ("footer.php"); };
	if ($_SESSION['perfil'] == "ADMIN"){
	include ("head.php");
?>

<body>

    <? include ("menu.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                <div class="col-md-11">Área do Cliente</div>
                <form method="POST" action="logout.php" name="logout">
                	<button type="submit" class="btn btn-default" style="background-color: #bc0909; color: white;">Sair
                	<i class="fa fa-fw fa-sign-out"></i> </button>
                </form>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading" style="background-color: #3C763D;">
                        <h4 style="color: white;"><i class="fa fa-fw fa-user-plus"></i> Cadastrar Usuários</h4>
                    </div>
                    <div class="panel-body">
                    <!-- PARTE DE CRIAÇÃO DE USUÁRIOS NO SITE -->
                        <form method="POST" action="caduser.php" name="caduser">
						  <div class="form-group">
						    <label for="login">Login:</label>
						    <input type="text" class="form-control" id="userlogin" name="userlogin">
						  </div>
						  <div class="form-group">
						    <label for="senha">Senha:</label>
						    <input type="password" class="form-control" id="usersenha" name="usersenha">
						  </div>
						  <input type="hidden" name="userperfil" value="USER">
						  <button type="submit" class="btn btn-default" style="background-color: #3C763D; color: white;">Cadastrar
						  </button>
						</form>
						<!-- CADASTRO DE USUÁRIOS -->
                    </div>
                </div>
            </div>
            
            <!-- GERENCIADOR DE ARQUIVOS -->
            
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading" style="background-color: #3C763D;">
                        <h4 style="color: white;"><i class="fa fa-fw fa-folder-open-o"></i> Gerenciador de Arquivos</h4>
                    </div>
                    <div class="panel-body">
                        <p>1 - Acessar o Gerenciador de Arquivos.</p><br>
                        <p>2 - Criar em <b><i>files</i></b> uma pasta com o login criado.</p><br>
                        <p>3 - Enviar os arquivos para esse diretório.</p><br>
                        <a href="adminarq.php" target="_blank" class="btn btn-default" style="background-color: #3C763D; color: white;">Acessar</a>
                    </div>
                </div>
            </div>
            
            <!-- GERENCIADOR DE ARQUIVOS -->
            
<!--             <div class="col-md-3"></div> -->
<!-- 	            <iframe frameborder="0" width="900" height="900" src="adminarq.php"></iframe> -->
        </div>

        <hr>

<?  include ("footer.php"); }; ?>
