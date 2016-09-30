<?php include 'conexao.php';

/*************** COMEÇO: INSERT de participantes ***************/

$nmParticipante  		= strtoupper($_REQUEST['ParticipanteNome']);
$sexo			 		= strtoupper($_REQUEST['ParticipanteSexo']);
$dtNascimento			= ($_REQUEST['ParticipanteDtNascimento']);
$cpf					= ($_REQUEST['ParticipanteCPF']);
$telefone 				= ($_REQUEST['ParticipanteTelefone']);
$email 					= strtolower($_REQUEST['ParticipanteEmail']);
$senha	 				= ($_REQUEST['ParticipanteSenha']);
$estuda	 				= strtoupper($_REQUEST['ParticipanteEstuda']);
$estudaInstituicao		= strtoupper($_REQUEST['ParticipanteEstudaInstituicao']);
$estudaCampus			= strtoupper($_REQUEST['ParticipanteCampus']);
$estudaCurso 			= strtoupper($_REQUEST['ParticipanteEstudaOque']);
$endereco 				= strtoupper($_REQUEST['ParticipanteEndereco']);
$bairro	 				= strtoupper($_REQUEST['ParticipanteBairro']);
$estado	 				= strtoupper($_REQUEST['ParticipanteEstado']);
$cidade	 				= strtoupper($_REQUEST['ParticipanteCidade']);
$cep	 				= ($_REQUEST['ParticipanteCep']);


$InseriParticipante  = "INSERT INTO participantes (data_cadastro, atv_outra_atividade, atv_fone, atv_data)
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
