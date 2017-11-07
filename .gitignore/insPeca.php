<?php
    session_start();
    if(!isset($_SESSION['user']))
    Header("Location: index.html");
    
    require_once('conexao.php'); 

    $nome  = trim($_POST['txtNome']);
    $model = trim($_POST['txtModel']); 
    $qtd = trim($_POST['txtQtd']);
    $val = trim($_POST['txtVal']);
    if(!empty($nome) && !empty($model) && !empty($qtd) && !empty($val)){
      $con = open_database(); 
      selectDb();   
      $sql = "INSERT INTO pecas (nome, model, quantidade, valor) VALUES  ('$nome', '$model', '$qtd', '$val');";
      $ins = mysql_query($sql); 
      close_database($con); 


      if ($ins==FALSE)
         $msg = "Consulta inserir produtos deu erro..."; 
      else {
         $msg = "Foi inserido" . mysql_affected_rows() . " registros <br/>";
         unset($nome, $model, $qtd, $val); 
      }
      echo $msg; 
    }
    header("location: listarPeca.php")
?>