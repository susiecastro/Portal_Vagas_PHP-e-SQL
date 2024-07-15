<?php include ('protectrh.php')?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Vagas</title>
 
 <!-- Layout -->
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
 
 <!-- JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </head>
 
  <body>


             
<font color=#1d2c4b>
 <div class="container">
 <br>
 <center><a href="recrutador2.php"><img src="imagens\btn_voltar.gif"></a></center>
    
 
 
 <!-- Título do formulário -->
  
 <center><img src="imagens\logo.png"></center>
 <legend><center>Cadastre a vaga aqui</center></legend>
 
 <form class="form-horizontal" method="POST" action="cadastrarvagas.php" enctype="multipart/form-data">
   <fieldset>
 <!-- Campo: Nome -->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Vaga</label>  
 <div class="col-md-4">
   <input id="txtCodVaga" name="txtCodVaga" placeholder="Informe a vaga aqui" class="form-control input-md" required="" type="text" required>
 </div>
 </div>
<center
 <label class="w3-text-teal" style="font-weight: bold;">Descrição da Vaga</label>
        <br>
        <textarea name="txtDescricao" class="w3-input w3-light-grey w3-border " class="scrollabletextbox" placeholder="Digite a descrição aqui" cols="100" rows="10" value="<?php echo $_GET['descricao']?>"></textarea>
 </center>
 <!-- Botão Enviar -->
 <center>
 <div class="form-group">
   <label class="col-md-4 control-label" for="submit"></label>
 <div class="col-md-4">
   <button type="submit" class="btn btn-inverse">Enviar</button>
 </div>
 </div>
 
   </fieldset>
 </form>
 
 </div>
</font>
  </body>


      
  
</table>
             <center>
                               
                <table border= "1px solid black" withe-space="nowrap">
               
                <thead>   
                    <tr class="w3-center w3-teal">
                        <th>Vagas Cadastradas</th>
                        
                    </tr>
                <thead>
                <font size=4>
                
                <?php    
                

                require_once 'conexao_BD.php';                           
                $sql = "SELECT * FROM vagas";
                $resultado = $conexaobd->query($sql);
                if($resultado != null)
                foreach($resultado as $linha) {


                    
                    echo '<tr>';
                    echo '<td>'.$linha['codvaga'].'</td>';
                    echo '<td size=200px>'.$linha['descricao'].'</td>';
                    echo '<td><a href="atualizar_vaga.php?id='.$linha['codigo'].'&codigo='.$linha['codigo'].'&codvaga='.$linha['codvaga'].'&descricao='.$linha['descricao'].'"<img src="atualizar.png">Atualizar</a></td></td>';
                     echo '<td><a href="excluir_vaga.php?id='.$linha['codigo'].'&codigo='.$linha['codigo'].'&codvaga='.$linha['codvaga'].'&descricao='.$linha['descricao'].'">Excluir</a></td></td>';
                    echo '</tr>';
                    
                    echo '</tr>';
              
                }
                    echo '
                    </table>
                    </font>
                </div>';
?>
