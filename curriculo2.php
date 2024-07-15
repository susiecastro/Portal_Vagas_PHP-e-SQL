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
$sql = "INSERT INTO curriculos (txtnome, txtemail, codvaga, dtnasc, txtestadocivil, txtfilhos,txtmunicipio,txtpresencialmente,txtelefone,txtexperiencia,txtformacao,txtpretensao,  dataenvio,curriculo,txtviagem,txtstatus) 
        VALUES('".$_POST['nome']."','".$_POST['email']."','".$_SESSION['nomevaga']."','".$_POST['dtnasc']."','".$_POST['estadocivil']."','".$_POST['filhos']."','".$_POST['municipio']."','".$_POST['presencialmente']."','".$_POST['telefone']."','".$_POST['experiencia']."','".$_POST['formacao']."','".$_POST['pretensao']."',NOW(),'$novonome','".$_POST['viagem']."','Em análise')";

            if(!isset($_POST['nome'])|| empty(trim($_POST['nome'])){
                echo "Por favor, preencha o campo nome."}
            if(!isset($_POST['email'])|| empty(trim($_POST['email'])){
                echo "Por favor, preencha o campo email."}
                 if(!isset($_POST['nomevaga'])|| empty(trim($_POST['nomevaga'])){
                echo "Por favor, preencha a vaga."}
            if(!isset($_POST['dtnasc'])|| empty(trim($_POST['dtnasc'])){
                echo "Por favor, preencha o campo data de nascimento."}
             if(!isset($_POST['estadocivil'])|| empty(trim($_POST['estadocivil'])){
                echo "Por favor, preencha o campo estado civil."}
            if(!isset($_POST['filhos'])|| empty(trim($_POST['filhos'])){
                echo "Por favor, preencha o campo filhos."}
                 if(!isset($_POST['municipio'])|| empty(trim($_POST['municipio'])){
                echo "Por favor, preencha o campo municipio."}
            if(!isset($_POST['presencialmente'])|| empty(trim($_POST['presencialmente'])){
                echo "Por favor, preencha o campo trabalha presencialmente."}
             if(!isset($_POST['telefone'])|| empty(trim($_POST['telefone'])){
                echo "Por favor, preencha o campo telefone."}
                 if(!isset($_POST['experiencia'])|| empty(trim($_POST['experiencia'])){
                echo "Por favor, preencha o campo experiencia."}
            if(!isset($_POST['formacao'])|| empty(trim($_POST['formacao'])){
                echo "Por favor, preencha o campo formacao."}
             if(!isset($_POST['pretensao'])|| empty(trim($_POST['pretensao'])){
                echo "Por favor, preencha o campo pretensao salarial."}
            if(!isset($_POST['viagem'])|| empty(trim($_POST['viagem'])){
                echo "Por favor, preencha o campo viagem."}
            
                
     
        if ($conexaobd->query($sql) === TRUE) {
            echo '<center><h1><font color=#001646> Curriculo enviado com sucesso!</center></h1>';
                    
        } else {
            echo '<center><h1><font color=red>Tente novamente </center></h1>';
        }

$conexaobd->close();   
       
?>


