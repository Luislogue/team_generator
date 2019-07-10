<?php

    
    require_once('php/teamer.php');

    if(isset($_POST['numero']) && isset($_POST['rol'])){
        $rol = $_POST['rol'];
        $numero = $_POST['numero'];
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teamer</title>
</head>
<body>
<div class="container">
    <header>
        <h1>Teamer</h1>
    </header>
    <div class="formulario">
        <form name="formu" class="form" action="" method="POST">
            <label for="numero">
                <input type="number" name="numero">
            </label>
            <label for="rol">
                <select name="rol">
                    <option value="htmlcss">HTML5/CSS3</option>
                    <option value="javascript">javascript</option>
                    <option value="php">php</option>
                    <option value="jsonxml">json/xml</option>
                    <option value=python>python</option>
                    <option value="java">java</option>
                    <option value="sassless">sass/less</option>
                    <option value="laravel">laravel</option>
                </select>
            </label>
            <input type="submit" class="boton" name="btn" value="pedir">
        </form>
        <div class="llamar">
            <?php
            teamer($numero,$rol);
            ?>
        </div>
    </div>
</div>
    
</body>
</html>