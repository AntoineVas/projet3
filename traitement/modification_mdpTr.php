<?php

require('../manager/manager.php');
require('../model/modification_mdp_class.php');

$modification = new Modification_Mdp($_POST['nwmdp']);
$manager = new Manager();
$manager->modification_mdp($modification);
