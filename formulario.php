<?php

if(isset($_POST['name']) && !empty($_POST['name'])){

    
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);
 
    $to = "atendimentochapacis@gmail.com";
    $subject = "Atendimento - Chapa Cis";
    $body = "Nome: ".$name. "\r\n"
            "Email: ".$email. "\r\n"
            "Mensagem: ".$message;

    $header = "From:chapacissite@gmail.com"."\r\n".
                ."Reply-To:".$email."\e\n".
                ."X=Mailer:PHP/".phpversion();

    if(mail($to, $subject,$body,$header)){

        echo("Email enviado com sucesso!")
    }else{
        echo("O Email não pode ser enviado");
    }

}
    
?>