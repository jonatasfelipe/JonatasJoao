<?php
    require_once('conexao.php'); 

     //recupera valores passados pelo método post
    $id = trim($_POST['id']); 
    $nome  = trim($_POST['txtNome']);
    $model = trim($_POST['txtModel']); 
    $qtd = trim($_POST['txtQtd']);
    $val = trim($_POST['txtVal']);

    if(!empty($nome) && !empty($model) && !empty($qtd) && !empty($val)){
      $con=open_database(); 
      selectDb();
      $sql = "UPDATE pecas set nome='$nome',
              modelo='$model', quantidade='$qtd', valor='$val' 
              where id='$id';";
      $ins = mysql_query($sql); 
      close_database($con); 
      
      if ($ins==FALSE)
         $msg = "Atualização de peça deu erro..."; 
      else {
         $msg = "Foi alterado" . mysql_affected_rows() . " registros <br/>";
         unset($id, $nome, $model, $qtd, $val); 
      }
      echo $msg; 
    }
    header("Location: listarPeca.php")
?>