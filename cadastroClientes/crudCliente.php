<?php
include 'conexaoBD.php';

function cadastrarCliente($nome,$telefone){
	connect();
	query("INSERT INTO clientes(nome,telefone) VALUES('$nome','$telefone')");
	close();
}
function mostrarCliente(){
	connect();
	$resultado = query("SELECT * FROM clientes");
	close();
	return $resultado;
}

function buscarCliente($codigo){
	connect();
	$resultado = query("SELECT * FROM clientes WHERE codigo=$codigo");
	close();
	return $resultado;
}

function alterarCliente($codigo, $nome, $telefone){
	connect();
	query("UPDATE clientes SET nome='$nome', telefone='$telefone' WHERE codigo= $codigo");
	close();
}
function excluirCliente($codigo){
	connect();
	query("DELETE FROM clientes WHERE codigo= $codigo");
	close();
}
function mostrarClientePesquisar($pesquisa){
	connect();
	$resultado = query("SELECT * FROM clientes WHERE nome LIKE '%$pesquisa%' OR telefone LIKE '%$pesquisa%'");
	close();
	return $resultado;
}

?>