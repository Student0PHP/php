<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
    <p>Ваше имя: <input type="text" name="name"/></p>
    <p>Ваш возраст: <input type="text" name="age"></p>
    <p><input type="submit"></p>

</form>
Здравстуйте <?php echo htmlspecialchars($_GET['name']);?>.
Вам <?php echo htmlspecialchars($_GET['age']);?> лет.

</body>
</html>


