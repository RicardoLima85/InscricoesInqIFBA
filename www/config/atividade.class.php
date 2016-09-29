<?php include 'conexao.php';

/*************** COMEÇO: INSERT de Atividades ***************/

$atividade      = ($_REQUEST['atividade']);
$outraAtividade = ($_REQUEST['outraAtividade']);
$fone           = ($_REQUEST['fone']);
$data           = ($_REQUEST['data']);

$outraAtividade = strtoupper($outraAtividade);

$InseriAtividade  = "INSERT INTO atividade (atv_atividade, atv_outra_atividade, atv_fone, atv_data)
    VALUES ('$atividade', '$outraAtividade', '$fone', '$data')";
$resultado = mysql_query($InseriAtividade);



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
