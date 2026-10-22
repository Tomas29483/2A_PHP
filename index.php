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

        echo "</br>";
        /* Vytvorte cyklus, v ktorom vypíšete:
            - všetky čísla od 0 po náhodné číslo od 0 po 1000
            pričom
            - ak náhodné číslo bude párne, tak chceme vypísať všetky párne čísla od 0 po náhodné číslo
            - ak náhodné číslo bude nepárne, tak chceme vypísať všetky nepárne čísla od 0 po náhodné číslo

            NADSTAVBA resp. bonus
            - každé piate číslo bude mať náhodnú veľkosť (od 10px do 50px) a farbu
        */
        $cislo = 500;//rand(0, 1000);
        $counter = 1;
        echo "Číslo: " . $cislo;
        echo "</br>";
        if($cislo % 2 == 0){
            for($i = 0; $i <= $cislo; $i+=2){
                $nahodnaVelkost = rand(10,50);
                if($counter % 5 == 0){
                    echo "<span style='font-size: {$nahodnaVelkost}px;'>$i</span>" . ", ";
                }else{
                    echo $i. ", ";
                }
                $counter ++;
            }
        }
        else {
            for($i = 1; $i <= $cislo; $i+=2){
                $nahodnaVelkost = rand(10,50);
                if($counter % 5 == 0){
                    echo "<span style='font-size: {$nahodnaVelkost}px;'>$i</span>" . ", ";
                } else {
                    echo $i . ", ";
                }
                $counter ++;
            }
        }
        ?>
    </body>
</html>