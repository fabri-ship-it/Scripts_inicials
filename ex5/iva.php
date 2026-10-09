<html>

<head>
    <title>IVA</title>
</head>


<body>
        <form method="POST" action="">
        <label>Preu inicial sin IVA:</label>
        
        
        <input type="number" step="0.01" name="preu" required>
        <select name="iva">
            <option value = "5">primer_tipo (5%)</option><br>
            <option value = "10">segundo_tipo(10%)</option><br>
            <option value = "15">tercer_tipo(15%)</option><br>
            <option value = "20">cuarto_tipo(20%)</option><br>
        </select>    

        <input type= "submit" value="CALCULO">
    </form>
    
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preu = floatval($_POST['preu']);
        $porcentaje_iva = floatval($_POST['iva']);
    
        $quantitat_iva = $preu * ($porcentaje_iva / 100); 
        $preu_total = $preu + $quantitat_iva;
    
        echo "<h2>resultados:</h2>";
        echo "Preu inicial: " . number_format($preu, 2) . " €<br>";
        echo "iva aplicado ($porcentaje_iva):" . number_format($quantitat_iva, 2) . " €<br>";
        echo "<strong>Preu total amb IVA: " . number_format($preu_total, 2) . " €</strong>";    
    
        }
    ?>
        

</body>
</html>
