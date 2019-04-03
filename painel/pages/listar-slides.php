<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listar slides</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    if(isset($_GET['excluir'])){		
      $id = $_GET['excluir'];	
      Utils::deletar('tb_slides',$id);
      Utils::redirect(INCLUDE_PATH_PAINEL.'listar-slides');
    }
		
  ?>
  <section class="flexHorizontalVertical flexColumn listar__cursos">
    <h2>Exclua os slides não desejados.</h2>
    <div class="listar__cursos--wrapper">
      <?php
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_slides`");
        $sql->execute();
        $slides= $sql->fetchAll();
        foreach ($slides as $key => $value) {         
      ?>
      <div class="listar__cursos--single flexSpaceBetween flexVertical">
        <p><?php echo $value['titulo']; ?></p>  
        <div class="listar__cursos--actions">          
          <a href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides?excluir=<?php echo $value['id'] ?>">Excluir</a> 
        </div>            
      </div>
      <?php
      }
      ?>
    </div>
  </section>
</body>
</html>