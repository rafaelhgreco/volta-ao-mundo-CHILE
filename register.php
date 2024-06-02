<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    register_user($username, $password);
    header('Location: loginUser.php');
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar conta</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a style="color:red" class="navbar-brand" href="index.php"><img style="width: 35px; margin-bottom: 4px;" src="img/cl.jpg"><label style="margin-left: 10px;">Chile</label></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link btn btn-secondary text-white" href="index.php">Voltar ao Início</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="container mt-5">
    <h2 style="color:#101010;">Criar nova conta</h2>
    <form method="post" action="register.php" style="border: 1px solid#101010; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div class="form-group">
            <label for="username">Email:</label>
            <input type="username" class="form-control" name="username" placeholder="Digite seu email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" name="password" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar conta</button>
    </form>
  </main>

  <footer class="bg-light text-center text-lg-start mt-5">
    <div class="container p-4">
      <p>&copy; 2024 Chile. Todos os direitos reservados.</p>
      <ul class="list-unstyled list-inline">
        <li class="list-inline-item"><a href="#">Facebook</a></li>
        <li class="list-inline-item"><a href="#">Twitter</a></li>
        <li class="list-inline-item"><a href="#">Instagram</a></li>
      </ul>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



