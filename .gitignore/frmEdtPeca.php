<?php
    require_once('conexao.php'); 

     $id = trim($_REQUEST['id']); 

     $con = open_database(); 
     selectDb(); 
     $rs = mysql_query("SELECT * FROM pecas where id=". $id); 
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
        <title>Alterar Peças no Estoque</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Alteração de dados de Peças</h1>
        <form id="frmEdtPeca" name="frmEdtPeca" method="post" action="edtPeca.php">
           <div class="form-group">
              <label for="lblIdt">ID: <?php echo $id?> </label>
              <input type="hidden" name="id" value="<?php echo $id?>"/>
           </div>
           <div class="form-group">
              <label for="lblNome">Nome:</label>
              <input type="text" class="form-control" id="txtNome"
               name="txtNome" value="<?php echo $nome?>" placeholder="nome da peça...">
           </div>
           <div class="form-group">
              <label for="lblModel">Modelo</label>
              <input type="text" class="form-control" name="txtModel" 
              id="txtModel"  value="<?php echo $model?>" placeholder="Modelo de carro da peça...">
           </div>
           <div class="form-group">
              <label for="lblQtd">Quantidade:</label>
              <input type="text" class="form-control" name="txtQtd" 
              id="txtQtd" value="<?php echo $qtd?>" placeholder="informe a quantidade...">
           </div>
           <div class="form-group">
              <label for="lblVal">Valor:</label>
              <input type="text" class="form-control" name="txtVal" 
              id="txtVal" value="<?php echo $val?>" placeholder="informe um número do tipo real...">
           </div>         
           <input name="bt_ed" id="bt_ed" class="btn btn-success" type="submit" value="Gravar"> 
           <input name="bt_voltar" id="bt_voltar" class="btn btn-danger" type="button" value="Voltar"
                 onclick="javascript:location.href='listarPeca.php'"> 

        </form>
    </body>   
</html>
