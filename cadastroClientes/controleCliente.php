<?php
include 'crudCliente.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
	case 'Cadastrar':
	cadastrarCliente($_POST["nome"], $_POST["telefone"]);
	header("Location: cadastrarCliente.php");

	break;
	case 'Editar':
	alterarCliente($_POST["codigo"],$_POST["nome"], $_POST["telefone"]);
	header("Location: visualizarCliente.php");
	break;

	case 'Excluir':
	excluirCliente($_POST["codigo"]);
	header("Location: visualizarCliente.php");
	break;
}
?>