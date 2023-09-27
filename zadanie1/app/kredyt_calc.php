<?php

require_once dirname(__FILE__).'/../config.php';

try {
        
// 1. pobranie parametrów

$x = $_REQUEST['x'];
$oproc = $_REQUEST['op'];
$y = $_REQUEST['y'];


// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

if ( ! (isset($x) || isset($y) || isset($oproc))) {

	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $x == "") {
	$messages [] = 'Nie podano Kwoty';
}

if ( $oproc == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if ( $y == "") {
	$messages [] = 'Nie podano Czasu';
}

if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Kwota wartość nie jest liczbą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Długość okresu nie jest liczbą';
	}

	if (! is_numeric( $oproc )) {
		$messages [] = 'Oprocentowanie nie jest liczbą';
	}

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$x = floatval($x);
	$y = floatval($y);
	$oproc = floatval($oproc);
	$oproc = $oproc/100;

	$rata = $y * $oproc*$x + $x;
}

// 4. Wywołanie widoku z przekazaniem zmiennych
include 'kredyt_calc_view.php';

} catch (Exception $e) {
	echo "Coś poszło nie tak: " . $e->getMessage() . "</br>";
}