<?php
    session_start();
    if(!isset($_SESSION['user']))
    Header("Location: index.html");    
    
    require_once('conexao.php'); 

    $serv  = trim($_POST['txtServ']);
    $func = trim($_POST['txtFunc']); 
    $val = trim($_POST['txtVal']);
    if(!empty($serv) && !empty($func) && !empty($val)){
      $con = open_database(); 
      selectDb();   
      $sql = "INSERT INTO servico (serv, func, valor) VALUES  ('$serv', '$func', '$val');";
      $ins = mysql_query($sql); 
      close_database($con); 


      if ($ins==FALSE)
         $msg = "Consulta inserir produtos deu erro..."; 
      else {
         $msg = "Foi inserido" . mysql_affected_rows() . " registros <br/>";
         unset($serv, $func, $val); 
      }
      echo $msg; 
    }
    header("location: listarServ.php")
?>