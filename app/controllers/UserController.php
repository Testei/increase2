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
	public function projectAction($id){
		$projet = Projet::findFirst($id);
		$this->view->setVar('projet', $projet);
		$user = $projet->getUser();
		$this->view->setVar('user', $user);
		
		
		$projet = projet::findFirst ( "id = $id" );
		$this->view->setVar('idProjet', $id);
		$this->jquery->get("user/project/equipe/".$id,"#detailProject");
		$this->jquery->get("user/project/message/".$id, "#listeMessages");
		
		$bootstrap=$this->jquery->bootstrap();
		
		//$bootstrap->htmlButton("listeMessages","Messages");
		
		//$this->jquery->click("#btnMessages","Afficher les Messages", $this->jquery->toggle("#listeMessages"));
		//$this->jquery->getAndBindTo("#btnRetour", "click", 'user/projects/'.$user->getId(), "body");
		
		//$this->jquery->doJQueryAndBindTo("#btnMessages","change", "#listeMessages", "toggle", "$('#btnMessage').is(':checked')");
		//rien : element /  # : id / . : class
		
		$messages = Message::find(array("idMessage" => $id));
		foreach ($messages as $message) {
			$this->jquery->getAndBindTo("#btnMessage", "click", "toggle","#listeMessages");
		}
		$this->view->setVar("messages", $messages);
		
		
		
		
		$this->jquery->compile($this->view);
	}
}

?>