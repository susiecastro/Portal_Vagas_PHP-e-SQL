<?php

    session_start();    
    $email = $_POST['txtemail'];
    $senha = $_POST['txtsenha'];
       require_once 'conexao_BD.php';
       $sql = "SELECT * FROM usuarios WHERE email =  '$email' AND senha = '$senha'";
       $resultado = $conexaobd->query($sql);
       

       $linha = mysqli_fetch_array($resultado);
       if($linha != null)
        {
            if($linha['email'] == $email)
            {
                
                header("Location: recrutador2.php");
                $_SESSION['logado'] = $email;
            }
            else
            {
                echo '<center>
                <a href="recrutador.php">
                    <font color=#001646><h1 class="w3-button w3-teal">Login Inválido! </h1></font>
                </a></center> 
                ';
            }
        }
        else
        {
            echo 
            '<center>
                <a href="recrutador.php">
                    <font color=#001646><h1 class="w3-button w3-teal">Login Inválido! </h1></font>
                </a></center> 
                ';
        }
        $conexaobd->close();
    ?>