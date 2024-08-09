<?php
include_once "conexao.php";
$btnAtualiza = filter_input(INPUT_POST, 'btnAtualiza', FILTER_SANITIZE_STRING);
if($btnAtualiza){
	//include_once 'conexao.php';
	$id = $_POST['id'];
    $vendas = $_POST['venda'];
    
   
$sqlinsert = mysqli_query($conn, "UPDATE treemap SET qtd_venda = $vendas WHERE id = $id") or die("não foi possível atualizar o treemap");
    header("Location: treemap.php");
    }
?>