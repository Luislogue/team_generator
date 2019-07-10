<?php
require_once('php/desarrolladores.php');

function teamer($numero, $rol){
    switch($rol){
        case 'hmtlcss':
            echo "<p>Quiere"." ".$numero." "."programadores de"." ".$rol."</p>";
            echo "<p>Te ofrezco a:</p><br>";
                echo $Llordi."<br>";
                echo $Luis."<br>";
                echo $Petro."<br>";
            break;
        case 'javascript':
            echo "<p>Quiere"." ".$numero." "."programadores de"." ".$rol;
            echo "<p>Te ofrezco a:</p><br>";
                echo $Petro."<br>";
                echo $Toni."<br>";
            break;
        case 'php':
            echo "<p>Quiere"." ".$numero." "."programadores de"." ".$rol;
            echo "<p>Te ofrezco a:</p><br>";
                echo $Alexis."<br>";
                echo $David."<br>";
                echo $Fran."<br>";
            break;
        case 'jsonxml':
            echo "<p>Quiere"." ".$numero." "."programadores de"." ".$rol;
            echo "<p>Te ofrezco a:</p><br>";
                echo $Fran."<br>";
            break;
        case 'python':
            echo "<p>Quiere"." ".$numero." "."programadores de"." ".$rol;
            echo "<p>Te ofrezco a:</p><br>";
                echo $Luis."<br>";
                echo $Lolo."<br>";
            break;
        case 'java':
            echo "<p>Quiere"." ".$numero." "."programadores de"." ".$rol;
            echo "<p>Te ofrezco a:</p><br>";
                echo $Alexis."<br>";
                echo $David."<br>";
                echo $Lolo."<br>";
            break;
        case 'sassless':
            echo "<p>Quiere"." ".$numero." "."programadores de"." ".$rol;
            echo "<p>Te ofrezco a:</p><br>";
                echo $Llordi."<br>";
                echo $Julia."<br>";
            break;
        case 'laravel':
            echo "<p>Quiere"." ".$numero." "."programadores de"." ".$rol;
            echo "<p>Te ofrezco a:</p><br>";
                echo $Julia."<br>";
                echo $Toni."<br>";
            break;
        default:
            echo 'Error';
        break;
    }
}