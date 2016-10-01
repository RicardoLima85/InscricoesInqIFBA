<?php include 'conexao.php';
mysql_set_charset('utf8');
/*************** COMEÇO: INSERT de participantes ***************/

$nmParticipante  		= ($_REQUEST['ParticipanteNome']);
$sexo			 		= ($_REQUEST['ParticipanteSexo']);
$dtNascimento			= ($_REQUEST['ParticipanteDtNascimento']);
$cpf					= ($_REQUEST['ParticipanteCPF']);
$telefone 				= ($_REQUEST['ParticipanteTelefone']);
$email 					= ($_REQUEST['ParticipanteEmail']);
$senha	 				= ($_REQUEST['ParticipanteSenha']);
$estuda	 				= ($_REQUEST['ParticipanteEstuda']);
$estudaInstituicao		= ($_REQUEST['ParticipanteEstudaInstituicao']);
$estudaCampus			= ($_REQUEST['ParticipanteCampus']);
$estudaCurso 			= ($_REQUEST['ParticipanteCurso']);
$endereco 				= ($_REQUEST['ParticipanteEndereco']);
$bairro	 				= ($_REQUEST['ParticipanteBairro']);
$estado	 				= ($_REQUEST['ParticipanteEstado']);
$cidade	 				= ($_REQUEST['ParticipanteCidade']);
$cep	 				= ($_REQUEST['ParticipanteCep']);
$necessidadeEspecial	= ($_REQUEST['ParticipanteNecessidadeEspecial']);
$qualNecessidadeEsp		= ($_REQUEST['ParticipanteNecessidadeEspecialQual']);
$dtCadastro 			= ($_REQUEST['dataCadastro']); 

// trata data = $dtCadastro = date("d-m-Y",strtotime($dtCadastro))

$InseriParticipante  = "INSERT INTO participantes (data_cadastro, nm_participante, sexo, cpf, dt_nascimento, email, senha, telefone, estuda,
													estuda_instituicao, estuda_campus, estuda_curso, endereco, bairro, estado, cidade, cep, necessidades_especiais, qual_necessidade_especial)
    					VALUES ( '$dtCadastro', '$nmParticipante', '$sexo', '$cpf', '$dtNascimento', '$email', '$senha', '$telefone', '$estuda', '$estudaInstituicao',
								'$estudaCampus', '$estudaCurso', '$endereco', '$bairro', '$estado', '$cidade', '$cep', '$necessidadeEspecial', '$qualNecessidadeEsp')";

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
  //  location.href="../sucesso.php?fone=<?php // echo $fone?>"
</script>
