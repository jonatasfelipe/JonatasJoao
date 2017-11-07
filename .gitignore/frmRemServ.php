<?php
    require_once('conexao.php'); 

     $id = trim($_REQUEST['id']); 

     $con = open_database(); 
     selectDb(); 
     $rs = mysql_query("SELECT * FROM serviço where id=". $id); 
     close_database($con);

     $row = mysql_fetch_array($rs); 
     $serv = $row['serviço']; 
     $func = $row['funcionario']; 
     $val = $row['valor'];
?>

<html>
     <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Remover Serviço</title>
    </head>
    <body class="container">
        <h1>Remoção de Serviço</h1>
        <form id="frmRemServ" name="frmRemServ" method="post" action="remServ.php">
           <div class="form-group">
              <label for="lblId">
                  <span class="textoBold">ID:</span>
                  <span class="textoNormal"><?php echo $id?> </span>
              </label>
              <input type="hidden" name="id" value="<?php echo $id?>"/>
           </div>        
           <div class="form-group">
              <label for="lblServ">
                  <span class="textoBold">Serviço:</span>
                  <span class="textoNormal"><?php echo $serv?> </span>
              </label>
            </div> 
            <div class="form-group">
              <label for="lblFunc">
                  <span class="textoBold">Funcionario:</span>
                  <span class="textoNormal"><?php echo $func?> </span>
              </label>
            </div>
            <div class="form-group">
              <label for="lblVal">
                  <span class="textoBold">Valor:</span>
                  <span class="textoNormal">R$ <?php echo $val?> </span>
              </label>
            </div>   
            <input name="bt_rem" id="bt_rem" class="btn btn-success" type="submit" value="Remover"> 
            <input name="bt_voltar" id="bt_voltar" class="btn btn-danger" type="button" value="Voltar"
                 onclick="javascript:location.href='listarServ.php'"> 
        </form>
    </body>
 </html>           
 