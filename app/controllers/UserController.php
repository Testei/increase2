<?php

class UserController extends ControllerBase
{

	public function userAction()
	{	
	}
	
	public function projectsAction($idUser){
		
		
		//charge l'utilisateur
		$user = User::findFirst($idUser);
		$this->view->setVar("user",$user);
		
		//charge toute les données du projet
		$nameprojet = Projet::find("idClient=".$idUser);
		
		$this->view->setVar("nameprojet",$nameprojet);
		
		//recuperation du poids --
		/*$poids = null;
	
		for($i=0; $i < count($nameprojet); $i++ ) {
			$id = $nameprojet[$i]->id;	
			
			$tmpPoid[$i] = Usecase::find("idProjet=".$id);
			
			for($j=0; $j<count($tmpPoid);$j++){
				$poids[$i] = array("poids"=> $tmpPoid[$j]->poids, "avancement"=>$tmpPoid[$j]->avancement);			
			}			
			
		}
		var_dump($poids);
		$this->view->setVar("poids",$poids);
		*/
	}
}

?>