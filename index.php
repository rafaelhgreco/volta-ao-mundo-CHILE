<?php
require_once 'functions.php';

$comments = get_approved_comments();


// Set the locale to Brazilian Portuguese
setlocale(LC_TIME, 'pt_BR.UTF-8');

// Get the approved comments
$comments = get_approved_comments();

function format_date_pt_br($date) {
    $datetime = new DateTime($date);
    return strftime('%d de %B de %Y às %H:%M:%S', $datetime->getTimestamp());
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chile: Turismo, Cultura e Gastronomia</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css.css">
</head>
<body>
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a style="color:red" class="navbar-brand" href="index.php"><img style="width: 35px;margin-bottom: 4px;" src="img/cl.jpg"><label style="margin-left: 10px;">Chile</label></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#turismo">Turismo</a></li>
          <li class="nav-item"><a class="nav-link" href="#cultura">Cultura</a></li>
          <li class="nav-item"><a class="nav-link" href="#gastronomia">Gastronomia</a></li>
          <li class="nav-item"><a class="nav-link" href="#comentarios">Comentários</a></li>
          <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="loginUser.php">Login</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100" src="img/turismo/local1.jpg" alt="Turismo no Chile">
    <div class="carousel-caption d-none d-md-block">
      <h5 class="highlight-text">Turismo no Chile</h5>
    </div>
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="img/cultura/evento1.jpg" alt="Cultura Chilena">
    <div class="carousel-caption d-none d-md-block">
      <h5 class="highlight-text">Cultura Chilena</h5>
    </div>
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="img/gastronomia/prato1.jpg" alt="Gastronomia Chilena">
    <div class="carousel-caption d-none d-md-block">
      <h5 class="highlight-text">Gastronomia Chilena</h5>
    </div>
  </div>
</div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <main class="container mt-5">
    <section id="turismo">
      <h2>Turismo</h2>
      <div class="row">
        <div class="col-md-4">
          <img src="img/turismo/local1.jpg" class="img-fluid" alt="Local turístico 1">
          <h3>Parque Nacional Lauca</h3>
          <p>Situado no norte do Chile, oferece paisagens marcadas por vulcões, lagos de alta altitude e uma rica fauna andina.</p>
        </div>
        <div class="col-md-4">
          <img src="img/turismo/local2.jpg" class="img-fluid" alt="Local turístico 2">
          <h3>Santiago</h3>
          <p>A capital chilena é um hub de cultura, gastronomia e história, com uma mistura vibrante de modernidade e tradições.</p>
        </div>
        <div class="container">
          <a href="turismo.html" class="btn btn-primary">Saiba mais sobre o turismo</a>
        </div>
        <!-- Adicione mais locais turísticos conforme necessário -->
      </div>
    </section>

    <section id="cultura" class="mt-5">
      <h2>Cultura</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="img/cultura/evento1.jpg" class="img-fluid" alt="Evento cultural 1">
          <h3>Cueca</h3>
          <p>A dança nacional do Chile, marcada por um ritmo animado e lenços que são habilmente manejados pelos dançarinos.</p>
        </div>
        <div class="col-md-6">
          <img src="img/cultura/evento2.jpg" class="img-fluid" alt="Evento cultural 2">
          <h3>Música Folclórica</h3>
          <p>Grupos como Inti-Illimani e Illapu têm popularizado a música folclórica chilena, combinando instrumentos tradicionais com questões sociais em suas letras.</p>
        </div>
        <div class="container">
          <a href="cultura.html" class="btn btn-primary">Saiba mais sobre a cultura</a>
        </div>
        <!-- Adicione mais eventos culturais conforme necessário -->
      </div>
    </section>

    <section id="gastronomia" class="mt-5">
      <h2>Gastronomia</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="img/gastronomia/prato1.jpg" class="img-fluid" alt="Prato típico 1">
          <h3>Mote con Huesillo</h3>
          <p>Uma bebida refrescante e sobremesa feita de trigo cozido e pêssegos secos reidratados em uma calda doce.</p>
        </div>
        <div class="col-md-6">
          <img src="img/gastronomia/prato2.jpg" class="img-fluid" alt="Prato típico 2">
          <h3>Alfajores</h3>
          <p>Biscoitos amanteigados recheados com doce de leite e frequentemente cobertos com chocolate ou coco ralado.</p>
        </div>
        <div class="container">
          <a href="gastronomia.html" class="btn btn-primary">Saiba mais sobre a gastronomia</a>
        </div>
        <!-- Adicione mais pratos típicos conforme necessário -->
      </div>
    </section>

    <section id="comentarios" class="mt-5">
      <h2>Comentários</h2>
      <br>
      <div class="row">
        <div class="col-md-6">
          <ul>
              <?php foreach ($comments as $comment): ?>
                  <li>
                      <p><?php echo htmlspecialchars($comment['content']); ?></p>
                      <small>Postado em <?php echo format_date_pt_br($comment['created_at']); ?></small>
                      <br><br><br>
                  </li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>


    

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
  <script>
    $(document).ready(function(){
      $('a.nav-link').on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
        }
      });
    });
    window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    const sticky = header.offsetTop;

    if (window.pageYOffset > sticky) {
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }
});
  </script>
</body>
</html>
