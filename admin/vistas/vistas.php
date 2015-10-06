<?php

require('libs/Smarty.class.php');

class Vista{

	protected $smarty;

	public function __construct(){
		$this->smarty = new Smarty;
		//$this->smarty->debugging = true;
	}

	function index(){
		$this->smarty->display('index.tpl');
	}

	function formreply($data,$tabla){
		$this->smarty->assign("datos", $data);
		$this->smarty->display('form'.$tabla.'.tpl');
	}
	function mostrarLogin(){
	    $this->smarty->display('loginform.tpl');
	}

}


?>