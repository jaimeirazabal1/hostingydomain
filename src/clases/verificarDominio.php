<?php 
require_once getcwd()."/src/Phois/Whois/Whois.php";

Class verificarDominio extends Whois{

	public $extensiones_genericas = array('com','net','org','info','biz','aero','museum','pro','travel','tel','mobi','jobs','coop','cat','asia','name','edu','gov','int','mil'); 

	public function __construct($sld){

		parent::__construct($sld);

		$whois_answer = $this->info();
	}

}


?>
