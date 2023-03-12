<?php 
    require('../../src/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Read Mentee Data</h1>
    <?php foreach($mentors as $mentor):?>
            <?php  echo $mentor->name ?>
    <?php endforeach;?>
    
</body>
</html>