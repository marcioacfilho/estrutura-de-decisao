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
    $servidor_bd = "127.0.0.1";
    $usuario_bd = "root";
    $senha_bd = "";
    $banco_de_dados = "delivery_jogos_novo";

    $conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

    $sql_buscar = "select * from jogo";

    $todos_os_jogos = mysqli_query($conexao, $sql_buscar);

    while($um_jogo = mysqli_fetch_assoc($todos_os_jogos)):
      ?>
      
      <div class="col-md-3 text-center mb-4">
        <img src="<?php echo $um_jogo["foto"];?>" class="img-fluid" style="object-fit: cover; height: 150px; width: 100%; object-position: top center;">
        <h6 class="mt-3 mb-3" style="color:<?php echo $cor;?>"><?php echo $um_jogo["categoria"];?></h6>
        <?php
        $cor = "";
        if (strtoupper($um_jogo["categoria"]) == "JOGO DE FPS"){
          $cor = "red";
        }
        else if (strtoupper($um_jogo["categoria"]) == "JOGO DE LUTA"){
          $cor = "orange";
        }
        else if (strtoupper($um_jogo["categoria"]) == "JOGO DE HISTORIA"){
          $cor = "green";
        }
        ?>
        <h5 class="mt-3 mb-3"><?php echo $um_jogo["titulo"];?></h5>
        <a href="<?php echo $um_jogo["video"];?>" class="btn btn-outline-primary">VER MAIS</a>
      </div>
      <?php
      endwhile;
      mysqli_close($conexao);
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