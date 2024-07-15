<?php include ('protectrh.php')?>
 <?php 
        require_once 'conexao_BD.php';
        $sql = "INSERT INTO vagas(codvaga,descricao)
        VALUES ('".$_POST['txtCodVaga']."','".$_POST['txtDescricao']."')";
        
         if ($conexaobd->query($sql) === TRUE) {
            echo '<center><h1><font color=#001646>Vaga cadastrada com sucesso!</font></h1> </center>';
                    
        } else {
            echo '<center><h1><font color=#001646>Não foi possível cadastar a vaga</font></h1> </center>';
        }

$conexaobd->close();   
       
?>
<html>
<center><a href=vagas.php><img src="imagens\btn_vagas.gif"></a></center>
</html>

