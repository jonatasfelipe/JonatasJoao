<html>
     <head>
        <meta charset="UTF-8">
        <title>Alterar Serviço Prestado</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Alteração de dados de Serviço</h1>
        <form id="frmEdtServ" name="frmEdtServ" method="post" action="edtServ.php">
           <div class="form-group">
              <label for="lblIdt">ID: <?php echo $id?> </label>
              <input type="hidden" name="id" value="<?php echo $id?>"/>
           </div>
           <div class="form-group">
              <label for="lblServ">Serviço</label>
              <input type="text" class="form-control" id="txtServ"
               name="txtServ" value="<?php echo $serv?>" placeholder="Serviço prestado...">
           </div>
           <div class="form-group">
              <label for="lblFunc">Funcionario</label>
              <input type="text" class="form-control" name="txtFunc" 
              id="txtFunc"  value="<?php echo $func?>" placeholder="Funcionario que prestou o serviço...">
           </div>
           <div class="form-group">
              <label for="lblVal">Valor:</label>
              <input type="text" class="form-control" name="txtVal" 
              id="txtVal" value="<?php echo $val?>" placeholder="informe um número do tipo real...">
           </div>         
           <input name="bt_ed" id="bt_ed" class="btn btn-success" type="submit" value="Gravar"> 
           <input name="bt_voltar" id="bt_voltar" class="btn btn-danger" type="button" value="Voltar"
                 onclick="javascript:location.href='listarServ.php'"> 

        </form>
    </body>   
</html>
