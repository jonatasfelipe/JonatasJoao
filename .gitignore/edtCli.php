<?php
    require_once('conexao.php'); 

     //recupera valores passados pelo método post
    $id = trim($_POST['id']); 
    $nome  = trim($_POST['txtNome']);
    $cid = trim($_POST['txtCid']); 
    $est = trim($_POST['txtEst']);

    if(!empty($nome) && !empty($cid) && !empty($est)){
      $con=open_database(); 
      selectDb();
      $sql = "UPDATE clientes set nome='$nome',
              cidade='$cid', estado='$est' 
              where id='$id';";
      $ins = mysql_query($sql); 
      close_database($con); 
      
      if ($ins==FALSE)
         $msg = "Atualização de peça deu erro..."; 
      else {
         $msg = "Foi alterado" . mysql_affected_rows() . " registros <br/>";
         unset($id, $nome, $cid, $est); 
      }
      echo $msg; 
    }
    header("Location: listarCli.php")
?>