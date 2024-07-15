<?php require_once ('protectrh.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultar Currículos Cadastrados</title>
<center>
  <a href="recrutador2.php"><img src="imagens\btn_voltar.gif"></a>
    <br>
<img src="imagens\logo.png" width="225" height="181">

<form class="form-horizontal" action="consultacvs.php" method="POST" enctype="multipart/form-data">
<select name="combovaga">
  
          <option></option>
          <?php
           session_start();
            require_once 'conexao_BD.php';
            $vagas = "SELECT * FROM vagas";
            $resultado_vagas = $conexaobd->query($vagas);
            while($linha_vagas = mysqli_fetch_assoc($resultado_vagas)){ ?>
              <option value="<?php echo $linha_vagas['codvaga']; ?>"><?php echo $linha_vagas['codvaga']; ?></option> <?php
            }
          
  
          ?>
  </select><br><br>
<br>
         <button name=btnSelecionar class="w3-button w3-teal w3-cell w3-round-large w3-right"> 
            <i class="w3-xxlarge fa fa-refresh"></i> Selecionar
        </button>
        <br>
</form>
</center>
</head>
</html>