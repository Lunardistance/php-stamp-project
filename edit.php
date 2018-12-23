
<?php


include "includes/mysql.php";

// if(!empty($selectedStamp)){
//     header("Location: home.php?error=You need to select a stamp first");
//     exit;
// }else{
//     header("Location: edit.php");
// };


$selection = $_POST['selectedstamp'];
// session_start();



if(empty($selection)) {
	header("Location: home.php?error=You need to login first");
	exit;
}
session_start();
$selectedStamp = $_SESSION['selectedstamp'];


include "views/edit.php";