<? include_once('header.php'); ?>

<!-- The flexible grid (content) -->
<div class="row">
  <?include_once('aside.php'); ?>

  <div class="main">
    
    <?php
      $url = (isset($_GET['url'])) ? strip_tags(addslashes($_GET['url'])) : '';
      $params = explode('/', $url);
      $ispage = $params[0];
      
      $pages = array('repositories','followers','all','exit');

      if(isset($ispage) && $ispage == ''){
        include "repositories.php";
      }elseif(isset($ispage) && $ispage == 'all'){
        include "repositories.php";
        include "followers.php";
      }elseif(isset($ispage) && in_array($ispage, $pages)){
        include "$ispage".'.php';
      }else{
        include "error.php";
      }
    ?>
      
    <br>

  </div>
</div>

<!-- Footer -->
<?include_once('footer.php'); ?>
