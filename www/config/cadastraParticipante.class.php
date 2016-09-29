<?php include 'conexao.php';

/*************** COMEÇO: INSERT de participantes ***************/

$aluno  				= ($_REQUEST['AlunoNome']);
$dtNascimento			= ($_REQUEST['AlunoDtNascimento']);
$cpf					= ($_REQUEST['AlunoCPF']);
$rg 	 				= ($_REQUEST['AlunoRG']);
$telefone 				= ($_REQUEST['AlunoTelefone']);
$email 					= ($_REQUEST['AlunoEmail']);
$senha	 				= ($_REQUEST['AlunoSenha']);
$estuda	 				= ($_REQUEST['AlunoEstuda']);
$estudaOnde				= ($_REQUEST['AlunoEstudaOnde']);
$estudaOque 			= ($_REQUEST['AlunoEstudaOque']);
$endereco 				= ($_REQUEST['AlunoEndereco']);
$bairro	 				= ($_REQUEST['AlunoBairro']);
$estado	 				= ($_REQUEST['AlunoEstado']);
$cidade	 				= ($_REQUEST['AlunCidade']);
$cep	 				= ($_REQUEST['AlunoCep']);

//Converter para minusculo
$email = strtolower($email);
//Converter para MAIUSCULO
$aluno 		= strtoupper($aluno);
$estuda 	= strtoupper($estuda);
$estudaOnde = strtoupper($estudaOnde);
$estudaOque = strtoupper($estudaOque);
$endereco	= strtoupper($endereco);
$bairro 	= strtoupper($bairro);
$estado 	= strtoupper($estado);
$cidade 	= strtoupper($cidade);

$InseriParticipante  = "INSERT INTO atividade (atv_atividade, atv_outra_atividade, atv_fone, atv_data)
    VALUES ('$atividade', '$outraAtividade', '$fone', '$data')";
$resultado = mysql_query($InseriParticipante);



/*************** FIM: INSERT de Atividades ***************/

/*************** COMEÇO: Listagem de Usuarios ***************

// cria a instrução SQL que vai selecionar os dados
$atividade = ("SELECT * FROM atividade");
// executa a query
$dadosAtividade = mysql_query($atividade, $con) or die(mysql_error());
// transforma os dados em um array
$linhaAtividade = mysql_fetch_assoc($dadosAtividade);
// calcula quantos dados retornaram
$totalAtividade = mysql_num_rows($dadosAtividade);



// EXEMPLO
	// se o número de resultados for maior que zero, mostra os dados
	if($totalAtividade > 0) {
    // inicia o loop que vai mostrar todos os dados
		do {
    ?>
        <p>
            <?=$linhaAtividade['atv_codigo']?>
            <?=$linhaAtividade['atv_atividade']?>
            <?=$linhaAtividade['atv_outra_atividade']?>
            <?=$linhaAtividade['atv_data']?>
            <?=$linhaAtividade['atv_fone']?>
        </p>
    <?php
		// finaliza o loop que vai mostrar os dados
		}while($linhaAtividade = mysql_fetch_assoc($dadosAtividade));
	// fim do if
	}
/*************** FIM: Listagem de Usuarios ***************/
?>

<script language= "JavaScript">
    location.href="../sucesso.php?fone=<?php echo $fone?>"
</script>
