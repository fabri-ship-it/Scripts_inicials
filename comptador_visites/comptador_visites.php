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
    if (!isset($_POST['comprar'])) {        // Si ja existeix, sumem 1 només si no acaba de fer una compra (perquè la visita no s'incrementi innecessàriament)
        $visites++;
    }
}

setcookie("visites", $visites, time() + 31536000, "/");  // Guardem el nou valor de visites a la cookie (dura 1 any)
?>