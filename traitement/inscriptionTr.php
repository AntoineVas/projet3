<?php

require('../manager/manager.php');
require('../model/inscription_class.php');

$inscription = new Inscription($_POST['nom'], $_POST['prenom'],$_POST['mail'], $_POST['mdp']);
$manager=new Manager();
$manager->inscription($inscription);

 ?>
