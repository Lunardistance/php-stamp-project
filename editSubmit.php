<?php

$_SESSION['selectedstamp'] = $selectedStamp;
$stampid = $_POST['selectedstamp'];
$stampimage = $_POST['selectedstamp'];
$description = $_POST['selectedstamp'];
$collection = $_POST['selectedstamp'];
$size = $_POST['selectedstamp'];
$duplicates = $_POST['selectedstamp'];
$glued = $_POST['selectedstamp'];
$year = $_POST['selectedstamp'];

var_dump($selectedStamp);

if(!isset($selectedStamp))die("Please select a stamp");

var_dump($selectedStamp);
