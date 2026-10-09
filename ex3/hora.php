<html>

<head>
</head>

<body>
    <?php

    date_default_timezone_set('Europe/Madrid');

    $hora_actual =date('H');
    echo "L'hora actual del servidor és: " . date('H:i:s') . "<br>";

    if ($hora_actual >= 5 && $hora_actual < 14) {
            echo "<h1>(Bon dia)</h1>";
        
        } elseif ($hora_actual >= 14 && $hora_actual <19) {
        
            echo"<h1>(bona tarda)</h1>";
       
        } else {
            echo"<h1>(bona nit)</h1>";     
    }
?>

</body>
</html>