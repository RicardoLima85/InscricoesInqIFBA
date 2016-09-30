<?php 
	//include 'config/conexao.php'; 
	include'config/variaveisglobais.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>INSCRIÇÕES</title>
    <!-- Personalizados -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="admin/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <p class="navbar-text titulo">CADSTRO DO PARTICIPANTE</p>
            </div>
        </div>
    </nav>

    <div class="container-fluid ">
        <span class="descricaoLogin"><p>OBS: Preencha com dados corretos, esses serão os dados impressos em seu certificado</p></span>
        <form method="post" action="config/cadastraParticipante.class.php" id="formulario">
            <div class="row">
				<div class="col-md-9 form-group">
					<label for="ParticipanteNome" class="labelTitulosForms">Nome</label>
					<input type="text" name="ParticipanteNome" class="form-control textMaiusculo" required id="ParticipanteNome">
				</div>
           		<div class="col-md-3 form-group">
           			<label for="ParticipanteSexo" class="labelTitulosForms">Sexo</label>
		  			<select class="form-control textMaiusculo" name="ParticipanteSexo" id="ParticipanteSexo" >
		  				<option></option>
					  	<option>FEMININO</option>
					  	<option>MASCULINO</option>
					</select>
		  		</div>
			</div>
            <div class="row">
				 <div class="col-md-4 form-group">
				 	<label for="ParticipanteDtNascimento" class="labelTitulosForms">Data de nascimento</label>
					<input type="date" name="ParticipanteDtNascimento" class="form-control textMaiusculo" required id="ParticipanteDtNascimento">
				</div>
			  	<div class="col-md-4 form-group">
			  		<label for="ParticipanteCPF" class="labelTitulosForms">CPF</label>
			  		<input type="text" name="ParticipanteCPF" class="form-control textMaiusculo" required id="ParticipanteCPF">
			  	</div>
			  	<div class="col-md-4 form-group">
			  		<label for="ParticipanteTelefone" class="labelTitulosForms">Telefone</label>
			  		<input type="text" name="ParticipanteTelefone" class="form-control textMaiusculo" required id="ParticipanteTelefone">
			  	</div>
			</div>
           	<div class="row">
				<div class="col-md-6 form-group">
	  				<label for="ParticipanteEmail" class="labelTitulosForms">Email</label>
		  			<input type="text" name="ParticipanteEmail" class="form-control textMaiusculo" required id="ParticipanteEmail">
		  		</div>
			  	<div class="col-md-3 form-group">
			  		<label for="ParticipanteSenha" class="labelTitulosForms">Senha</label>
			  		<input type="password" name="ParticipanteSenha" class="form-control textMaiusculo" required id="ParticipanteSenha">
			  	</div>
			   	<div class="col-md-3 form-group">
			   		<label for="ParticipanteSenhaRepete" class="labelTitulosForms">Confirme sua senha</label>
			  		<input type="password" name="ParticipanteSenhaRepete" class="form-control textMaiusculo" id="ParticipanteSenhaRepete">
			  	</div>
			</div>
           	<div class="row">
				<div class="col-md-2 form-group">
	  				<label for="ParticipanteEstuda" class="labelTitulosForms">Estuda?</label>
		  			<select class="form-control textMaiusculo" name="ParticipanteEstuda" id="ParticipanteEstuda">
					  <option>SIM</option>
					  <option>NÃO</option>
					</select>
		  		</div>
			  	<div class="col-md-3 form-group">
			  		<label for="ParticipanteEstudaInstituicao" class="labelTitulosForms">Qual instituição?</label>
			  		<input type="text" name="ParticipanteEstudaInstituicao" class="form-control textMaiusculo" id="ParticipanteEstudaInstituicao">
			  	</div>
			  	<div class="col-md-3 form-group">
			  		<label for="ParticipanteCampus" class="labelTitulosForms">Qual campus?</label>
			  		<input type="text" name="ParticipanteCampus" class="form-control textMaiusculo" id="ParticipanteCampus">
			  	</div>
			   	<div class="col-md-4 form-group">
			   		<label for="ParticipanteCurso" class="labelTitulosForms">Qual curso?</label>
			  		<input type="text" name="ParticipanteCurso" class="form-control textMaiusculo" id="ParticipanteCurso">
			  	</div>
			</div>
           	<div class="row">
				<div class="col-md-6 form-group">
	  				<label for="ParticipanteEndereco" class="labelTitulosForms">Endereço</label>
		  			<input type="text" name="ParticipanteEndereco" class="form-control textMaiusculo" id="ParticipanteEndereco">
		  		</div>
			  	<div class="col-md-6 form-group">
			  		<label for="ParticipanteBairro" class="labelTitulosForms">Bairro</label>
			  		<input type="text" name="ParticipanteBairro" class="form-control textMaiusculo" id="ParticipanteBairro">
			  	</div>
			</div>
           	<div class="row">
				<div class="col-md-4 form-group">
	  				<label for="ParticipanteEstado" class="labelTitulosForms">Estado</label>
		  			<select class="form-control textMaiusculo" name="ParticipanteEstado" id="ParticipanteEstado">
					  <option>Carrega estado</option>
					</select>
		  		</div>
		  		<div class="col-md-5 form-group">
		  			<label for="ParticipanteCidade" class="labelTitulosForms">Cidade</label>
					<select class="form-control textMaiusculo" name="ParticipanteCidade" id="ParticipanteCidade">
						<option>Carrega cidade</option>
					</select>
				</div>
			  	<div class="col-md-3 form-group">
			  		<label for="ParticipanteCep" class="labelTitulosForms">CEP</label>
			  		<input type="text" name="ParticipanteCep" class="form-control textMaiusculo" id="ParticipanteCep">
			  	</div>
			</div>
          	<!--hidden campos-->
          	<input type="hidden" id="dataCadastro" name="fone" value="<?php echo $date; ?>">
            <button type="submit" class="btn btn-primary btn-posicao">Cadastrar</button>
        </form>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
    
</body>

</html>
