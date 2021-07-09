<?php
include 'crudCliente.php';
$pesquisa = $_POST['palavra'];

switch ($pesquisa) {
	case 'tudo':
	$resultado=mostrarCliente();
	break;
	
	default:
	$resultado=mostrarClientePesquisar($pesquisa);
	break;
}

if(mysqli_num_rows($resultado)<=0){
	echo 'Nenhum cliente encontrado';
}
else{
	while($resultadoSeparado=mysqli_fetch_assoc($resultado)){
		echo "
		<tr>
		<td>$resultadoSeparado[nome]</td>
		<td>$resultadoSeparado[telefone]</td>
		<td><a  class='btn btn-success' href='editarCliente.php?codigo=$resultadoSeparado[codigo]'>Editar</a></td>
		</tr>
		";
	}
}
?>