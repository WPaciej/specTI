<?php

require_once dirname(__FILE__).'/../config.php';

try {
        
// 1. pobranie parametrów

function odebranieParam(&$kwota,&$oproc,&$okres){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$oproc = isset($_REQUEST['oproc']) ? $_REQUEST['oproc'] : null;
	$okres = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function walidacja(&$kwota,&$oproc,&$okres,&$messages){

	if ( ! (isset($kwota) || isset($okres) || isset($oproc))) {
		return false;
	}

	if ( $kwota == "") {
		$messages [] = 'Nie podano Kwoty';
	}

	if ( $oproc == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	if ( $okres == "") {
		$messages [] = 'Nie podano Czasu';
	}

	if ( !(empty( $messages ))) return false;
		
		if (! is_numeric( $kwota )) {
			$messages [] = 'Kwota wartość nie jest liczbą';
		}
		
		if (! is_numeric( $okres )) {
			$messages [] = 'Długość okresu nie jest liczbą';
		}

		if (! is_numeric( $oproc )) {
			$messages [] = 'Oprocentowanie nie jest liczbą';
		}


		if ( !(empty( $messages ))) return false;
		else return true;
	
}

// 3. wykonaj zadanie jeśli wszystko w porządku

function obliczanie(&$kwota,&$oproc,&$okres,&$messages,&$rata){
	
	//konwersja parametrów na float
	$kwota = floatval($kwota);
	$okres = floatval($okres);
	$oproc = floatval($oproc);
	$oproc = $oproc/100;

	$rata = ($okres * $oproc*$kwota + $kwota) / $okres;
	$rata = round($rata,2);

	$oproc = $oproc*100;
}

//definowanie zmiennych
$kwota = null;
$okres= null;
$oproc = null;
$rata = null;
$messages = array();

//wykonanie funkcji
odebranieParam($kwota,$oproc,$okres);
	if (walidacja($kwota,$oproc,$okres,$messages)){
		obliczanie($kwota,$oproc,$okres,$messages,$rata);
	}

// 4. Wywołanie widoku z przekazaniem zmiennych
include 'kredyt_calc_view.php';



} catch (Exception $e) {
	echo "Coś poszło nie tak: " . $e->getMessage() . "</br>";
}