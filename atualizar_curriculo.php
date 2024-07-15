<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <center>
    <title>Atualizar Vaga</title>
 
 <!-- Layout -->
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    
 <!-- JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </head>
 
  <body>
    <font color=#1d2c4b>
 <div class="container">
 <br>
   <fieldset>
 
 <!-- Título do formulário -->

 <a href="vagas.php"><img src="imagens\btn_voltar.gif"></a>
 <center><img src=imagens\logo.png></center>
 
 


<?php require_once 'conexao_BD.php'?>;

<html>
  
    <h4 class="w3-center w3-teal w3-round-large w3-margin">Atualizar - Curriculo Código: <?php echo " ".$_GET['codcv']?> </h4>
    <center>
    <form action="atualizarAction_curriculo.php" class="w3-container" method='post'>
        <input name="intCodigo" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['codcv']?>">
        <br>
        <label class="w3-text-teal" style="font-weight: bold;">Nome</label>
        <input name="txtNome" class="w3-input w3-light-grey w3-border" size="70%" value="<?php echo $_GET['txtnome']?>">
        <br>
        
        <center><label class="col-md-4 control-label" for="nome">Status</label>  </center>
        <br>
        <div class="col-md-4">
        <select name="txtStatus" type="text" required value="<?php echo $_GET['txtstatus']?>">
        <option value="Em análise">Em análise</option>
        <option value="Banco de Currículos">Banco de Currículos</option>
        <option value="Vaga Cancelada">Vaga Cancelada</option>
        <option value="Selecionado">Selecionado</option>
       <option value="Contratado">Contratado</option>
        </select>
       </div>
      </div>
        
         <button name="btnAtualizar" class="w3-button w3-teal w3-cell w3-round-large w3-right"> 
            <i class="w3-xxlarge fa fa-refresh"></i> Atualizar </button>
        <br>
      </center>
               
    </form>
</div>
</center>
</html>


                 