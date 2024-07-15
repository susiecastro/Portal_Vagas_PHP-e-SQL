
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Envie seu currículo aqui</title>
 
 <!-- Layout -->
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
 
 <!-- JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </head>
 <center><img src="imagens/logo.png"></center>


 <legend><center>Envie seu currículo aqui</center></legend>
  <body>
    <font color=#1d2c4b>
 <div class="container">
 <br>


   
 <form class="form-horizontal" method="POST" action="curriculo.php" enctype="multipart/form-data">
   <fieldset>
 

  <center><a href="index.php"><img src="imagens\btn_voltar.gif"></a></center>

 <!-- Título do formulário -->
 
<!-- Campo: Nome Vaga -->

<div class="form-group">

<br>
<br>
 <div class="col-md-4">
  <label> Nome da vaga:</label><br>
<b><input id="combovaga" name="combovaga" size=70 class="form-control input-md" type="hidden" required disabled=true><?php echo $_POST['combovaga']?></b>
</input>
 </div>
 </div>
 <?php
 session_start();

 $_SESSION['nomevaga'] = $_POST['combovaga'];
$nomevaga = $_POST['combovaga'];
 require_once 'conexao_BD.php';
            $vagas = "SELECT * FROM vagas WHERE codvaga='$nomevaga'";
            $resultado = $conexaobd->query($vagas);
            if($resultado != null)
                foreach($resultado as $linha) {

                  echo $linha['descricao'];
                }

?>

 <!-- Campo: Nome -->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Nome Completo</label>  
 <div class="col-md-4">
   <input id="nome" name="nome" placeholder="Informe seu nome completo" class="form-control input-md" required="" type="text" required>
 </div>
 </div>
 
 <!-- Campo: Email -->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Email</label>  
 <div class="col-md-4">
   <input id="email" name="email" placeholder="Informe seu email" class="form-control input-md" type="email" required>
 </div>
 </div>

 
 <!-- Campo: Data Nacimento-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Data de Nascimento</label>  
 <div class="col-md-4">
   <input id="dtnasc" name="dtnasc" placeholder="Informe a data de nascimento" class="form-control input-md" required="" type="date" required>
 </div>
 </div>

   <!-- Campo: Estado Civil-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Estado Civil</label>  
 <div class="col-md-4">
  <select name="estadocivil" type="text" required>
  <option value="Solteiro(a)">Solteiro(a)</option>
  <option value="Casado(a)">Casado(a)</option>
 <option value="Divorciado(a)">Divorciado(a)</option>
   </select>
   </div>
 </div>

 <!-- Campo: Estado-->
  <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Estado</label>  
   <div class="col-md-4">
    <select name="estado" type="text" required>
    <option value="">Selecione</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MT">Mato Grosso</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select>
  </div>
 </div>

 <!-- Campo: Municipio-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Municipios</label>  
   <div class="col-md-4">

<select name="combomunicipio">
         
          <?php
            require_once 'conexao_BD.php';
            $municipios = "SELECT * FROM municipios";
            $resultado_municipios = $conexaobd->query($municipios);
            while($linha_municipios = mysqli_fetch_assoc($resultado_municipios)){ ?>
              <option value="<?php echo $linha_municipios['NOME']; ?>"><?php echo $linha_municipios['NOME']; ?></option>
              

               <?php
            }

  
          ?>
  </select><br><br>
   </div>
 </div>


 <!-- Campo: Trabalha presencialmente-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Trabalha Presencialmente?</label>  
  <div class="col-md-4">
 <select name="presencialmente" type="text" required>
  <option value="Sim">Sim</option>
  <option value="Não">Não</option>
   </select>

   </div>
 </div>



<!-- Campo: Tem Filhos?-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Tem filhos?</label>  
  <div class="col-md-4">
