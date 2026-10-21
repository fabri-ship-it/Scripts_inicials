<?php
if (isset($_GET["nombre"]) &&
    isset($_GET["cognoms"]) &&
    isset($_GET["email"]) &&
    isset($_GET["missatge"])){

    $nom = $_GET["nombre"];
    $cognoms = $_GET["cognoms"];
    $email = $_GET["missatge"];
    $missatge = $_GET["missatge"];

    echo "missatge rebut, " . $nom . " " . $cognoms . ". Gracies per contactar. Et respondrem a ";
    echo "<form action='index.html' method='get'><button>Tornar</button></form>";

} else {  

    echo "no s'ha desat el missatge. ERROR.";
    echo "<form action='index.html'> method='get'><button>Tornar</button></form>";

}