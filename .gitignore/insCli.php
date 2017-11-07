<?php
    session_start();
    if(!isset($_SESSION['user']))
    Header("Location: index.html");

    require_once('conexao.php'); 

    $nome  = trim($_POST['txtNome']);
    $cid = trim($_POST['txtCid']); 
    $est = trim($_POST['txtEst']);
    if(!empty($nome) && !empty($cid) && !empty($est)){
      $con = open_database(); 
      selectDb();   
      $sql = "INSERT INTO clientes (nome, cidade, estado) VALUES  ('$nome', '$cid', '$est');";
      $ins = mysql_query($sql); 
      close_database($con); 


      if ($ins==FALSE)
         $msg = "Consulta inserir produtos deu erro..."; 
      else {
         $msg = "Foi inserido" . mysql_affected_rows() . " registros <br/>";
         unset($nome, $cid, $est); 
      }
      echo $msg; 
    }
    header("location: listarCli.php")
?>