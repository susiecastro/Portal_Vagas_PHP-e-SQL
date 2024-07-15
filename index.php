<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Layout -->
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
 
 <!-- JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </head>
 
  <body>
    <font color=#1d2c4b>
 <div class="container">
 <br>

    <title>Envie seu currículo</title>
<center>
 
    <br>
<img src="imagens\logo.png" width="225" height="181">
<legend><center>Selecione a vaga</center></legend>
<form class="form-horizontal" action="formulario.php" method="POST" enctype="multipart/form-data">
<select name="combovaga">
         
          <?php
            require_once 'conexao_BD.php';
            $vagas = "SELECT * FROM vagas";
            $resultado_vagas = $conexaobd->query($vagas);
            while($linha_vagas = mysqli_fetch_assoc($resultado_vagas)){ ?>
              <option value="<?php echo $linha_vagas['codvaga']; ?>"><?php echo $linha_vagas['codvaga']; ?></option>
              

               <?php
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