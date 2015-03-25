<?php

class UserController extends ControllerBase
{

	public function userAction()
	{
		
	}
	
	public function projectsAction($idUser){
		
		/*$this->jquery->doJQueryAndBindTo("#ckShowHide","change", "#zone", "toggle", "$('#ckShowHide').is(':checked')");
		//rien : element /  # : id / . : class
		$this->jquery->compile($this->view);*/
		
		//charge l'utilisateur
		$user = User::findFirst($idUser);
		$this->view->setVar("user",$user);
		
	//	$nameprojet = Projet::findFirst($idUser);
		$nameprojet = Projet::find("idClient=".$idUser);
		var_dump($nameprojet[1]);
		$this->view->setVar("nameprojet",$nameprojet);
		//$id=;
		//var_dump($id);
		
		$idProject = Projet :: find("id=".$id);
		$poids = Usecase::find("poids=".$idProject);
		$this->view->setVar("poids",$poids);
		
		
	}

}

?>