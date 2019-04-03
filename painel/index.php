<?php include('../config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Painel</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="header__painel">
    <h1>Painel de controle LEO LEARNING</h1>
  </header>  

  <?php
    if (isset($_POST['acao_slider'])) {
      $titulo_slider = $_POST['titulo_slider'];
      $descricao_slider = $_POST['descricao_slider'];
      $imagem_slider = $_FILES['imagem_slider'];
      $img = Utils::uploadFile($imagem_slider);
      $arr = ['titulo'=>$titulo_slider,'descricao'=>$descricao_slider,'img'=>$img,'nome_tabela'=>'tb_slides'];      
      Utils::insert($arr);
    }
  ?>

  <section class="adicionar__slider">
    <h2>Adicione slide no site principal</h2>
    <form method="post" enctype="multipart/form-data" class="adicionar__slider--form">
      <input type="text" placeholder="Título..." name="titulo_slider">
      <textarea placeholder="Descrição" name="descricao_slider"></textarea>
      <label>| IMAGEM DO SLIDER |</label>
      <input type="file" name="imagem_slider">
      <input type="submit" value="Salvar" name="acao_slider">
    </form>
  </section>

  <?php
    if (isset($_POST['acao_curso'])) {
      $titulo_curso = $_POST['titulo_curso'];
      $descricao_curso = $_POST['descricao_curso'];
      $imagem_curso = $_FILES['imagem_curso'];
      $img = Utils::uploadFile($imagem_curso);
      $arr = ['titulo'=>$titulo_curso,'descricao'=>$descricao_curso,'img'=>$img,'nome_tabela'=>'tb_courses'];      
      Utils::insert($arr);
    }
  ?>

  <section class="adicionar__curso">
      <h2>Adicione cursos no site principal</h2>
      <form method="post" enctype="multipart/form-data" class="adicionar__slider--form">
        <input type="text" placeholder="Título..." name="titulo_curso">
        <textarea placeholder="Descrição" name="descricao_curso"></textarea>
        <label>| IMAGEM DO CURSO |</label>
        <input type="file" name="imagem_curso">
        <input type="submit" value="Salvar" name="acao_curso">
      </form>
  </section>

</body>
</html>