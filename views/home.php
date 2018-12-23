<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" class="rel">
    <title>Document</title>
</head>
<body>
<div class="flexframe">
    <?php
    foreach($stamps as $stamp){?>
     <div class="home-frame">
         <form action="edit.php" method="POST"><img height=100 width=100 src=<?=$stamp->image?>> <br>
         <input type="radio" name="selectedstamp" value="<?=$stamp->id?>"></div>
         
         <?php }; 
         ?>
        </div>
        <button type="submit">Edit Stamp</button> 

     
</body>
</html>