    <?php
    session_start();
	require_once 'conexao_BD.php';


if (isset($_FILES['curriculo'])){
    $arquivo = $_FILES['curriculo'];

   if($arquivo['error'])
    die("Falha ao enviar arquivo");

   if($arquivo['size']>52428800) 
    die("Envie um currículo até 50MB");

$pasta = "curriculos/";
$upload_extensoes = array('doc','docx','pdf');
$extensao =strtolower(end(explode('.',$_FILES['curriculo']['name'])));
$nomearquivo = $arquivo['name'];
$codarquivo = uniqid();
$novonome = $codarquivo.".".$extensao;
$nomevagaform= $_POST['codvaga'];
//$extensao = strtolower(substr($_FILES['arquivo']['name'],-4));
//$extensao2 = strtolower(substr($_FILES['arquivo']['name'],-5));


if(in_array($extensao,$upload_extensoes) === false)
die ('<center><h1><font color=red>Currículos somente no formato .Doc, .Docx ou .pdf</center></h1>');


 
    
    
       move_uploaded_file($arquivo['tmp_name'], $pasta.$novonome);
       


}
$path = $pasta.$novonome;
$sql = "INSERT INTO curriculos (txtnome, txtemail, codvaga, dtnasc, txtestadocivil, txtfilhos,txtestado,txtmunicipio,txtpresencialmente,txtelefone,txtexperiencia, txtcnh, txtcategoriacnh,txtformacao, txtareaformacao, txtoutraformacao, txtpretensao,  dataenvio,curriculo,txtviagem,txtstatus) 
        VALUES('".$_POST['nome']."','".$_POST['email']."','".$_SESSION['nomevaga']."','".$_POST['dtnasc']."','".$_POST['estadocivil']."','".$_POST['filhos']."','".$_POST['estado']."','".$_POST['combomunicipio']."','".$_POST['presencialmente']."','".$_POST['telefone']."','".$_POST['experiencia']."','".$_POST['cnh']."','".$_POST['categoriacnh']."','".$_POST['formacao']."','".$_POST['areaformacao']."',,'".$_POST['outraforamacao']."','".$_POST['pretensao']."',NOW(),'$novonome','".$_POST['viagem']."','Em análise')";

     
        if ($conexaobd->query($sql) === TRUE) {
            echo '<center><h1><font color=#001646> Curriculo enviado com sucesso!</center></h1>';
                    
        } else {
            echo '<center><h1><font color=red>Tente novamente </center></h1>';
        }

$conexaobd->close();   
       
?>

