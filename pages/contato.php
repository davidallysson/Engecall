<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Contato</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<script src="../js/jquery-1.9.1.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.css">

        <script src="../js/valida_cpf_cnpj.js"></script>
		<script src="../js/validador.js"></script>
		
		<link rel="stylesheet" type="text/css" href="../css/main.css">

		<script type="text/javascript">
			 $('.selectpicker').selectpicker();
		</script>

		<style type="text/css">
        	.captcha{
        		padding-left: 25%;
        		margin: 0 auto;
        	}
        	.btn-danger{
        		width: 100px;
			    float: right;
			    margin-top: 20px;
        	}
		</style>
	</head>

	<body>
		<div class="geral">
			<div class="header">
				<div class="row">
				  	<div class="col-md-3">
				  		<div class="logo"></div>
				  	</div>
				  	<div class="col-md-9">
						<nav class="navbar navbar-default">
						  <div class="container-fluid">
						    <!-- Collect the nav links, forms, and other content for toggling -->
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      	<ul class="nav navbar-nav" style="width: 100%;">
							        <li class="col-md-2"><a href="../index.html">Home</a></li>
							        <li class="col-md-2"><a href="empresa.html">Empresa</a></li>
							        <li class="col-md-2"><a href="servicos.html">Serviços</a></li>
							        <li class="col-md-2"><a href="contato.php">Contato</a></li>
							        <li class="col-md-2"><a href="downloads.html">Download</a></li>
						      	</ul>
						    </div><!-- /.navbar-collapse -->
						  </div><!-- /.container-fluid -->
						</nav>
					</div> <!--Fim da div col-md-9-->
				</div> <!--Fim da div row-->
			</div><!--Fim da div header-->
			<div class="container">
				<div class="row">
					  <div class="col-md-3">
				  		<div class="list-group">
							<p class="list-group-item active">
							Serviços de Calibração
							</p>
							<a href="servicos.html#pressao" class="list-group-item">Grandeza Pressão</a>
							<a href="servicos.html#temperatura" class="list-group-item">Grandeza Temperatura</a>
							<a href="servicos.html#massa" class="list-group-item">Grandeza Massa</a>
							<a href="servicos.html#dimensional" class="list-group-item">Grandeza Dimensional</a>
							<a href="servicos.html#ensaios" class="list-group-item">Ensaios</a>
							<p class="list-group-item active">
							Serviços de Engenharia
							</p>
							<a href="servicos.html#nr13" class="list-group-item">Inspenção e ensaios de NR13</a>
							<a href="servicos.html#testeHidrostatico" class="list-group-item">Teste hidrostático</a>
							<a href="servicos.html#loop" class="list-group-item">Loop test</a>
							<a href="servicos.html#comissionamento" class="list-group-item">Comissionamento</a>
							<a href="servicos.html#laudos" class="list-group-item">Laudos técnicos</a>
						</div><!--list-group-->
			  		</div><!--Fim da div col-md-3-->
			  		<div class="col-md-9">
			  			<h1 style="margin-bottom: -25px;">Contato</h1>
			  			<form action="contato.php" onsubmit="return cpf()" method="post">
			  				<?php include('../php/email.php'); ?>
				  			<div class="row" style="width: 80%; margin: 50px auto;">
					  			<div class="col-md-12 input-group">
									<label class="labelInput">Nome:</label>
									<input name="nome" type="text" pattern="[a-zA-ZÀ-ú\\ ]+$" class="form-control" placeholder="Nome completo" aria-describedby="sizing-addon2" required="required" maxlength="200"/>
								</div>
								<div class="col-md-12 input-group">
									<label class="labelInput">E-mail:</label>
									<input name="email" type="email" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon2" required="required" maxlength="200"/>
								</div>
								<div class="col-md-6 input-group" style="float: left;">
									<label class="labelInput">Assunto:</label>
									<input name="assunto" type="text" class="form-control" placeholder="Por que entrar em contato?" aria-describedby="sizing-addon2" required="required" maxlength="100"/>
								</div>
								<div class="col-md-6 input-group" style="float: left;">
									<label class="labelInput">Motivo: (Opicional)</label>
									<input name="motivo" type="text" class="form-control" placeholder="Orçamento/Reclamação/Sugestão" aria-describedby="sizing-addon2" maxlength="50"/>
								</div>
								<div class="col-md-6 input-group" style="float: left;">
									<label class="labelInput">Telefone:</label>
									<input name="telefone" type="text" pattern="[0-9]+$" class="form-control" placeholder="Telefone (Apenas números)" aria-describedby="sizing-addon2" required="required" maxlength="11"/>
								</div>
								<div class="col-md-6 input-group" style="float: left;">
									<label class="labelInput label_cpf_cnpj">CPF / CNPJ:</label>
									<input name="cpf_cnpj" type="text" pattern="[0-9]+$" class="form-control input_cpf_cnpj" placeholder="CPF ou CNPJ (Apenas números)" aria-describedby="sizing-addon2" required="required" maxlength="14"/>
								</div>
								<div class="col-md-12 input-group">
									<label class="labelInput">Mensagem:</label>
									<textarea name="conteudo" class="form-control" rows="5" placeholder="Conteudo (1000 caracteres disponíveis)" maxlength="1000"></textarea>
								</div>
								<div class="captcha input-group col-md-5">
								<label class="labelInput" style="width: 100%; text-align: center;">Digite o Captcha para continuar:</label><br />
										<img id="captcha" src="../securimage/securimage_show.php" />
										<a href"#" onclick="document.getElementById('captcha').src = '../securimage/securimage_show.php?' + Math.random(); return false">
											<img id="refresh" src="../securimage/images/refresh.png" width="60" height="75"/>
										</a>
										<input required class="form-control" type="text" placeholder="Digite o texto a cima" name="captcha_code" maxlength="6"/>
								</div>
								<input type="submit" value="Enviar" class="btn btn-danger"/>
							</div>

						</form>
					</div> <!--Fim da div col-md-9-->
				</div><!--Fim da div row-->
			</div><!--Fim da div container-->
	    </div><!--Fim da div geral-->
	    <footer class="footer">
	    	<div class="containerFooter">
		        <div class="row">
					<div class="col-md-8">
						<div class="info">
					      	<p class="text-muted">ENGECALL</p>
					      	<p class="developers">Desenvolvido por: DO-JO</p>
					    </div>
					</div>
				  <div class="col-md-4">
					<div class="contact">
				      	<p>Rua Amambai Nº 335 Bairro Neópolis</p> 
				      	<p>Natal/RN CEP: 59080-260</p>
				      	<p>Fone: (84) 3217-3830 </p> 
				      	<p>Fone: (84) 99908-4494</p>
						<p>CNPJ:14.422.270/0001-03</p>
						<p>e-mail: engecall@natalab.com.br</p>
			    	</div>
				  </div>
				</div>
	    	</div>
	    </footer>
	</body>
</html>