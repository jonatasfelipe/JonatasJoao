<?php
      session_start();
      if(!isset($_SESSION['user']))
        Header("Location: index.html");
  
       require_once('conexao.php'); 
       $con = open_database();
       selectDb();
       $rs = mysql_query("SELECT * FROM servico;"); 
       close_database($con); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inserir Serviço</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Cadastrar Novo Serviço</h1>
        <form id="frmCadServ" name="frmCadServ" method="post" action="insServ.php">
           <div class="form-group">
              <label for="lblServ">Serviço:</label>
              <input type="text" class="form-control" id="txtServ" name="txtServ" placeholder="Serviço prestado...">
           </div>
           <div class="form-group">
              <label for="lblFunc">Funcionario</label>
              <input type="text" class="form-control" name="txtFunc" id="txtFunc"  placeholder="Funcionario que prestou o serviço...">
           </div>
           <div class="form-group">
              <label for="lblVal">Valor:</label>
              <input type="text" class="form-control" name="txtVal" id="txtVal" placeholder="informe um número do tipo real...">
           </div>         
           <input name="bt_cad" id="bt_cad" class="btn btn-success" type="submit" value="Gravar"> 
           <input name="bt_limpar" id="bt_limpar" class="btn btn-warning" type="reset" value="Limpar"> 
           <input name="bt_voltar" id="bt_voltar" class="btn btn-danger" type="button" value="Voltar"
                 onclick="javascript:location.href= 'listarServ.php'"> 
        </form>        
    </body>
</html>