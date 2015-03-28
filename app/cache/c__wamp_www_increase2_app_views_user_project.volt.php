<?php echo $script_foot; ?> 
<?php
echo "<h1>". $projet->getnom()." [".$projet->getUser ()->getidentite ()."] </h1>";
echo "<div class=\"panel panel-warning\">
<div class=\"panel-heading\">Details du projet</div>
  <div class=\"panel-body\">
   <h3>Description</h3></br><p>".$projet->getDescription()."</p>
   </hr>
   <p>Date lancement : ".$projet->getDateLancement().", Date fin prevue : ".$projet->getDateFinPrevue()."</p>
  </div>



</div>";
?>
<div class="panel panel-warning">
<div class="panel-heading">Equipes</div>
<div id="detailProject" class="panel-body" >

</div>
</div>

<a class="btn btn-default" id="AfficherMessage">Messages</a>
<div class="panel panel-warning">
<div class="panel-heading">Messages</div>
<div class="panel-body" id="listemessages">
</div>
</div>

<a class="btn btn-default" id="Retour">Fermer le projet</a>