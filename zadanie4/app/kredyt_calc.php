<?php

require_once dirname(__FILE__).'/../config.php';

try {
	
// 1. pobranie parametrów

function odebranieParam(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['oproc'] = isset($_REQUEST['oproc']) ? $_REQUEST['oproc'] : null;
	$form['okres'] = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function walidacja(&$form,&$messages){

	if ( ! (isset($form['kwota']) || isset($form['okres']) || isset($form['oproc']))) {
		return false;
	}

	if ( $form['kwota'] == "") {
		$messages [] = 'Nie podano Kwoty';
	}

	if ( $form['oproc'] == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	if ( $form['okres'] == "") {
		$messages [] = 'Nie podano Czasu';
	}

	if ( !(empty( $messages ))) return false;
		
		if (! is_numeric( $form['kwota'] )) {
			$messages [] = 'Kwota wartość nie jest liczbą';
		}
		
		if (! is_numeric( $form['okres'] )) {
			$messages [] = 'Długość okresu nie jest liczbą';
		}

		if (! is_numeric( $form['oproc'] )) {
			$messages [] = 'Oprocentowanie nie jest liczbą';
		}


		if ( !(empty( $messages ))) return false;
		else return true;
	
}

// 3. wykonaj zadanie jeśli wszystko w porządku

function obliczanie(&$form,&$messages,&$rata){
	
	//konwersja parametrów na float
	$form['kwota'] = floatval($form['kwota']);
	$form['okres'] = floatval($form['okres']);
	$form['oproc'] = floatval($form['oproc']);
	$form['oproc'] = $form['oproc']/100;	
	
	$rata = ($form['okres'] * $form['oproc']*$form['kwota'] + $form['kwota']) / $form['okres'];
	$rata = round($rata,2);	

	$form['oproc'] = $form['oproc']*100;
}

//definowanie zmiennych
$form = null;
$rata = null;
$messages = array();

//wykonanie funkcji
odebranieParam($form);
	if (walidacja($form,$messages)){
		obliczanie($form,$messages,$rata);
	}

//Wywołanie widoku, wcześniej ustalenie zawartości zmiennych elementów szablonu
$page_title = 'Zadanie 4';
$page_footer = '<p>Copyright &copy; 2012; Projekt: SzablonyStron.org - <a href="http://szablonystron.org">darmowe szablony stron</a>, Uniwersalne <a href="https://redrewno.pl/pl,produkty,9">podajniki do kart</a> jedno i wielo-komorowe.</p>';


// 4. Wywołanie widoku z przekazaniem zmiennych
include 'kal_2.php';



} catch (Exception $e) {
	echo "Coś poszło nie tak: " . $e->getMessage() . "</br>";
}
