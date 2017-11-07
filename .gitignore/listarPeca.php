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
        <title>Listar Peças</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Manter Dados de Peças</h1>
        <br/>
        <input id="bt_ins" class="btn btn-primary" 
             type="button"  value="Novo"
                 onclick="javascript:location.href='inserir.php'">

         <input id="bt_logout" class="btn btn-danger" 
             type="button"  value="Logout"
                 onclick="javascript:location.href='Logout.php'">
                 
         <br/>  <br/>
        <div class="row col-md-7">
        <table  class="table table-striped table table-hover">
        <tr>
             <th>ID</th>
             <th>Nome</th>
             <th>Modelo</th>
             <th>Quantidade</th>
             <th>Valor</th>
        </tr>
        <?php while ($row = mysql_fetch_array($rs)) { ?>
            <tr>
               <td><?php echo $row['id'] ?></td>
               <td><?php echo $row['nome'] ?></td>
               <td><?php echo $row['modelo'] ?></td>
               <td><?php echo $row['quantidade'] ?></td>
               <td><?php echo $row['valor']?></td>
               <td>
                  <button type="button" class="btn btn-warning" 
                     onclick="javascript: location.href='frmEdtPeca.php?id=' +
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