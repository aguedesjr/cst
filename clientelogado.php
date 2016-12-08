<? 
	include ("head.php");
	session_start();
	$login = $_SESSION['login'];
	if (!isset($_SESSION["autenticado"])){
		//<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.cstsaraiva.com.br/cliente.php">
		header("location:cliente.php");
		exit;
	}

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

<? include ("footer.php"); ?>
