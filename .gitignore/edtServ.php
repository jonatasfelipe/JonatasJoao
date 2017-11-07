<?php
    require_once('conexao.php'); 

     //recupera valores passados pelo método post
    $id = trim($_POST['id']); 
    $serv  = trim($_POST['txtServ']);
    $func = trim($_POST['txtFunc']); 
    $val = trim($_POST['txtVal']);

    if(!empty($serv) && !empty($func) && !empty($val)){
      $con=open_database(); 
      selectDb();
      $sql = "UPDATE servico set serviços='$serv',
              funcionario='$func', valor='$val' 
              where id='$id';";
      $ins = mysql_query($sql); 
      close_database($con); 
      
      if ($ins==FALSE)
         $msg = "Atualização de peça deu erro..."; 
      else {
         $msg = "Foi alterado" . mysql_affected_rows() . " registros <br/>";
         unset($id, $serv, $func, $val); 
      }
      echo $msg; 
    }
    header("Location: listarServ.php")
?>