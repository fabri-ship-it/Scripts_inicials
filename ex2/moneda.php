<html>

<head>
    <title>MONEDA</title>
</head>

<body>
    <?php>

     <form action=" " method="post">
            <input type="numero " name="cantidad" required><br>
            <input type="submit" name="dolar_a_euro"><br>
    </form>
    
    
    <?php
        $valor_canvio = 1.08;
        $cantidad = ($_POST['cantidad']); {

        echo "<h2>Resultat:</h2>";
        
        if(isset($_POST['dolar_a_euro'])){
            $resultado = $cantidad * $valor_canvio;     
            echo "$cantidad € equivalen a ** " . round($resultado, 2). "$** dolares.";
        }

         if(isset($_POST['dolar_a_euro'])){
            $resultado = $cantidad / $valor_canvio;     
            echo "$cantidad $ equivalen a ** " . round($resultado, 2). "€** euros.";
        }
    }

    ?>
</body>

</html> 






