 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exportar Planilha</title>
  </head>
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
        $html.='<td><b>Área Formação</b></td>';
        $html.='<td><b>Pretensão</b></td>';
        $html.='<td><b>Currículo</b></td>';
        $html.='</tr>';

              
                $path = "curriculos/";                 
                $sql = "SELECT * FROM curriculos" ;
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
          
</body>
</html>