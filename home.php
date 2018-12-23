<?php
//include the connection to the database from the neighboring document containing it.
include 'includes/mysql.php';
// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


//    $sql = "SELECT * FROM stamps;";
//    $result = mysqli_query($conn, $sql);
//    $resultCheck = mysqli_num_rows($result);
//    //If there are results, and while there are results, get all the results and assign it to an array, row, and set equal to variable    
//    if($resultCheck > 0){
//         while ($row = mysqli_fetch_assoc($result)) {
//                 $imagePath = $row['image'];
//         }
//     }

$stamps =[];
$result = $conn->query("SELECT * FROM stamps;");
if(!$result)die($conn->error);
while ($row=$result->fetch_object()){
    // $imagePath = $row['image'];
    $stamps[] = $row;
}



// $stamps =[];
// $result = $conn->query("SELECT * FROM stamps;");
// if(!$result)die($conn->error);
// while ($row=$result->fetch_object()){
//     // $imagePath = $row['image'];
//     $stamps[] = $row;
// }

// else redirect to login
// if(empty($selectedStamp)) {
// 	header("Location: home.php?error=You need to login first");
// 	exit;
// }


include 'views/home.php';

 
