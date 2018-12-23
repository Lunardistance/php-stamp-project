<?php
include_once 'includes/mysql.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php 
   $sql = "SELECT * FROM stamps;";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);


class ImageDisplay{
  
    public function renderImages(){
        global $result;
        global $resultCheck;
       if($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                // **put "if" statement here to cause images to go to next page**//
                $imagePath = $row['image'];
                echo "<img height=100 width=100 src=$imagePath>";
            }
        }
    }
}



$displayImages = new ImageDisplay($resultCheck);
echo $displayImages->renderImages();

?>
<!-- PHPMYADMIN INSERT:

INSERT INTO `Stamps`(`image`, `description`, `collection`, `size`, `duplicates`, `album`, `year`) VALUES ('images/stamp2.jpg','A lovely new stamp','main','1','3','no','2018') -->
</body>
</html>
