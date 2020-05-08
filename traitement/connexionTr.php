<?php

require('../manager/manager.php');
require('../model/connexion_class.php');

$user = new Connexion($_POST['mail'], $_POST['mdp']);
$manager = new Manager();
$manager->connexion($user);

 ?>
