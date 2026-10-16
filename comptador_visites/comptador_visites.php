<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comprar'])) {  // Comprovem si s'ha clicat el botó de compra

setcookie("compra_realitzada", "si", time() + 31536000, "/");  // Si compra, marquem que ja ha fet una compra per desactivar futurs descomptes // Dura 1 any
    $compra_feta = true;
} else {
    $compra_feta = isset($_COOKIE['compra_realitzada']) && $_COOKIE['compra_realitzada'] == "si";
}

if (!isset($_COOKIE['visites'])) {   // Gestionem el comptador de visites mitjançant una cookie
    $visites = 1;
} else {
    $visites = intval($_COOKIE['visites']);
    if (!isset($_POST['comprar'])) {    // Si ja existeix, sumem 1 només si no acaba de fer una compra 
        $visites++;
    }
}

setcookie("visites", $visites, time() + 31536000, "/");  // Guardem el nou valor de visites a la cookie (dura 1 any)
?>


<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Botiga Online</title>
</head>
<body>

    <h1>Benvingut a la nostra botiga!</h1>
    
    <!-- Mostrem el comptador de visites -->
    <p><strong>Comptador de visites:</strong> <?php echo $visites; ?></p>

    <?php
    // Si l'usuari ja ha fet una compra prèviament
    if ($compra_feta) {
        echo "<p style='color: green;'>Gràcies per la teva compra! Ja has utilitzat el teu descompte.</p>";
    } else {
        // Si no ha comprat, mprovem les ofertes segons les visites
        if ($visites >= 10) {
            echo "<p style='color: blue;'><strong>Oferta exclusiva sols per a tu!</strong> Utilitza el codi <code>BOTIGA50</code> per obtenir un 50% de descompte en les teves primeres compres a la botiga.</p>";
        } elseif ($visites >= 5) {
            echo "<p style='color: orange;'><strong>Oferta exclusiva!</strong> Utilitza el codi <code>BOTIGA20</code> per obtenir un 20% de descompte en les teves primeres compres a la botiga.</p>";
        }
    }
    ?>

    <hr>

    <!-- Formulari de compra amb input per aplicar descompte -->
    <form method="POST" action="">
        <label>Codi de descompte:</label>
        <input type="text" name="codi_descompte" placeholder="Introdueix el codi aquí">
        <br><br>
        <input type="submit" name="comprar" value="Botó de compra">
    </form>

</body>
</html