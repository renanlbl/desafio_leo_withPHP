<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Desafio LEO</title>
  <link rel="stylesheet" href="src/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="header__wrapper flexVertical flexSpaceBetween">
        <a class="header__logo" target="_blank" href="https://leolearning.com/"></a>
        <div class="header__hamburguer">
          <i class="fas fa-bars"></i>
          <nav class="nav__mobile">
            <ul>
              <li><a href="<?php echo INCLUDE_PATH_PAINEL ?>">PAINEL DE CONTROLE</a></li>
              <li><a href='#'>LINK 2</a></li>
              <li><a href='#'>LINK 3</a></li>
              <li><a href='#'>LINK 4</a></li>
              <li><a href='#'>LINK 5</a></li>
              <li><a href='#'>LINK 6</a></li>
              <li><a href='#'>LINK 7</a></li>
            </ul>
          </nav>
        </div>
        <div class="header__wrapper--right flexVertical">
          <div class="input__wrapper flexVertical">
            <input type="search" placeholder="Pesquisar cursos...">
            <i class="fas fa-search"></i>
          </div>
          <div class="separator"></div>
          <div class="account__wrapper flexVertical">
            <div class="account__user flexHorizontalVertical"><i class="fas fa-user"></i></div>
            <div class="account__userInfo">
              <span>Seja bem-vindo</span>
              <p>John Doe</p>
            </div>
            <div class="account__openUser">
              <i class="fas fa-chevron-down"></i>
              <nav class="account__nav">
                <ul>
                  <li><a href="<?php echo INCLUDE_PATH_PAINEL ?>">PAINEL DE CONTROLE</a></li>
                  <li><a href="#">Menu 2</a></li>
                  <li><a href="#">Menu 3</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="modal flexHorizontalVertical">
    <div class="modal__wrapper">
      <div class="modal__close flexHorizontalVertical"><i class="fas fa-times"></i></div>
      <div class="modal__img"></div>
      <h2>egestas tortor vulputate</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae molestias rerum iste quaer.</p>
      <a class="flexHorizontalVertical" href="#">inscreva-se</a>
    </div>
  </section>

  <section class="slider flexVertical">
    <div class="slider__arrowLeft"><i class="fas fa-chevron-left"></i></div>
    <div class="slider__arrowRight"><i class="fas fa-chevron-right"></i></div>
    <div class="slider__imgs flexVertical" style="background-image: url('src/assets/banner1.jpg')">
      <div class="container">
        <div class="slider__info--wrapper flexVertical">
          <div class="slider__info">
            <h2>LOREM IPSUM 0</h2>
            <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis ipsum, quia at aliquam animi provident, architecto accusamus, 
            laborum sit consequuntur laboriosam ipsam voluptates voluptatibus? Voluptas fuga explicabo deserunt mollitia provident!
            </p>
            <a class="flexHorizontalVertical" href=#>Ver curso</a>
          </div>
        </div>
      </div>
    </div>
    <?php 
      $sql = MySql::conectar()->prepare("SELECT * FROM `tb_slides`");
      $sql->execute();
      $slides = $sql->fetchAll();
      foreach ($slides as $key => $value) {       
    ?>
    <div class="slider__imgs flexVertical" style="background-image: url('painel/uploads/<?php echo $value['img'] ?>')">
      <div class="container">
        <div class="slider__info--wrapper flexVertical">
          <div class="slider__info">
            <h2><?php echo $value['titulo'] ?></h2>
            <p>
              <?php echo $value['descricao'] ?>
            </p>
            <a class="flexHorizontalVertical" href=#>Ver curso</a>
          </div>
        </div>
      </div>
    </div>
    <?php
      }
    ?>    
    <div class="slider__dots--wrapper flexVertical flexSpaceAround"></div>
    
  </section>

  <section class="courses">
    <div class="form__courses">      
      <form id="form__courses--add" method="POST">
        <input type="text" placeholder="Título" name="titulo" />
        <textarea name="descricao" placeholder="Descrição"></textarea>
        <label>| Capa do curso |</label>
        <input name="photo" type="file" />
        <div class="form__courses--buttons flex">
          <button id="button__courses--submit" type="submit">Salvar</button>
          <div class="form__close flexHorizontalVertical">Cancelar</div>
        </div>        
      </form>
    </div>
    <div class="container">
      <h2>meus cursos</h2>
      <div class="courses__list flex">
        <?php 
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_courses`");
        $sql->execute();
        $courses = $sql->fetchAll();
        foreach ($courses as $key => $value) {       
      ?>
        <div class="courses__card">
          <div>
            <img src="painel/uploads/<?php echo $value['img'] ?>" />
          </div>
          <div class="courses__card--description">
            <h4><?php echo $value['titulo'] ?></h4>
            <p><?php echo $value['descricao'] ?></p>
          </div>
          <a class="courses__button flexHorizontalVertical" href="#">ver curso</a>
        </div> 
      <?php
        }
      ?>
        <div class="courses__card">
          <img src="src/assets/course.jpg" />
          <div class="courses__card--description">
            <h4>pellentesque malesuada</h4>
            <p>Lorem, ipsum dolor sit amet pallentesque malesuada, a phareta augue</p>
          </div>
          <a class="courses__button flexHorizontalVertical" href="#">ver curso</a>
        </div>        
        <div class="courses__card">
          <img src="src/assets/course.jpg" />
          <div class="courses__card--description">
            <h4>pellentesque malesuada</h4>
            <p>Lorem, ipsum dolor sit amet pallentesque malesuada, a phareta augue</p>
          </div>
          <a class="courses__button flexHorizontalVertical" href="#">ver curso</a>
        </div>        
        <a href="<?php echo INCLUDE_PATH_PAINEL ?>" class="courses__add flexHorizontalVertical flexColumn">
            <i class="far fa-calendar-plus"></i>
            <p>adicionar <br/> curso</p>            
        </a>        
      </div>
    </div>
  </section>

  <footer>    
      <div class="footer__contact">
        <div class="container">
          <div class="footer__about--wrapper flexVertical flexSpaceBetween">
            <div class="footer__about">
              <img src="src/assets/logo__footer.png" />
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="footer__contact--right flexVertical">
              <div class="footer__telephone">
                <h5>// contato</h5>
                <p>(21) 99999-9999</p>
                <p>contato@leolearning.com</p>
              </div>
              <div class="footer__social">
                <h5>// redes sociais</h5>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-pinterest"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="container">
          <p>Copyright 2017 - All right reserved</p>
        </div>
      </div>      
  </footer>


<script src="src/js/slider.js"></script>
<script src="src/js/modal.js"></script>
<script src="src/js/menu-hamburguer.js"></script>
</body>
</html>