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

<form action="<?php echo  htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
    <fieldset>
        <legend>Выберите животное</legend>
        <label for="dog">
        <input type="checkbox" id="dog" name="animal[]" value="собака">
            Собака
        </label>
        <label for="cat">
            <input type="checkbox" id="cat" name="animal[]" value="кошка">
            Кошка
        </label>
        <label for="fox">
            <input type="checkbox" id="fox" name="animal[]" value="лиса">
            Лиса
        </label>
        <label for="tiger">
            <input type="checkbox" id="tiger" name="animal[]" value="тигр">
            Тигр
        </label>
    </fieldset>
    <input type="submit" value="отправить">
</form>
<?php
$animal = isset($_POST['animal']) ? $_POST['animal'] :'';
if (!empty($animal)) {
    echo '<br><br> Выбраны: ' ;
    foreach ($animal as $a) {
        echo "<span style=\"color:green\">".htmlentities($a)."</span>";
    }
}
?>
</body>
</html>


