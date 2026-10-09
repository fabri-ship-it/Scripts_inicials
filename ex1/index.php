<html>

<head>
    <title>FORM</title>
</head>

<body>
    <?php>
        
        <form action="" method="post">
            nom:<input type="text" name="nombre"><br>
            cognoms:<input type="text" name="cognoms"><br>
            email:<input type ="text" name="email"><br>
            missatge:<textarea name="missatge" cols="30" rows="10"></textarea><br> 
            <input type="submit" value="enviar">
        </form>
    <?php
        $nom = $_POST["nombre"];
        $email = $_POST["email"];
        echo "Missatge rebut, " .$nom. ". gracies per contestar. Et respondrema a " .$email."";
    ?>
</body>

</html>