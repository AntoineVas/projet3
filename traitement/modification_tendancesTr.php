<?php

require('../manager/manager.php');
require('../model/modification_tendances_class.php');

$modif = new modificationTendances($_POST['id'], $_POST['nom'], $_POST['auteur'], $_POST['img'], $_POST['note'],);
$manager = new Manager();
$manager->modification_tendances($modif);

 ?>
