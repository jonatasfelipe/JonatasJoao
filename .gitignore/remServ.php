<?php
    require_once('conexao.php'); 

     //recupera valores passados pelo método post
    $id = trim($_POST['id']); 

    if(!empty($id)){
      $con=open_database(); 
      selectDb();
      $sql = "DELETE from peças where id='$id';";
      $ins = mysql_query($sql); 
      close_database($con); 
      
      if ($ins==FALSE)
         $msg = "Remoção  de peça deu erro..."; 
      else {
         $msg = "Foi removido" . mysql_affected_rows() . " registros <br/>";
         unset($id); 
      }
      echo $msg; 
    }
    header("location: listarServ.php")
?>