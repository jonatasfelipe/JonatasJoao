<?php
      session_start();
      if(!isset($_SESSION['user']))
        Header("Location: index.html");
  
       require_once('conexao.php'); 
       $con = open_database();
       selectDb();
       $rs = mysql_query("SELECT * FROM pecas;");
       close_database($con); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inserir Produtos</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Cadastrar Nova Peça</h1>
        <form id="frmCadPeca" name="frmCadPeca" method="post" action="insPeca.php">
           <div class="form-group">
              <label for="lblNome">Nome:</label>
              <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="nome da peça...">
           </div>
           <div class="form-group">
              <label for="lblModel">Modelo:</label>
              <input type="text" class="form-control" name="txtModel" id="txtModel"  placeholder="modelo do carro...">
           </div>
           <div class="form-group">
              <label for="lblQtd">Quantidade:</label>
              <input type="text" class="form-control" name="txtQtd" id="txtQtd" placeholder="informe a quantidade...">
           </div>
           <div class="form-group">
              <label for="lblVal">Valor:</label>
              <input type="text" class="form-control" name="txtVal" id="txtVal" placeholder="informe um número do tipo real...">
           </div>         
           <input name="bt_cad" id="bt_cad" class="btn btn-success" type="submit" value="Gravar"> 
           <input name="bt_limpar" id="bt_limpar" class="btn btn-warning" type="reset" value="Limpar"> 
           <input name="bt_voltar" id="bt_voltar" class="btn btn-danger" type="button" value="Voltar"
                 onclick="javascript:location.href= 'listarPeca.php'"> 
        </form>        
    </body>
</html>