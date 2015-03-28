<?php
class AuthorController extends ControllerBase
{
	public function projectsAction($idUser){
		//charge l'utilisateur
		$user = User::findFirst($idUser);
		$this->view->setVar("user",$user);
	
		//charge toute les données du projet
		$nameprojet = Projet::find("idClient=".$idUser);
		$this->view->setVar("nameprojet",$nameprojet);
		
	}
	public function projectAction($idUser){
		//charge toute les données du projet
		$projet = Projet::find("idClient=".$idUser);
		$this->view->setVar("projet",$projet);

		$user = $projet->getUser();
		$this->view->setVar('user', $user);
		
		$projet = projet::findFirst ( "id = $id" );
		$this->view->setVar('idProjet', $id);
		$this->jquery->get("user/project/equipe/".$id,"#detailProject");
		$this->jquery->get("user/project/message/".$id, "#listeMessages");
		
		$bootstrap=$this->jquery->bootstrap();
		
		//pour les uses Cases
		$idProjet = $nameprojet->id;
		$usecases = Usecase::find(array("idDev = " . $idUser, "idProjet = " . $idProjet));
		
		foreach ($usecases as $key => $usecase) {
			$this->jquery->getAndBindTo("#getUseCase-" . $usecase->code, "click", "usecase/taches/" . $usecase->code, "#divUseCase-" . $usecase->code);
		}
			
		$this->view->setVar("usecases", $usecases);

		$this->jquery->compile($this->view);
	}
}
?>