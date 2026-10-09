<html>

<head>
</head>

<body>
    <?php>
        
        <form action="" method="post">
            <input type="radio" name="estil" value="breakcore" required> breakcore<br>        
            <input type="radio" name="estil" value="corexd" required> corexd<br>
            <input type="radio" name="estil" value="nightcore" required> nightcore<br>
            <input type="radio" name="estil" value="speedcore" required> speedcore<br>
            
            <input type="submit" value="enviar vot">
        </form>
    
    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $estil_triat = $_POST['estil'];
                echo "<h2>Resultat:</h2>";

            switch ($estil_triat) {
                case 'breakcore':
                    echo "<p>peak</p>";
                    break;
                case 'corexd':
                    echo "<p>nose que poner</p>";
                    break;
                case 'nightcore':
                    echo "<p>noche pero con core</p>";
                    break;
                case 'speedcore':
                    echo "<p>core muy rapido</p>";
            }
        }
    ?>
</body>
</html>


