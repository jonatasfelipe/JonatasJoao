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
        <title>Listar Clientes</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Manter Dados de Clientes</h1>
        <br/>
        <input id="bt_ins" class="btn btn-primary" 
             type="button"  value="Novo"
                 onclick="javascript:location.href='inserir3.php'">

         <input id="bt_logout" class="btn btn-danger" 
             type="button"  value="Logout"
                 onclick="javascript:location.href='Logout.php'">
                 
         <br/>  <br/>
        <div class="row col-md-7">
        <table  class="table table-striped table table-hover">
            <tr>
                 <th>ID</th>
                 <th>Nome</th>
                 <th>Cidade</th>
                 <th>Estado</th>
            </tr>
            <?php while ($row = mysql_fetch_array($rs)) { ?>
                <tr>
                   <td><?php echo $row['id'] ?></td>
                   <td><?php echo $row['nome'] ?></td>
                   <td><?php echo $row['cidade'] ?></td>
                   <td><?php echo $row['estado'] ?></td>
                   <td>
                      <button type="button" class="btn btn-warning" 
                         onclick="javascript: location.href='frmEdtCli.php?id=' +
                         <?php echo $row['id'] ?>">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                      </button>
                   </td>
                </tr>
            <?php } ?>  
        </table>
     </div>
    </body>
</html>