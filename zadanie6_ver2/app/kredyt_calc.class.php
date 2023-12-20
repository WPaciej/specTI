<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

include $conf->root_path.'/app/security/check.php';

class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->oproc = isset($_REQUEST ['oproc']) ? $_REQUEST ['oproc'] : null;
		$this->form->okres = isset($_REQUEST ['okres']) ? $_REQUEST ['okres'] : null;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->oproc ) && isset ( $this->form->okres ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->oproc == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		if ($this->form->okres == "") {
			$this->msgs->addError('Nie podano czasu');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $kwota i $oproc są liczbami całkowitymi
			if (! is_numeric ( $this->form->kwota )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->oproc )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->okres )) {
				$this->msgs->addError('Czas nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na float
			$this->form->kwota = floatval($this->form->kwota);
			$this->form->oproc = floatval($this->form->oproc);
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji

			global $role;

			switch ($this->form->kwota) {
				case $this->form->kwota > 2000000;
					if ($role == 'admin') {
						$this->result->result = ($this->form->okres * $this->form->oproc*$this->form->kwota + $this->form->kwota) / $this->form->okres;
						$this->result->result = round($this->result->result,2);
					}else {
						$this->result->result = 'Tylko administrator może obliczać ratę dla kwot wyższych niż dwa miliony!';
					}
					break;
				
				default:
					$this->result->result = ($this->form->okres * $this->form->oproc*$this->form->kwota + $this->form->kwota) / $this->form->okres;
					$this->result->result = round($this->result->result,2);
					break;
			}
			$this->form->oproc = $this->form->oproc*100;
			
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy- WP');
				
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/kal_2.html');
	}
}
