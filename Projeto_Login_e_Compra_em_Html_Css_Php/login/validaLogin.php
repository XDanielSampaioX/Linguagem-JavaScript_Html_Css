<?php
    $nome=  $_POST ['usuario-dado'];
    $email= $_POST['email-dado'];
    $senha= $_POST['senha-dado'];
    
    if (($email== 'danielsampaio127@gmail.com') and ($senha==1234)){
        header("location: http://localhost/Projeto_Login_e_Compra_em_Html_Css_Php/loja/loja.php");
    } else {
        echo "E-mail ou senha incorretos";
        header("location: http://localhost/Projeto_Login_e_Compra_em_Html_Css_Php/login/login.php");
    }
?>


Projeto Login e Compra em Html_Css_Php.php