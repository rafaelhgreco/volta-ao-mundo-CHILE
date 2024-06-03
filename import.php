<?php
require_once 'functions.php';
session_start();

// Implement a simple admin check
if ($_SESSION['user_id'] != 1) {
    die('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['json_file'])) {
    $json_data = file_get_contents($_FILES['json_file']['tmp_name']);
    $comments = json_decode($json_data, true);

    foreach ($comments as $comment) {
        // Ensure 'user_id' and 'content' keys exist and are not empty
        if (isset($comment['user_id'], $comment['content']) && !empty($comment['user_id']) && !empty($comment['content'])) {
            post_comment($comment['user_id'], $comment['content']);
        } else {
            echo "Error: Invalid comment data.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Importar JSON</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a style="color:red" class="navbar-brand" href="admin.php"><img style="width: 35px; margin-bottom: 4px;" src="img/cl.jpg"><label style="margin-left: 10px;">Chile</label></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link btn btn-secondary text-white" href="admin.php">Voltar</a></li>
          <li>ㅤ</li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="container mt-5">
        <form method="post" enctype="multipart/form-data" action="import.php" style="border: 1px solid#101010; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <input type="file" name="json_file" accept="application/json" required>
            <button class="btn btn-primary" type="submit">Importar arquivo</button>
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


