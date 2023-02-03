<?php 
include ('./db/conexao.php');

$sqlRequest = ("SELECT * FROM anuncios WHERE 1");
$pesquisaAnuncios = $conexao->prepare($sqlRequest);
$pesquisaAnuncios->execute();

$sqlRequesImg = ("SELECT imoveis_img from anuncio_imagens WHERE Anuncios_anuncioID	= 1 ");




$sqlResquestImg = $conexao->prepare($sqlRequesImg);
$sqlResquestImg->execute();
?>

  

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/swiper.css" />
  </head>

  <body>
    <main class="container home-page">
      <h1 class="text-center"></h1>
      <div class="row gy-3">
        <div class="col-10 d-flex align-items-center">
          <div class="input-group">
            
            <input
            
              type="text"
              class="form-control search-input"
              aria-label="Dollar amount (with dot and two decimal places)"
              placeholder="O que  procura?"
            /> <span class="input-group-text search-input-left"><i class="fas fa-search"></i></span>
          </div>
  
        </div>
        
        <div class="col-2">
          <div class="dropdown d-flex">
            <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px">

            </a>
            <ul class="dropdown-menu user-profile-dropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="./db/logout.php">Sair</a></li>
            </ul>
          </div>
        </div>
        <!--inicio listagem-->
       
        
        <div class="card col-12 col-lg-3">
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="d-flex">
                    <i class="fa-regular fa-heart"></i> 
                    <?php while ($linha = $sqlResquestImg->fetch(PDO::FETCH_OBJ)) { ?>
                    <img
                  src="<?php echo $linha->imoveis_img; ?>"
                  class="card-img-top"
                  alt="..."
                />
                <?php
                  }
                ?>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="d-flex">
                    <i class="fa-regular fa-heart"></i>
                    <?php while ($linha = $sqlResquestImg->fetch(PDO::FETCH_OBJ)) { ?> 
                    <img
                  src="<?php echo $linha->imoveis_img; ?>""
                  class="card-img-top"
                  alt="..."
                />
                <?php
                  }
                ?>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="d-flex">
                    <i class="fa-regular fa-heart"></i> 
                    <?php while ($linha = $sqlResquestImg->fetch(PDO::FETCH_OBJ)) { ?>
                    <img
                  src="<?php echo $linha->imoveis_img; ?>"
                  class="card-img-top"
                  alt="..."
                />
                <?php
                  }
                ?>
                </div>
              </div>
            </div>
        
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->

            <!-- If we need scrollbar -->
          </div>
          <?php while ($linha = $pesquisaAnuncios->fetch(PDO::FETCH_OBJ)) { ?>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title my-1"><?php echo $linha->imoveisCidade; ?></h5>
              <div><i class="fas fa-star"></i>4,5</div>
            </div>
            <p class="card-text text-secondary">
            <?php echo $linha->imoveisBairro; ?>
            </p>
            <p class="card-text text-secondary">
              <span class="text-dark"><strong>R$</strong></span> <?php echo $linha->imoveisDiaria; ?>/Noite
            </p>
          </div>
        </div>
     
       
        <?php
        }
        ?>
    </main>
    <div class="tab d-lg-none d-flex">
      <i class="fas fa-search"></i>
      <i class="fas fa-heart"></i>
      <i class="fas fa-user"></i>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/swiper.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>