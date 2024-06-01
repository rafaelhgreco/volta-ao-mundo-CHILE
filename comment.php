<?php
require_once 'functions.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['content'];
    post_comment($_SESSION['user_id'], $content);
}
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enviar um comentário</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a style="color:red" class="navbar-brand" href="index.html"><img style="width: 35px; margin-bottom: 4px;" src="img/cl.jpg"><label style="margin-left: 10px;">Chile</label></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link btn btn-secondary text-white" href="index.html">Voltar ao Início</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="container mt-5">
  <div class="row justify-content-center">
    <form method="post" action="comment.php" style="border: 1px solid#101010; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 class="row justify-content-center" style="color:#101010;">Enviar um comentário</h2><br><br><br>
        <div class="form-group">
            <textarea style="width:750px;" name="content" placeholder="Escreva seu comentário..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
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