<?php 
$hostname_con01 = "localhost";
$database_con01 = "metalcap";
$username_con01 = "root";
$password_con01 = "";
$con01 = mysql_pconnect($hostname_con01, $username_con01, $password_con01) or trigger_error(mysql_error(),E_USER_ERROR); 

mysql_select_db($database_con01,$con01) or die(mysql_error()); 

$sql_code= "INSERT INTO ARQUIVO (arq_data, arq_nome, arq_fone, arq_cargo, arq_curriculo, arq_diretorio) 
VALUES ('$data', '$nome', '$telefone', '$cargo', '$nome_final', '$diretorio')";

$result = mysql_query($sql_code) or die ("Error in query: $sql_code. ".mysql_error());

if($sql_code){

   $msg="<center>Curriculo cadastrado com sucesso!</center>";

    echo $msg;


} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
   echo "Falha ao enviar arquivo.";
}
?>