<?php 
    require_once __DIR__ . "/classes/Client.php";
    require_once __DIR__ . "/classes/Product.php";
; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            $client = new Client('Denis', 'Paul', 'GodDenix', 'M');
            $client->setAddress('Via Paladino 43');
            // echo $client->getAddres()
        ; ?>

        <!-- <h1> <?= $client->getRegistrationid(); ?> </h1> -->
        
    </body>
</html>