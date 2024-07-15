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
  $combovaga = $_POST['combovaga'];
  

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
  <td><h3><center><a href="$arquivo" class="w3-display-topright">
            <img src="imagens\btn_exportar.gif">     
            </a> </center></h3></td>
            <td><a href="selecionar_vaga.php" class="w3-display-topright">
            <img src="imagens\btn_voltar.gif">     
     
     </tr>       </a> </h3></td>
</table>
</center>       <center>   
                <h1 class="w3-center w3-teal w3-round-large">Currículos</h1>
                </center>
               
                <table border= "1px solid black" height="auto" width=200%>
               
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
                        <th>Possuí CNH?</th>
                        <th>Categoria CNH:</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Telefone</th>
                        <th>Experiencia</th>
                        <th>Formacao</th>
                        <th>Área de Formação</th>
                        <th>Pretensao</th>
                        <th>Curriculo</th>
                        <th>Status</th>
                    </tr>
                <thead>
                <font size=4>
                            ';
                session_start();

                $_SESSION['vaga_selecionada'] =$_POST['combovaga'];
                $nomevaga = $_SESSION['vaga_selecionada'];
                $path = "curriculos/";                 
                $sql = "SELECT * FROM curriculos WHERE codvaga ='$nomevaga'";
                
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
                    echo '<td>'.$linha['txtpretensao'].'</td>';
                    echo '<td><a target="blank"href=https://seusite.com.br/vagas/curriculos/'.$linha['curriculo'].'>'.$linha['curriculo'].'</a></td>';
                    echo '<td>'.$linha['txtstatus'].'</td>';
                    
                    echo '</tr>';
                }
                echo '
                    </font>
                    </table>
                    </font>
                </div>';
                

                <?php
  require_once 'conexao_BD.php';

  $arquivo ='relatoriocurriculos.xls';

        $html='';
        $html.='<table border=1>';
        $html.='<tr>';
        $html.='<td><b>Enviado em</b></td>';
        $html.='<td><b>Nome</b></td>';
        $html.='<td><b>Email</b></td>';
        $html.='<td><b>Nome Vaga</b></td>';
        $html.='<td><b>Data de Nascimento</b></td>';
        $html.='<td><b>Estado Civil</b></td>';
        $html.='<td><b>Filhos?</b></td>';
        $html.='<td><b>Presencialmente?</b></td>';
        $html.='<td><b>Viagem?</b></td>';
        $html.='<td><b>Possuí CNH?</b></td>';
        $html.='<td><b>Categoria CNH:</b></td>';
        $html.='<td><b>Estado</b></td>';
        $html.='<td><b>Municipio</b></td>';
        $html.='<td><b>Telefone</b></td>';
        $html.='<td><b>Experiencia</b></td>';
        $html.='<td><b>Formação</b></td>';
        $html.='<td><b>Área Formaçâo</b></td>';
        $html.='<td><b>Pretensão</b></td>';
        $html.='<td><b>Currículo</b></td>';
        $html.='</tr>';

              
                $path = "curriculos/";                 
                $sql = "SELECT * FROM curriculos WHERE $nomevaga" ;
                $resultado = $conexaobd->query($sql);
                if($resultado != null)
                foreach($resultado as $linha) {



                    
                    $html.='<tr>';
                    $html.='<td>'.$linha['dataenvio'].'</td>';
                    $html.= '<td>'.$linha['txtnome'].'</td>';
                    $html.= '<td>'.$linha['txtemail'].'</td>';
                    $html.= '<td>'.$linha['codvaga'].'</td>';
                    $html.= '<td>'.$linha['dtnasc'].'</td>';
                    $html.= '<td>'.$linha['txtestadocivil'].'</td>';
                    $html.= '<td>'.$linha['txtfilhos'].'</td>';
                    $html.= '<td>'.$linha['txtpresencialmente'].'</td>';
                    $html.= '<td>'.$linha['txtviagem'].'</td>';
                    $html.= '<td>'.$linha['txtcnh'].'</td>';
                    $html.= '<td>'.$linha['txtcategoriacnh'].'</td>';
                    $html.= '<td>'.$linha['txtestado'].'</td>';
                    $html.= '<td>'.$linha['txtmunicipio'].'</td>';
                    $html.= '<td>'.$linha['txtelefone'].'</td>';
                    $html.= '<td>'.$linha['txtexperiencia'].'</td>';
                    $html.= '<td>'.$linha['txtformacao'].'</td>';
                    $html.= '<td>'.$linha['txtareaformacao'].'</td>';
                    $html.= '<td>'.$linha['txtpretensao'].'</td>';
                    $html.= '<td><a href=https://seusite.com.br/vagas/curriculos/'.$linha['curriculo'].'>'.$linha['curriculo'].'</a></td>';
                    $html.= '</tr>';


                       }
       
        $html.='</table>';
        //configurações header para forçar o download
        header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
        header ("Cache-Control: no-cache, must-revalidate");
        header("Content-type: application/x-m---cel; charset=UTF-8");
        header ("Pragma: no-cache");
        header ("Content-type: application/x-m---cel");
        header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
        header ("Content-Description: PHP Generated Data" );

              
                
                  echo $html;
                    
                
            $conexaobd->close();


           ?>
          
         
          </head>
          </html>