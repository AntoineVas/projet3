<?php

require('../manager/manager.php');
require('../model/add_films_class.php');

$add = new addFilms($_POST['nom'],$_POST['auteur'],$_POST['categorie'],$_POST['img'],$_POST['note'],);
$manager = new Manager();
$manager->add_films($add);

 ?>
