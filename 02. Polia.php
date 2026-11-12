<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
        $pole = array("Peter", "Juraj", "Ján");
        echo $pole[1];

        echo "</br>";
        foreach($pole as $prvok) {
            echo $prvok . " ";
        }

        /*
        Vytvorte pole náhodných čísel od 0 do 100. Počet čísel: 10,
        Ak aspoň 2 čísla v poli sú rovnaké pusť pesničku.

        [23, 5, 98, 47, 5, 3, 43, 23, 54, 66]
        */
        $cisla = array();
        $videne = array();
        echo "</br>";
        for($i = 0; $i < 10; $i++) {
            $cisla[] = rand(0,100);
        }

        foreach($cisla as $value) {
            echo $value . " ";
        }

        foreach($cisla as $videl) {
            if(in_array($videl, $videne)) {
                $pesnicka = TRUE;
            }
            else {
                $videne[] = $videl;
            }
        }
        if($pesnicka == TRUE) {
            echo '<audio controls autoplay>
                        <source src="fa.m4a" type="audio/mp4">
                  </audio>';
        }
        ?>
    </body>
</html>