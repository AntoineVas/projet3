<?php

require('../manager/manager.php');
require('../model/delete_films_class.php');

$delete = new deleteFilms($_POST['id']);
$manager = new Manager();
$manager->delete_films($delete);

 ?>
