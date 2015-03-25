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
		
		//charge toute les données du projet
		$nameprojet = Projet::find("idClient=".$idUser);
		
		$this->view->setVar("nameprojet",$nameprojet);
		
		//$id=;
		//var_dump($id);
		for($i=0; $i < count($nameprojet);$i++ ) {
			$id = $nameprojet[$i]->id;		
			$tmpPoid[$i] = Usecase::find("idProjet=".$id);
			$poids[$i] = $tmpPoid[0]->poids;
		}
		
		$this->view->setVar("poids",$poids);
		
	}

}

?>