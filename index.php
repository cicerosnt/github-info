<? include_once('header.php'); ?>

<!-- The flexible grid (content) -->
<div class="row">
  <?include_once('aside.php'); ?>

  <div class="main">
    
    <?php
      $url = (isset($_GET['url'])) ? strip_tags(addslashes($_GET['url'])) : '';
      $parametros = explode('/', $url);
      
      $paginas = array('repositories','followers','all','exit');

      if(isset($arquivo) && $arquivo == ''){
        include "repositories.php";
      }elseif(isset($arquivo) && $arquivo == 'all'){
        include "repositories.php";
        include "followers.php";
      }elseif(isset($arquivo) && in_array($arquivo, $paginas)){
        include "$arquivo".'.php';
      }else{
        include "error.php";
      }
    ?>
      
    <br>

  </div>
</div>

<!-- Footer -->
<?include_once('footer.php'); ?>
