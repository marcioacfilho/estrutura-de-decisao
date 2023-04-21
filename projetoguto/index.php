<?php
include "cabecalho.php";
include "menu.php";
?>

<div class="banner container-fluid bnner">
  <div id="carouselExample" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner01.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner03.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner05.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 text-center">
      <h1>Jogos em destaque</h1>
    </div>
    <div class="col-12 text-center">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem omnis dolorum voluptates ea consequatur magnam, labore voluptas repellat quidem voluptatem, mollitia eaque aut iure nesciunt, at architecto distinctio. Error, consequuntur?</p>
    </div>
  </div>
  <div class="row">
    <!-- <div class="col-3 text-center">
      <img src="img/jogo04.jpg" class="img-fluid">
      <h3>Nome do jogo</h3>
      <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
    </div>

    <div class="col-3 text-center">
      <img src="img/jogo12.jpg" class="img-fluid">
      <h3>Nome do jogo</h3>
      <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
    </div>

    <div class="col-3 text-center">
      <img src="img/jogo15.jpg" class="img-fluid">
      <h3>Nome do jogo</h3>
      <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
    </div>  -->

    <?php
    for ($i = 0; $i < 8; $i++) :
    ?>

      <div class="col-md-3 text-center mb-4">
        <img src="img/jogo17.jpg" class="img-fluid">
        <h3>Nome do jogo</h3>
        <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
      </div>

    <?php
    endfor;
    ?>
  </div>
  <div class="row mt-5">
    <div class="col-12 text-center">
      <h2>Entre em contato</h2>
    </div>
    <div class="col-12">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus doloremque dicta neque voluptate tempore quidem, eveniet et nihil nisi quasi repellendus, obcaecati impedit sit deserunt illo maxime omnis inventore molestiae?</p>
    </div>
  </div>
  <div class="row">
    <form action="inserir-contato.php" method="post">
      <div class="col">
        <div class="mb-2">
          <input type="text" class="form-control" nome="nome" placeholder="Nome">
        </div>
        <div class="mb-2">
          <input type="tel" class="form-control" nome="telefone" placeholder="Telefone">
        </div>
        <div class="mb-2">
          <textarea class="form-control" name="duvida" placeholder="Dúvida" rows="4"></textarea>
        </div>
        <div class="mb-2 text-center">
          <button type="submit" class="btn btn-success w-25">ENVIAR</button>
        </div>
      </div>
    </form>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>