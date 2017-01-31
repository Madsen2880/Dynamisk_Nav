<?php
/*echo '<pre>';
    print_r($_POST);
echo '</pre>';*/

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="nyhedsStyle.css">
    <title>Document</title>
</head>
<body>
<div id="wrapper">
    <?php
    if($_POST){
        echo '<p>Hej <strong>'.$_POST["navn"].'</strong> Tak for din tilmelding til vores nyhedsbrev. Du er tilmeldt med mail adressen - <strong> '.$_POST["email"].'</strong>. </p>';
    }
    if(isset($_POST["produkter"])){
        echo '<p>Du har valgt:</p>';
        echo '<ul>';
        foreach($_POST["produkter"] as $value) {
            echo '<li>'.$value.'</li>';
        }
        echo '</ul>';

    }

    ?>
</div>

</body>
</html>
