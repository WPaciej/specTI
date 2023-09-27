<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<style>
	*{
		background-color:#6EA7DF;
	}

	div{
		left:50%;
		float:left;
	}
    .centrowany-div {
        text-align: center;

		}

		input[type=submit]{
			padding-top: 3px;
			border-radius: 15px;
			color:red;
		}

</style>


<div class="centrowany-div">
<table>

<form action="<?php print(_APP_URL);?>/app/kredyt_calc.php" method="post">
	<tr>
	<td> <label for="id_x">Kwota: </label> </td>
	<td> <input id="id_x" type="text" name="x" value="<?php isset($x)?print($x):""; ?>" /> </td>
	</tr>
	<tr>
	<td> <label for="id_op">Oprocentowanie : </label> </td>
	<td> <input id="id_x" type="text" name="op" value="<?php isset($oproc)?print($oproc*100):""; ?>"> </td>
	</tr>
	<tr>
	<td> <label for="id_y">Okres (co rok): </label> </td>
	<td> <input id="id_y" type="text" name="y" value="<?php isset($y)?print($y):""; ?>" /> </td>
	</tr>

	<tr><td colspan="2">
	<input type="submit" value="Oblicz" />
	</td></tr>
</form>	

</table>

<?php

	if (isset($messages)) {
		if (! (empty ( $messages ))) {
			echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
			foreach ( $messages as $key => $msg ) {
				echo '<li>'.$msg.'</li>';
			}
			echo '</ol>';
		}
	}
?>

<?php if (isset($rata)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Rata wynosi: '.$rata . " złotych w skali roku"; ?>
</div>
<?php } ?>

<br>
*Oprocentowanie liczmy w skali roku.

</div>

</body>
</html>