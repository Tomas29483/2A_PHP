<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <p>peter</p>
        <?php
        $premenna = "text";
        $meno = "Tomáš";

        echo "<p>Ahoj, moje meno je " .$meno . "</p>";

        $vysledok = 4 + 6;
        echo $vysledok;

        if($vysledok == 10) {
            echo "Výsledok je 10";
        }else{
            echo "Výsledok nie je 10";
        }

        echo "</br>";

        for($i = 0; $i < 6; $i++) {
            if($i < 5) {
                echo $i . ",";
            }else {
                echo $i;
            }

            // 1. cyklus: $i = 0
            // 2. cyklus: $i = 1
        }
        ?>
    </body>
</html>