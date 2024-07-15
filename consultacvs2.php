 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultar Currículos Cadastrados</title>


<?php include ('protectrh.php')?>
 <?php
   require_once 'conexao_BD.php';
  
  

  echo '

<center>
<img src="imagens\logo.png" width="225" height="181">
 <table>
 <font color=#001646>
  <tr>

    <td></td>
    
    <td></a> 
          </td>
  </tr>
<tr>
  <td><h3><center><a href="gerarplanilha.php" class="w3-display-topright">
            <img src="imagens\btn_exportar.gif">     
            </a> </center></h3></td>
            <td><a href="selecionar_vaga.php" class="w3-display-topright">
            <img src="imagens\btn_voltar.gif">     
     
     </tr>       </a> </h3></td>
</table>
</center>       <center>   
                <h1 class="w3-center w3-teal w3-round-large">Currículos</h1>
                </center>
               
                <table border= "1px solid black" width=200%>
               
                <thead>   
                    <tr class="w3-center w3-teal">
                        <th>Enviado em</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Nome da Vaga</th>
                        <th>Data de Nascimento</th>
                        <th>Estado Civil</th>
                        <th>Filhos?</th>
                        <th>Presencialmente?</th>
                        <th>Viagem?</th>
                        <th>CNH</th>
                        <th>Categoria CNH</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Telefone</th>
                        <th>Experiencia</th>
                        <th>Formacao</th>
                        <th>Área Formação</th>
                        <th>Outra Formação</th>
                        <th>Pretensao</th>
                        <th>Curriculo</th>
                        <th>Status</th>
                    </tr>
                <thead>
                <font size=4>
                            ';
                session_start();

                            
                $sql = "SELECT * FROM curriculos";
                $resultado = $conexaobd->query($sql);
                if($resultado != null)
                foreach($resultado as $linha) {


                    echo '<tr>';
                    echo '<td>'.date("d/m/Y H:i:s",strtotime($linha['dataenvio'])).'</td>';
                    echo '<td>'.$linha['txtnome'].'</td>';
                    echo '<td>'.$linha['txtemail'].'</td>';
                    echo '<td>'.$linha['codvaga'].'</td>';
                    echo '<td>'.date("d/m/Y",strtotime($linha['dtnasc'])).'</td>';
                    echo '<td>'.$linha['txtestadocivil'].'</td>';
                    echo '<td>'.$linha['txtfilhos'].'</td>';
                    echo '<td>'.$linha['txtpresencialmente'].'</td>';
                    echo '<td>'.$linha['txtviagem'].'</td>';
                    echo '<td>'.$linha['txtcnh'].'</td>';
                    echo '<td>'.$linha['txtcategoriacnh'].'</td>';
                    echo '<td>'.$linha['txtestado'].'</td>';
                    echo '<td>'.$linha['txtmunicipio'].'</td>';
                    echo '<td>'.$linha['txtelefone'].'</td>';
                    echo '<td>'.$linha['txtexperiencia'].'</td>';
                    echo '<td>'.$linha['txtformacao'].'</td>';
                    echo '<td>'.$linha['txtareaformacao'].'</td>';
                     echo '<td>'.$linha['outraformacao'].'</td>';
                    echo '<td>'.$linha['txtpretensao'].'</td>';
                    echo '<td><a target="blank"href=https://seusite.com.br/vagas/curriculos/'.$linha['curriculo'].'>'.$linha['curriculo'].'</a></td>';
                    echo '<td>'.$linha['txtstatus'].'</td>';
                     echo '<td><a href="atualizar_curriculo.php?id='.$linha['codcv'].'&codcv='.$linha['codcv'].'&txtnome='.$linha['txtnome'].'&txtstatus='.$linha['txtstatus'].'">Atualizar</a></td></td>';
                    echo '</tr>';
              
                }
                echo '
                    </font>
                    </table>
                    </font>
                </div>';
                
                
            $conexaobd->close();




           ?>
         