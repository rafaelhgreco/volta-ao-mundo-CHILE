<?php
require_once 'functions.php';
session_start();

// Simple admin check
if ($_SESSION['user_id'] != 1) {
    die('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment_id = $_POST['comment_id'];
    if (isset($_POST['approve'])) {
        $approve = $_POST['approve'] == 'true' ? true : false;
        approve_comment($comment_id, $approve);
    } elseif (isset($_POST['hide'])) {
        $hide = $_POST['hide'] == 'true' ? true : false;
        hide_comment($comment_id, $hide);
    }
}

$comments = get_unapproved_visible_comments();
$approved_comments = get_approved_comments();
$hidden_comments = get_hidden_comments();
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
        <a style="color:red" class="navbar-brand" href="index.php"><img style="width: 35px; margin-bottom: 4px;" src="img/cl.jpg"><label style="margin-left: 10px;">Chile</label></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="import.php">Enviar arquivo JSON</a></li>
          <li>ㅤ</li>
          <li class="nav-item"><a class="nav-link btn btn-secondary text-white" href="index.php">Voltar ao Início</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="container mt-5">
    
    <div class="row justify-content-left"> 
    <div class="container mt-5">
        <table border="1" cellpadding="10">
          <h2>Comentários recebidos</h2>
            <thead>
                <tr>
                    <th>Comentário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as $comment): ?>
                <tr>
                    <td><?php echo htmlspecialchars($comment['content']); ?></td>
                    <td>
                        <form method="post" action="admin.php">
                            <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
                            <button type="submit" name="approve" value="true">Postar</button>
                            <button type="submit" name="hide" value="true">Rejeitar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table><br>
      </div>    

      <div class="container mt-5">
        <table border="1" cellpadding="10">
          <h2>Comentários publicados</h2>
            <thead>
                <tr>
                    <th>Comentário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($approved_comments as $comment): ?>
                <tr>
                    <td><?php echo htmlspecialchars($comment['content']); ?></td>
                    <td>
                        <form method="post" action="admin.php">
                            <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
                            <button type="submit" name="hide" value="true">Remover</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table><br>
      </div>    
    
      <div class="container mt-5">           
      <table border="1" cellpadding="10">
        <h2>Comentários rejeitados</h2>
          <thead>
              <tr>
                  <th>Comentário</th>
                  <th>Ações</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($hidden_comments as $comment): ?>
                <tr>
                    <td><?php echo htmlspecialchars($comment['content']); ?></td>
                    <td>
                        <form method="post" action="admin.php">
                            <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
                            <button type="submit" name="hide" value="false">Postar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
      </table><br><br>
      


      </div>
    </div>  
    

  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>