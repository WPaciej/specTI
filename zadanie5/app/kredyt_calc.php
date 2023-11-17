<?php

require_once dirname(__FILE__).'/../config.php';
//Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

try {
		
// 1. pobranie parametrów

function odebranieParam(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['oproc'] = isset($_REQUEST['oproc']) ? $_REQUEST['oproc'] : null;
	$form['okres'] = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function walidacja(&$form,&$infos,&$msgs){

	if ( ! (isset($form['kwota']) || isset($form['okres']) || isset($form['oproc']))) {
		return false;}

	$infos[] = "Przekazano parametry.";

	if ( $form['kwota'] == "") {
		$msgs [] = 'Nie podano Kwoty';
	}

	if ( $form['oproc'] == "") {
		$msgs [] = 'Nie podano oprocentowania';
	}

	if ( $form['okres'] == "") {
		$msgs [] = 'Nie podano Czasu';
	}

	if ( !(empty( $msgs ))) return false;
		
		if (! is_numeric( $form['kwota'] )) {
			$msgs [] = 'Kwota wartość nie jest liczbą';
		}		
		
		if (! is_numeric( $form['oproc'] )) {
			$msgs [] = 'Oprocentowanie nie jest liczbą';
		}
		
		if (! is_numeric( $form['okres'] )) {
			$msgs [] = 'Długość okresu nie jest liczbą';
		}


		if ( !(empty( $msgs ))) return false;
		else return true;
	
}

// 3. wykonaj zadanie jeśli wszystko w porządku

function obliczanie(&$form,&$msgs,&$rata){
	
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
$infos = array();
$messages = array();
$rata = null;

//wykonanie funkcji
odebranieParam($form);
	if (walidacja($form,$infos,$messages,)){
		obliczanie($form,$messages,$rata);
	}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy- WP');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('rata',$rata);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'\app\kal_2.html');


} catch (Exception $e) {
	echo "Coś poszło nie tak: " . $e->getMessage() . "</br>";
}
