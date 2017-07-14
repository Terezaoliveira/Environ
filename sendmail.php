<?php
if($_POST){
	$header = "From: Site Environmakers";
    $user = "rafaeldantas@ejectufrn.com.br";
    $title = "[SITE] Novo Contato - ".$_POST['Subject'];
    $msg = "Mensagem: \n" .$_POST['message']. "\n\nEnviado por: ".$_POST['name']." | " .$_POST['email']. "\nContato: ".$_POST['phone'] "\nWebsite: ".$_POST['website'] "\nLocal: ".$_POST['address'];
    echo mail($user, $title, $msg); // 1 ok / 0 fail
} else
    header('Location: ./');
?>
