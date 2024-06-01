<?php
require_once 'functions.php';
session_start();

// Implement a simple admin check
if ($_SESSION['user_id'] != 1) {
    die('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment_id = $_POST['comment_id'];
    $approve = $_POST['approve'] == 'true' ? true : false;
    approve_comment($comment_id, $approve);
}

$comments = get_comments(false);
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área adminstrativa</title>
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
    <h2>Comentários recebidos</h2>
    <div class="row justify-content-center"> 
        
        <div>
            <ul>
                <?php foreach ($comments as $comment): ?>
                    <li>
                        <?php echo htmlspecialchars($comment['content']); ?>
                        <form method="post" action="admin.php">
                            <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
                            <button type="submit" name="approve" value="true">Aprovar</button>
                            <button type="submit" name="approve" value="false">Rejeitar</button>
                        </form>
                    </li>
                <?php endforeach; ?>
                
            </ul>
            <button class="btn btn-primary"><a class="nav-link btn btn-primary text-white" href="import.php">Enviar arquivo JSON</a></button>  
        </div>
        <br>
        <div>
                        
        </div>
        
    </div>  
    

  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>