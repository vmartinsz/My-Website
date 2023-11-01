<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $celular = addcslashes($_POST['celular']);
    $mensagem = addcslashes($_POST['mensagem']);

    $to = "vitormcamargo60@gmail.com";
    $assunto = "Portfólio";
    
    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$celular."\n"."Mensagem: ".$mensagem;

    $head = "From: vitormcamargo16@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$assunto,$corpo,$head)){
        echo("Menssagem enviada com sucesso");
    }else{
        echo("Houve um erro ao enviar a menssagem");
    }

?>