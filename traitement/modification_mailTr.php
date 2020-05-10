<?php

require('../manager/manager.php');
require('../model/modification_mail_class.php');

$modification = new Modification_Mail($_POST['nwmail']);
$manager = new Manager();
$manager->modification_mail($modification);


 ?>
