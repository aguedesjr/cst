<? include ("head.php"); ?>

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

<? include ("footer.php"); ?>
