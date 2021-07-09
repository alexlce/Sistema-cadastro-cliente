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
      <a class="navbar-brand" href="#">Grande Marvel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="cadastrarCliente.php">Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="visualizarCliente.php">Visualizar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <form>
      <h3>Visualizar e Pesquisar</h3>
      <div class="mb-3">
        <label for="pesquisa" class="form-label">Pesquisa:</label>
        <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="digite o nome do(a) cliente(a), ou celular para pesquisar">
      </div>
    </form>
    <table class="table table table-dark table-striped">
      <thead class="table-dark">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Celular</th>
          <th scope="col">Opção</th>
        </tr>
      </thead>
      <tbody class = resultadoPesquisa>
        <?php
        include 'crudCliente.php';
        $resultado=mostrarCliente();
        if($resultado){
          while($resultadoSeparado=mysqli_fetch_assoc($resultado)){
            echo "
            <tr>
            <td>$resultadoSeparado[nome]</td>
            <td>$resultadoSeparado[telefone]</td>
            <td><a class='btn btn-secondary' href='editarCliente.php?codigo=$resultadoSeparado[codigo]'>Editar</a></td>
            </tr>
            ";
          }
        }

        ?>
        
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="JavascriptPesquisar.js" type="text/JavaScript"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  -->
</body>
</html>