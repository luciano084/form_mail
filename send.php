<?php


//configuração das variáveis
 $name= $_REQUEST['name'];
 $email = $_REQUEST['Email'];
 $message = $_REQUEST['Message'];
 $subject = "Message from Contact form !";

 $to ="oliveiraborgesluciano@gmail.com";  // substitua pelo email que  será enviado
 
 $content = "Name : ". $name. "\r\nContact email : ". $email. "\r\n \r\nMessage : \r\n \r\n".$message ; 
 


// verifica os campos de entrada
if ( empty($name)|| empty($email)|| empty($message))
{
echo"<script type='text/javascript'>alert('Por favor preencha todos  os campos');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Mensagem enviada com sucessso. Aguarde que responderemos em breve!!!! ');
    window.history.go(-1);
    </script>";
}


?>