<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Test Task</title>
</head>
<body>





<form class="form" method="post" action="index.php">

    <div class="form__inputs">
        <label for="red_bacterium">
            Количество красных бактерий:
            <input name="red_bacterium" id="red_bacterium" type="number" />
        </label>

        <label for="green_bacterium">
            Количество зеленых бактерий:
            <input name="green_bacterium" id="green_bacterium" type="number" />
        </label>

        <label for="iteration">
            Количество итераций
            <input name="iteration" id="iteration" type="number">
        </label>
    </div>

    <button class="btn_submit" type="submit">Click</button>

</form>

<script src="script.js"></script>
</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $arrBacteria= [];

    $arrBacteria["red_bacterium"] = (int) $_POST["red_bacterium"];
    $arrBacteria["green_bacterium"] = (int) $_POST["green_bacterium"];

    $iteration = (int) $_POST["iteration"];


    for($i = 0; $i < $iteration; $i++) {
        $tmpGreen = $arrBacteria["red_bacterium"] * 3 + $arrBacteria["green_bacterium"] * 5;
        $tmpRed = $arrBacteria["green_bacterium"] * 4 + $arrBacteria["red_bacterium"] * 2;


        $arrBacteria["red_bacterium"] = $tmpRed;
        $arrBacteria["green_bacterium"] = $tmpGreen;
    }


    echo "Red: ${arrBacteria["red_bacterium"]}. Green: ${arrBacteria["green_bacterium"]}. Iteration: ${iteration}";

}



?>