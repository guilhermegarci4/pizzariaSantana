<?php
class Validador 
{
	private $nivel;
	
	public function __construct($index = 0){
		session_start();
		$this->validaAcesso($index);
	}

	public function validaAcesso($index){
		if(!isset($_SESSION['nivel'])){
			($index = 0) ? $_SESSION['flash'] = "Usuário não logado." : '';
			return 0;
		} /* else if (time() - $_SESSION['acesso'] >= 1800){
			(isset($_SESSION['flash'])) ? $_SESSION['flash'] = "Tempo de acesso expiradooooo." : '';
			return 0;
		}  */else {
			$_SESSION['acesso'] = time();  //Hora do acesso
			$this->nivel = $_SESSION['nivel'];	
		}
  }
    
	public function validaNivelAdm(){
		if($this->nivel == 1){
			return TRUE;
		} else {
			$_SESSION['flash'] = "Acesso negado. Você não tem autorização necessária";
			return FALSE;
		}
	}
	
	public function getUserNivel(){
		return (($this->nivel) ? $this->nivel : false);
	}
}