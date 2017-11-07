<?php
function open_database() {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        echo "Erro ao conectar no banco de dados....";
        exit;
    }
    return $conexao; 
}
function close_database($conexao) {
    if (!$conexao) {
        echo "Erro ao fechar banco MySql...";
        //  exit;   
    }
     mysql_close($conexao);
}
function selectDb(){
    $banco = mysql_select_db("vendas");
    if (!$banco) {
        echo "Banco de Dados vendas não existe ou sem conexao...";
        exit;
    }
} 
?>