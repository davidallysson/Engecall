<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/jquery.maskedinput.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="../js/valida_cpf_cnpj.js"></script>
	<script src="../js/validador.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<title></title>
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
        	.inputCheckbox{
        		width: 19px;
    			height: 25px;
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
							        <li class="col-md-2"><a href="orcamento.php">Orçamento</a></li>
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
			  			<h1 style="margin-bottom: -25px;">Orçamento</h1>
			  			<form action="contato.php" onsubmit="return cpf()" method="post">
			  				<?php include('../php/email.php'); ?>
				  			<div class="row" style="width: 80%; margin: 50px auto;">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								          Grandeza e Pressão
								        </a>
								      </h4>
								    </div>
								    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Autoclave</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Calibrador de Pneus até 280 libras</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Calibrador de Pressão Digital até 700 kgf/cm²</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Calibrador Digital Pneumático 700 kgf/cm²</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Mano-Vacuômetro -12 kgf/cm² / 700 kgf/cm²</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Mano-Vacuômetro Digital</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Calibrador de Pressão Digital até 700 kgf/cm²</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Manômetro Analógico</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Manômetro Digital</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Pressostato até 700 kgf/cm²</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Transdutor de Pressão</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Transmissor de Pressão</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Vacuômetro Analógico</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Vacuômetro Digital</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingTwo">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								          Grandeza Temperatura
								        </a>
								      </h4>
								    </div>
								    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Indicador de Temperatura</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Indicador de Temperatura</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Indicador de Temperatura</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Indicador de Temperatura</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Termômetro Digital</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Termopar</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Termostato</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Termoresistência</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Transmissor de Temperatura</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingThree">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								          Grandeza Massa
								        </a>
								      </h4>
								    </div>
								    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Balança Digital</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Transmissor de Temperatura</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingFour">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								          Grandeza Dimensional
								        </a>
								      </h4>
								    </div>
								    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Nível</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Paquímetro</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Placa de Orifício</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Esquadro (Combinado, em L)</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Trenas (Trena, Profundidade, Tanque, Régua Graduada etc)</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Clinômetro até 90º</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Esquadro de Aço</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Esquadro Combinado</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Fita Perimétrica</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Haste Padrão</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Nível de Bolha</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Nível de Precisão Linear</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Paquímetro</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Paquímetro de Profundidade</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Padrão Escalonado com Tambor Micrométrico</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Peneira Granulométrica</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Penetrômetro</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Pino Calibrado até 200 mm</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Prisma até 300 mm</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Régua Graduada</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Transferidor de Graus (360º)</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Trena</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingFive">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								          Ensaios
								        </a>
								      </h4>
								    </div>
								    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Válvula de Segurança</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Válvula de Alivio</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Pressostato</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Termostato</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingSix">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								          Inspeção de ensaios de NR13
								        </a>
								      </h4>
								    </div>
								    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Visual Externo</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Visual Interno</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Liquido Penetrante</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Medição de camada de Tinta</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Medição de Espessura</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
											<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Teste Hidrostatico</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingSeven">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								          Teste Hidrostático Mangueiras/Mangotes
								        </a>
								      </h4>
								    </div>
								    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Teste Hidrostático Mangueiras/Mangotes</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingEigth">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth">
								          Loop Test
								        </a>
								      </h4>
								    </div>
								    <div id="collapseEigth" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEigth">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Loop Test</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingNine">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
								          Comissionamento
								        </a>
								      </h4>
								    </div>
								    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Comissionamento</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingTen">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
								          Laudos Técnicos
								        </a>
								      </h4>
								    </div>
								    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
								      <div class="panel-body">
								    		<div class="input-group col-sm-12">
							  					<div class="col-sm-10">
													<input type="checkbox" name="" id="" class="inputCheckbox"><label for="">Laudos Técnicos</label>
												</div>
												<div class="col-sm-2">
													<input name="" class="form-control col-md-1" for="" type="number">
												</div>
											</div>
								      </div>
								    </div>
								  </div>
								</div>
					  			<div class="col-md-12 input-group">
									<label class="labelInput">Nome:</label>
									<input name="nome" type="text" pattern="[a-zA-ZÀ-ú\\ ]+$" class="form-control" placeholder="Nome completo" aria-describedby="sizing-addon2" required="required" maxlength="200"/>
								</div>
								<div class="col-md-12 input-group">
									<label class="labelInput">E-mail:</label>
									<input name="email" type="email" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon2" required="required" maxlength="200"/>
								</div>
								<div class="col-md-6 input-group" style="float: left;">
									<label class="labelInput">Telefone:</label>
									<input id="telefone" name="telefone" type="text" class="form-control" placeholder="Telefone" aria-describedby="sizing-addon2" required="required" maxlength="11"/>
								</div>
								<div class="col-md-6 input-group" style="float: left;">
									<label class="labelInput label_cpf_cnpj">CPF / CNPJ:</label>
									<input name="cpf_cnpj" type="text" pattern="[0-9]+$" class="form-control input_cpf_cnpj" placeholder="CPF ou CNPJ (Apenas números)" aria-describedby="sizing-addon2" required="required" maxlength="14"/>
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