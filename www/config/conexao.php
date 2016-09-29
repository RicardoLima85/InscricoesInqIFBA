<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "inscricoes_inq_ifba";
$user = "root";
$pass = "root";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);

?>
