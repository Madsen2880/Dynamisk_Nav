<?php

#Der kommer mere PHP kode snart!!

?>



<!doctype html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="wrapper">

        <header>
           <?php include "menu.php"; ?>
        </header>

        <main>
            <?php
            if ($_GET){
                include($_GET['side'].".php");
            }else{
                include "forside.php";
            }

            ?>
        </main>
    </div>
</body>
</html>