<select name="filhos" type="text" required>
  <option value="Sim">Sim</option>
  <option value="Não">Não</option>
   </select>
   </div>
 </div>


 <!-- Disponibilidade para viagens-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Disponibilidade para viagens?</label>  
  <div class="col-md-4">
 <select name="viagem" type="text" required>
  <option value="Sim">Sim</option>
  <option value="Não">Não</option>
   </select>

   </div>
 </div>


 <!-- Campo: Telefone-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Telefone:</label>  
 <div class="col-md-4">
   <input id="telefone" name="telefone" placeholder="Informe o telefone" class="form-control input-md" required="" type="text" required>
 </div>
 </div>

  <!-- Campo: Tempo de Experiencia-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Tempo de experiencia:</label>  
 <div class="col-md-4">
<select name="experiencia" type="text" required>
<option value="Até 1 ano">Até 1 ano</option>
<option value="De 1 ano a 2 anos">De 1 ano a 2 anos</option>
<option value="De 2 anos a 3 anos">De 2 anos a 3 anos</option>
<option value="Acima de 3 anos">Acima de 3 anos</option>
</select>
 </div>
 </div>


 

  <!-- Campo: CNH-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Possuí CNH?:</label>  
 <div class="col-md-4">
<select name="cnh" type="text" required>
<option value="Sim">Sim</option>
<option value="Não">Não</option>
</select>
 </div>
 </div>

   <!-- Campo: Categoria da CNH-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Categoria CNH:</label>  
<div class="col-md-4">
<select name="categoriacnh" type="text" required>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="AB">AB</option>
<option value="AC">AC</option>
<option value="AD">AD</option>
<option value="AE">AE</option>
</select>


 </div>
 </div>


  <!-- Campo: Formacao-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Formação:</label>  
 <div class="col-md-4">
  <select name="formacao" required>
  <option value="Ensino Fundamento Completo">Ensino Fundamento Completo</option>
  <option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
  <option value="Ensino Médio Completo">Ensino Médio Completo</option>
  <option value="Ensino Técnico Incompleto">Ensino Técnico Incompleto</option>
  <option value="Ensino Técnico Completo">Ensino Técnico Completo</option>
  <option value="Graduação Incompleta">Graduação Incompleta</option>
  <option value="Graduação Incompleta">Graduação Completa</option>
  <option value="Pós Graduação Incompleta">Pós Graduação Incompleta</option>
  <option value="Pós Graduação Completa">Pós Graduação Completa</option>
  </select>

 </div>
 </div>

  <!-- Campo: Área formacao-->
<div class="form-group">
   <label class="col-md-4 control-label" for="nome">Área Formação:</label>  
  <div class="col-md-4">
   <input id="areaformacao" name="areaformacao" placeholder="Informe a Área de Formação" class="form-control input-md" required="" type="text" required>
 </div>
</div>

   <!-- Campo: Pretensão Salarial-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="nome">Pretensão Salarial:</label>  
 <div class="col-md-4">
   
<select name="pretensao" required type="text">
  <option value="1500,00">1500,00</option>
  <option value="2000,00">2000,00</option>
  <option value="2500,00">2500,00</option>
  <option value="3000,00">3000,00</option>
  <option value="3500,00">3500,00</option>
  <option value="4000,00">4000,00</option>
  <option value="4500,00">4500,00</option>
  <option value="5000,00">5000,00</option>
  <option value="6000,00">6000,00</option>
  <option value="6500,00">6500,00</option>
  <option value="7000,00">7000,00</option>
  <option value="7500,00">7500,00</option>
  <option value="8000,00">8000,00</option>
  <option value="8500,00">8500,00</option>
  <option value="9000,00">9000,00</option>
  <option value="9500,00">9500,00</option>
  <option value="10000,00">10000,00</option>
  <option value="10500,00">10500,00</option>
  </select>
 </div>
 </div>


 <!-- Campo: anexo --> 
 <div class="form-group">
  


   <label class="col-md-4 control-label" for="curriculo">Anexo</label>

 <div class="col-md-4">
   <input id="curriculo" required name="curriculo" class="input-file" type="file">
     <span class="help-block">40MB por mensagem</span>

 </div>
 </div> 
 </b>

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
</html>