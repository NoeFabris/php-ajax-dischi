<?php

include "./db.php";

// var_dump($albums);

function functionUl($album){
?>
    <ul>
        <?php
        foreach ($album as $disk) {
            ?>
            <li><?php echo $disk['title']?></li>
            <?php
        }
        ?>
    </ul>
<?php
};
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>Disks</title>
</head>
<body>

    <header>
    
        <h1>Albums</h1>

    </header>
    <main>
    
        <div>

        <?php echo functionUl($albums) ?>

        </div>
    
    </main>
</body>
</html>