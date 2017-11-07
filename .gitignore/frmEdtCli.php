<html>
     <head>
        <meta charset="UTF-8">
        <title>Alterar Cliente</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Alteração de dados do Cliente</h1>
        <form id="frmEdtCli" name="frmEdtCli" method="post" action="edtCli.php">
           <div class="form-group">
              <label for="lblId">ID: <?php echo $id?> </label>
              <input type="hidden" name="id" value="<?php echo $id?>"/>
           </div>
           <div class="form-group">
              <label for="lblNome">Nome</label>
              <input type="text" class="form-control" id="txtNome"
               name="txtNome" value="<?php echo $nome?>" placeholder="Nome do Cliente...">
           </div>
           <div class="form-group">
              <label for="lblCid">Cidade</label>
              <input type="text" class="form-control" name="txtCid" 
              id="txtCid"  value="<?php echo $cid?>" placeholder="Cidade do Cliente...">
           </div>
           <div class="form-group">
              <label for="lblEst">Estado</label>
              <input type="text" class="form-control" name="txtEst" 
              id="txtEst" value="<?php echo $est?>" placeholder="Estado do Cliente...">
           </div>         
           <input name="bt_ed" id="bt_ed" class="btn btn-success" type="submit" value="Gravar"> 
           <input name="bt_voltar" id="bt_voltar" class="btn btn-danger" type="button" value="Voltar"
                 onclick="javascript:location.href='listarCli.php'"> 

        </form>
    </body>   
</html>
