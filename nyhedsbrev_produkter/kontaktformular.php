<?php
$navn = '';
$email = '';
$emne = '';
$besked = '';
$fejlnavn = '';
$fejlmail = '';
$fejlemne = '';
$fejlbesked = '';
$fejl = 0;
$success = 'Indtast dine oplysninger i kontaktformularen herunder!';

if($_POST) {
    if (isset($_POST['navn'])) {
        if (empty($_POST['navn'])) {
            $fejlnavn = "Navn - Feltet er ikke udfyldt!";
            $fejl++;
        } else {
            if (is_numeric($_POST['navn'])) {
                $fejlnavn = "navn - Feltet skal udfyldes med bogstaver!";
            } else {
                $navn = $_POST['navn'];
            }
        }
    }


    if (isset($_POST['emne'])) {
        if (empty($_POST['emne'])) {
            $fejlemne = "Emne - Feltet er ikke udfyldt!";
            $fejl++;
        } else {
            if (is_numeric($_POST['emne'])) {
                $fejlemne = "navn - Feltet skal udfyldes med bogstaver!";
            } else {
                $email = $_POST['emne'];
            }
        }
    }


    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            $fejlmail = "Du har ikke skrevet en Email!";
            $fejl++;
        } else {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $email = $_POST['email'];
            } else {
                $fejlmail = "Sådan skriver man ikke en email!";
                $fejl++;
            }
        }
    }


    if (isset($_POST['besked'])) {
        if (empty($_POST['besked'])) {
            $fejlbesked = "Emne - Feltet er ikke udfyldt!";
            $fejl++;
        } else {
            if (is_numeric($_POST['besked'])) {
                $fejlbesked = "Besked - Feltet skal udfyldes med bogstaver!";
            } else {
                $email = $_POST['besked'];
            }
        }
    }
}


if ($fejl == 0){
        $navn = '';
        $email = '';
        $emne = '';
        $besked = '';
        $success = "Formularen er udfyldt korretkt";
    }

?>




<p><?php echo $success; ?></p>

<form action="" method="post">

    <label>Navn:</label>
    <input type="text" name="navn" value="<?php echo $navn; ?>"/>
    <p><?php echo $fejlnavn; ?></p>

    <label>E-mail:</label>
    <input type="text" name="email" value="<?php echo $email; ?>"/>
    <p><?php echo $fejlmail; ?></p>

    <label>Emne:</label>:</label>
    <input type="text" name="emne" value="<?php echo $emne; ?>"/>
    <p><?php echo $fejlemne; ?></p>

    <label>Besked:</label>
    <textarea name="besked" cols="20" ROWS="10"></textarea>
    <p><?php echo $fejlbesked; ?></p>

    <input type="submit">


</form>
