<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>

  <div id="main">
    <div class="sidebar">
      <h2>Menu</h2>
      <ul>
        <li><a href="./">Kalkulator kredytowy</a></li>        
    </div>
    <div class="content">
      <h2>Witaj na mojej stronie</h2>
      <p>Tutaj policzysz koszt raty rocznej.</p>
      <div class="hr"></div>      
      
      <form action="<?php print(_APP_URL);?>/app/kredyt_calc.php" method="post" >
        <fieldset>
          <p class="form">
            <input type="text" name="kwota" placeholder="Kwota" value="<?php out($form['kwota']) ?>" /> <br>

            <input type="text" name="oproc" placeholder="Oprocentowanie" value="<?php out($form['oproc']) ?>"> <br>            
            
            <input type="text" name="okres" placeholder="Okres (co rok)"  value="<?php out($form['okres']) ?>" /> <br>
          </p>
      
          <p class="form_submit"><input type="submit" name="a4" id="a4" value="Wyślij"/></p>
        </fieldset>
      </form>      
      <div class="hr"></div>
        <?php

        if (isset($messages)) {
          if (! (empty ( $messages ))) {
            echo '<ul id=normal>';
            foreach ( $messages as $key => $msg ) {
              echo '<li>'.$msg.'</li>';
            }
            echo '</ul>';
          }        }
     

        if (isset($rata)){     
          echo '<ul id=normal><li> Rata wynosi: '.$rata . " złotych w skali roku </li></ul>";}
        ?>  

    </div>
    <div class="sidebar">
      <h2>Aktualności</h2>
      <p>Lorem ipsum dolor sit amet consectetuer semper at Suspendisse eros In. Lorem et Aenean fringilla ac cursus et id at lacus ipsum. Accumsan iaculis condimentum id interdum natoque in magna nisl eget Aenean. Pharetra quis tincidunt urna justo nulla convallis in pretium Mauris sagittis. Lobortis ut aliquet nisl facilisis sed sollicitudin faucibus morbi lorem sagittis. Malesuada interdum et tristique dui vitae purus aliquet rutrum tortor tellus. Nunc lacinia.</p>          
    </div>
  </div>
    
  <div class="clear"></div>
  
  <?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>