<?php
if(!is_null($_POST) ){
	$header = "From: Site Environmakers";
	$header = "Content-type: text/html\r\n";
	$user = "barbaravianello@ejectufrn.com.br";//poe o email aqui
	$title = "[SITE] Novo Contato - ".$_POST['motivo'];
	$msg = "Mensagem: \n".$_POST['mensagem']."\n\nEnviado por: ".$_POST['nome']." | ".$_POST['e-mail']."\nWebsite: ".$_POST['site']."\nLocal: ".$_POST['local'];
	 mail($user, $title, $msg); // 1 ok / 0 fail
} else
    header('Location: ./');
//OBS.: nas variáveis dentro de _POST, tem que ser dado o name dos inputs, se passar o o id vai enviar vazio
?>



