<?php

require('../model/reservation_class.php');
require('../manager/manager.php');

$reserv = new Reservation($_SESSION["id"], $_SESSION["nom"], $_SESSION["prenom"], $_SESSION["mail"],$_POST["date"], $_POST["film"]);
$manager = new Manager;
$manager->reservation($reserv);
