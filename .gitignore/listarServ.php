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
        <title>Listar Serviço</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Manter Dados de Serviço</h1>
        <br/>
        <input id="bt_ins" class="btn btn-primary" 
             type="button"  value="Novo"
                 onclick="javascript:location.href='inserir2.php'">

         <input id="bt_logout" class="btn btn-danger" 
             type="button"  value="Logout"
                 onclick="javascript:location.href='Logout.php'">
                 
         <br/>  <br/>
        <div class="row col-md-7">
        <table  class="table table-striped table table-hover">
        <tr>
             <th>ID</th>
             <th>Serviço</th>
             <th>Funcionario</th>
             <th>Valor R$</th>
        </tr>
        <?php while ($row = mysql_fetch_array($rs)) { ?>
            <tr>
               <td><?php echo $row['id'] ?></td>
               <td><?php echo $row['servico'] ?></td>
               <td><?php echo $row['funcionario'] ?></td>
               <td><?php echo $row['valor'] ?></td>
               <td>
                  <button type="button" class="btn btn-warning" 
                     onclick="javascript: location.href='frmEdtServ.php?id=' +
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