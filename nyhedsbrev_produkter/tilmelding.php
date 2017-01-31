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
        <form action="takkebesked.php" method="post">

            <label>Navn:</label><input type="text" name="navn"/>
            <label>Email:</label><input type="email" name="email">
            <label>Hatte</label><input type="checkbox" name="produkter[]" value="Hatte">
            <label>Sko</label><input type="checkbox" name="produkter[]" value="Sko">
            <label>Tasker</label><input type="checkbox" name="produkter[]" value="Tasker">
            <input type="submit" value="Send">

        </form>
    </div>

</body>
</html>