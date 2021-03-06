<? include ("head.php"); ?>

		<!--  <script>
			function altera(valor) {
				var sel = valor;
				if ( sel == 1) {
					//alert(sel);
					var $wrapper = document.querySelector('.empresa');
					HTMLNovo = '<div class="control-group form-group"><div class="controls"><label>CNPJ:</label><input type="text" class="form-control" id="cnpj" required data-validation-required-message="Please enter your email address."></div></div>';
				    $wrapper.insertAdjacentHTML('afterbegin', HTMLNovo);
				}
				else {
					document.getElementById('empresa').remove();
				}
			}
        </script> -->

<body>

    <? include ("menu.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contato
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.0864662433833!2d-41.33437428448565!3d-21.776914304005057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdd426382e0b7b%3A0xf17b1646cfdf48bb!2sR.+Oswaldo+Barcelos+Sobral%2C+5+-+Parqua+Aurora%2C+Campos+dos+Goitacazes+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1475712013973" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Sede Administrativa</h3>
                <p>
                    Rua Osvaldo Barcelos Sobral, 05<br>Pq. Aurora - Campos dos Goytacazes/RJ<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <i class="fa fa-whatsapp"></i>: (22) 99989-5514</p>
                <p><i class="fa fa-envelope-o"></i> 
                    : <a href="mailto:biancasaraiva@cstsaraiva.com.br" style="color:#3C763D;"><strong>biancasaraiva@cstsaraiva.com.br</strong></a>
                </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/cstsaraiva" style="color:#3C763D;"><i class="fa fa-facebook-official fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/cstsaraiva" style="color:#3C763D;"><i class="fa fa-instagram fa-2x"></i></a>
                    </li>
                    <!-- <li>
                        <a href="#" style="color:#5CB85C;"><i class="fa fa-google-plus-official fa-2x"></i></a>
                    </li> -->
                </ul>
            </div>
        </div>
        <!-- /.row -->
        
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Fale Conosco</h3>
                <form method="POST" action="enviaremail.php">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Informe seu nome.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Informe seu email.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefone:</label>
                            <input type="tel" class="form-control" name="tel" id="tel" required data-validation-required-message="Informe seu telefone.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                        <label>Assunto:</label><br>
                            <select name="assunto" id="assunto" class="form-control">
                            	<option value="">-------------------</option>
                            	<option value="Orçamento">Orçamento</option>
                            	<option value="Dúvida">Dúvida</option>
                            	<option value="Críticas/Sugestões">Críticas/Sugestões</option>
                            </select>
                        </div>
                    </div>
<!--                     <div class="empresa" id="empresa"> -->
<!--                     	<input type="hidden"> -->
<!--                     </div> -->
	                    <div class="control-group form-group" >
	                        <div class="controls">
	                            <label>Menssagem:</label>
	                            <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Informe a mensagem." maxlength="999" style="resize:none"></textarea>
	                        </div>
	                    </div>
                    
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <!-- <button type="submit" class="btn btn-default" style="background-color: #3C763D; color: white;">Enviar</button> -->
                    <input type="submit" value="Enviar" class="btn btn-default" style="background-color: #3C763D; color: white;">
                </form>
            </div>

        </div>

        
        <!-- /.row -->

        <hr>

        <? include ("footer.php"); ?>
