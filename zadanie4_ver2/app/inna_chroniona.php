<?php
require_once dirname(__FILE__).'/../config.php';
//ochrona widoku
include _ROOT_PATH.'/app/security/check.php';
?>
<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top_m.php';
?>

  <div id="main">
    <div class="sidebar">
      <h2>Menu</h2>
      <ul>
        <li><a href="./">Kalkulator kredytowy</a></li>        
    </div>
    <div class="content">
      <h2>Strona w budowie</h2>
      <div class="hr"></div>  
			<p>Strona w budowie</p>
    </div>
    <div class="sidebar">
      <h2>Aktualności</h2>
      <p>Lorem ipsum dolor sit amet consectetuer semper at Suspendisse eros In. Lorem et Aenean fringilla ac cursus et id at lacus ipsum. Accumsan iaculis condimentum id interdum natoque in magna nisl eget Aenean. Pharetra quis tincidunt urna justo nulla convallis in pretium Mauris sagittis. Lobortis ut aliquet nisl facilisis sed sollicitudin faucibus morbi lorem sagittis. Malesuada interdum et tristique dui vitae purus aliquet rutrum tortor tellus. Nunc lacinia.</p>          
    </div>
  </div>
    
  <div class="clear"></div>
  
  <?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom_m.php';
?>