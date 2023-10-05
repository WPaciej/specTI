<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>Kalkulator</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	<body>

		<div style="width:90%; margin: 2em auto;">

		<form action="<?php print(_APP_URL);?>/app/kredyt_calc.php" method="post" class="pure-form pure-form-stacked">
			<fieldset>
			<label for="id_x">Kwota: </label>
			<input id="id_x" type="text" name="kwota" value="<?php out($kwota) ?>" />

			<label for="id_op">Oprocentowanie : </label>
			<input id="id_op" type="text" name="oproc" value="<?php out($oproc) ?>">
			
			<label for="id_y">Okres (co rok): </label>
			<input id="id_y" type="text" name="okres" value="<?php out($okres) ?>" />
			</fieldset>

			<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
		</form>	



		<?php

			if (isset($messages)) {
				if (! (empty ( $messages ))) {
					echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
					foreach ( $messages as $key => $msg ) {
						echo '<li>'.$msg.'</li>';
					}
					echo '</ol>';
				}
			}
		?>

		<?php if (isset($rata)){ ?>
		<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
		<?php echo 'Rata wynosi: '.$rata . " złotych w skali roku"; ?>
		</div>
		<?php } ?>

		<br>
		*Oprocentowanie liczmy w skali roku.

		</div>

	</body>
</html>