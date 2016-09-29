<?php include 'config/conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>INSCRI&Ccedil;&Otilde;ES</title>
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
        <span class="descricaoLogin">Preencha com dados corretos, esses serão os dados impressos em seu certificado</span>
        <form method="post" action="atividade.php">
            <div class="form-group">
                 <input type="text" name="AlunoNome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
            </div>
            <div class="row">
				<div class="col-md-4 form-group">
		  			<input type="text" name="AlunoDtNascimento" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Data de nascimento (Ex: 00/00/0000)">
		  		</div>
			  	<div class="col-md-4 form-group">
			  		<input type="text" name="AlunoCPF" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CPF (Ex: )">
			  	</div>
			  	<div class="col-md-4 form-group">
			  		<input type="text" name="AlunoTelefone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
			  	</div>
			</div>
           	<div class="row">
				<div class="col-md-6 form-group">
		  			<input type="text" name="AlunoEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
		  		</div>
			  	<div class="col-md-3 form-group">
			  		<input type="password" name="AlunoSenha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Senha">
			  	</div>
			   	<div class="col-md-3 form-group">
			  		<input type="password" name="AlunoSenha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirme sua senha">
			  	</div>
			</div>
           	<div class="row">
				<div class="col-md-4 form-group">
		  			<select class="form-control" name="AlunoEstuda">
					  <option>SIM</option>
					  <option>NÃO</option>
					</select>
		  		</div>
			  	<div class="col-md-4 form-group">
			  		<input type="text" name="AlunoEstudaOnde" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Onde estuda?">
			  	</div>
			   	<div class="col-md-4 form-group">
			  		<input type="text" name="AlunoEstudaOque" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Qual curso?">
			  	</div>
			</div>
           	<div class="row">
				<div class="col-md-6 form-group">
		  			<input type="text" name="AlunoEndereco" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Endereço">
		  		</div>
			  	<div class="col-md-6 form-group">
			  		<input type="text" name="AlunoBairro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bairro">
			  	</div>
			</div>
           	<div class="row">
				<div class="col-md-4 form-group">
		  			<select class="form-control" name="AlunoEstado">
					  <option>Carrega estado</option>
					</select>
		  		</div>
		  		<div class="col-md-5 form-group">
					<select class="form-control" name="AlunCidade">
						<option>Carrega cidade</option>
					</select>
				</div>
			  	<div class="col-md-3 form-group">
			  		<input type="text" name="AlunoCep" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cep">
			  	</div>
			</div>
            <button type="submit" class="btn btn-primary btn-posicao">Cadastrar</button>
        </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>
