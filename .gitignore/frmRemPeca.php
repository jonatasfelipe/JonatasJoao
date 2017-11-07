<?php
    require_once('conexao.php'); 

     $id = trim($_REQUEST['id']); 

     $con = open_database(); 
     selectDb(); 
     $rs = mysql_query("SELECT * FROM peças where id=". $id); 
     close_database($con);

     $row = mysql_fetch_array($rs); 
     $nome = $row['nome']; 
     $model = $row['modelo']; 
     $qtd = $row['quantidade'];  
     $val = $row['valor'];
?>

<html>
     <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Remover Peças do Estoque</title>
    </head>
    <body class="container">
        <h1>Remoção de Peças</h1>
        <form id="frmRemPeca" name="frmRemPeca" method="post" action="remPeca.php">
           <div class="form-group">
              <label for="lblId">
                  <span class="textoBold">ID:</span>
                  <span class="textoNormal"><?php echo $id?> </span>
              </label>
              <input type="hidden" name="id" value="<?php echo $id?>"/>
           </div>        
           <div class="form-group">
              <label for="lblNome">
                  <span class="textoBold">Nome:</span>
                  <span class="textoNormal"><?php echo $nome?> </span>
              </label>
            </div> 
            <div class="form-group">
              <label for="lblModel">
                  <span class="textoBold">Modelo:</span>
                  <span class="textoNormal"><?php echo $model?> </span>
              </label>
            </div> 
            <div class="form-group">
              <label for="lblQtd">
                  <span class="textoBold">Quantidade:</span>
                  <span class="textoNormal"><?php echo $qtd?> </span>
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
                 onclick="javascript:location.href='listarPeca.php'"> 
        </form>
    </body>
 </html>           
 