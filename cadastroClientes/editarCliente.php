<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Clientes</title>
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Clientes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="cadastrarCliente.php">Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="visualizarCliente.php">Visualizar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php
    include 'crudCliente.php';
    $codigo=$_GET["codigo"];
    $resultado=buscarCliente($codigo);
    $resultadoSeparado=mysqli_fetch_assoc($resultado);


    ?>
    <form method="post" action="controleCliente.php">
      <h3>Editar</h3>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="digite o nome do(a) cliente(a)" value="<?php echo $resultadoSeparado['nome'];?>">
      </div>

      
      <div class="mb-3">
        <label for="celular" class="form-label">Celular:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(99)99999-9999" value="<?php echo $resultadoSeparado['telefone'];?>">
      </div>
      <input type="hidden" name="codigo" value="<?php echo $resultadoSeparado['codigo']; ?>"">
      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary" name="opcao" value="Editar">Editar</button>
        <button type="submit" class="btn btn-danger" name="opcao" value="Excluir">Excluir</button>
        <a class="btn btn-dark" href="visualizarCliente.php">Cancelar</a>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script src="jquery.maskedinput.js" type="text/javascript"></script>
  <script src="mascaras.js" type="text/javascript"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  -->
</body>
</html>