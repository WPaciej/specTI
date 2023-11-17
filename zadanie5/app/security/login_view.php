<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top_z.php';
?>

<div id="main">
    <div class="content">
      <h2>Logowanie</h2>
      <div class="hr"></div>      
      
      <form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
        <fieldset>
          <p class="form">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" /> <br>
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass"/>
			<p class="form_submit"><input type="submit" name="a4" id="a4" value="Zaloguj"/></p>
		</fieldset>
      </form>      
      <div class="hr"></div>
        <?php

        //wyświeltenie listy błędów, jeśli istnieją
			if (isset($messages)) {
				if (count ( $messages ) > 0) {
					echo '<ul>';
					foreach ( $messages as $key => $msg ) {
						echo '<li>'.$msg.'</li>';
					}
					echo '</ul>';
				}
			}
		?>

    </div>
    <div class="sidebar">
      <h2>Aktualności</h2>
      <p>Lorem ipsum dolor sit amet consectetuer semper at Suspendisse eros In. Lorem et Aenean fringilla ac cursus et id at lacus ipsum. Accumsan iaculis condimentum id interdum natoque in magna nisl eget Aenean. Pharetra quis tincidunt urna justo nulla convallis in pretium Mauris sagittis. Lobortis ut aliquet nisl facilisis sed sollicitudin faucibus morbi lorem sagittis. Malesuada interdum et tristique dui vitae purus aliquet rutrum tortor tellus. Nunc lacinia.</p>          
    </div>
  </div>
    
  <div class="clear"></div>


<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom_z.php';
?>