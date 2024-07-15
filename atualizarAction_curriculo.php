   <?php
        require_once('conexao_BD.php');
       
      
        $sql = "UPDATE curriculos SET txtstatus ='".$_POST['txtStatus']."'WHERE codcv ='". $_POST['intCodigo'].";";
 
        if ($conexaobd->query($sql) === TRUE) {
            echo '
            <a href="vagas.php"><center>
            <h1><font color=#001646>Cadastro Atualizado com sucesso! </font></h1> </center></a>';
        $id = mysqli_insert_id($conexaobd);
            
        } else {
            echo '
            <a href="vagas.php"><center><h1 class="w3-button w3-teal"><h1><font color=#001646>ERRO! </center></font></h1></a>
             
            ';
        }
        $conexaobd->close();
    ?>
       

 