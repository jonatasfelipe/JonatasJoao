<?php
      session_start();
      if(!isset($_SESSION['user']))
        Header("Location: index.html");
  
       require_once('conexao.php'); 
       $con = open_database();
       selectDb();
       $rs = mysql_query("SELECT * FROM clientes;"); 
       close_database($con); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inserir Cliente</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Cadastrar Novo Cliente</h1>
        <form id="frmCadCli" name="frmCadCli" method="post" action="insCli.php">
           <div class="form-group">
              <label for="lblNome">Nome:</label>
              <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome do Cliente...">
           </div>
           <div class="form-group">
              <label for="lblCid">Cidade:</label>
              <input type="text" class="form-control" name="txtCid" id="txtCid"  placeholder="Cidade do Cliente...">
           </div>
           <div class="form-group">
              <label for="lblEst">Estado:</label>
              <input type="text" class="form-control" name="txtEst" id="txtEst" placeholder="Estado do Cliente...">
           </div>         
           <input name="bt_cad" id="bt_cad" class="btn btn-success" type="submit" value="Gravar"> 
           <input name="bt_limpar" id="bt_limpar" class="btn btn-warning" type="reset" value="Limpar"> 
           <input name="bt_voltar" id="bt_voltar" class="btn btn-danger" type="button" value="Voltar"
                 onclick="javascript:location.href= 'listarCli.php'"> 
        </form>        
    </body>
</html>