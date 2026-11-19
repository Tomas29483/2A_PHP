<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Zadanie 1
        $cupcake = "Sugar plum shortbread  pudding dessert oat cake.
        Cake cotton candy chocolate cake cupcake shortbread. Chocolate cake chocolate
        sweet chocolate cake candy macaroon carrot cake. Wafer cheesecake jujubes sweet
        apple pie tiramisu caramels. Danish candy halvah soufflé lollipop icing shortbread.
        Dragée icing tootsie roll bear claw chocolate bar topping shortbread candy canes jujubes.
        Cotton candy powder tiramisu icing toffee. Lollipop fruitcake gummi bears cotton candy
        candy tootsie roll fruitcake pie marshmallow. Chocolate cake lollipop brownie sesame snaps
        powder pie dragée pie. Pudding lemon drops danish sweet donut gingerbread.
        Lemon drops gummies marzipan halvah bear claw. Chocolate oat cake pastry biscuit cake
        brownie candy canes. Candy shortbread cookie tart oat cake chupa chups halvah.
        Danish icing gingerbread toffee jelly beans. Sweet bear claw chocolate bar lemon drops
        apple pie marshmallow chocolate cake gingerbread. Sweet roll cake jelly-o sweet roll
        dessert. Croissant halvah icing jelly-o jujubes cookie cake lollipop.
        Marzipan cotton candy cheesecake gummi bears tootsie roll marzipan pudding.
        Liquorice chocolate bar muffin halvah halvah marshmallow muffin brownie.
        Jelly-o tart icing lemon drops danish candy canes. Jelly-o carrot cake wafer jujubes
        sugar plum. Icing biscuit carrot cake toffee jujubes cupcake. Candy jujubes shortbread
        liquorice lemon drops. Marzipan jelly-o cake chocolate cake dragée brownie muffin.
        Biscuit brownie marshmallow gummi bears marshmallow brownie.
        Croissant topping dessert candy marzipan. Shortbread sweet powder pie candy canes
        cheesecake tart candy. Cake oat cake cheesecake jelly beans chocolate bar.";

        $words = explode(" ", $cupcake);

        foreach($words as $word) {
            $max = 1;
            $letters = str_split($word);
            foreach($letters as $letter) {
                $max = max($max, substr_count($word, $letter));
            }
            if($max > 1) {
                echo "<b>$word</b>" . " ";
            }
            else {
                echo $word . " ";
            }
        }



        // ÚLOHA 1
        /*
        Vytvorte cyklus od 50 do -20
        a vypíšte všetky čísla v postupnosti 0,5
        Výsledok: 50, 49,5, 49, 48,5 ... -19,5, -20
        */

        // ÚLOHA 2
        /*
        Pole [4, 23, 56, 23, 5, 66, 12, 2]
        V cykle prejdite všetky prvky poľa a sčítajte
        všetky párne čísla a nepárne čísla zvlášť.
        Výsledok: 
        Súčet párnych: 4 + 56 + 66 + 12 + 2 = 140
        Súčet nepárnych: 23 + 23 + 5 = 51
        */

        // ÚLOHA 3
        /*
        V cykle načítajte 10 náhodných čísel 
        v rozsahu od 0 do 1. 
        Pokiaľ je hodnota 0, vypíšte výsledok ako červenú bodku
        Pokiaľ je hodnota 1, vypíšte výsledok ako zelenú bodku
        Napr. vygenerované [0,1,1,0,1,0,1,0,0,0] 
        Výsledok: [•(R), •(G),•(G), •(R), ...]
        */

        // ÚLOHA 4
        /*
        Načítajte 4 čísla do poľa o 0 do 10. 
        Načítajte číslo premennej target (súčet možných čísel v poli)
        Vo výstupe by ste mali nájsť tú Nticu čísel, 
        ktorá vám tvorí hodnotu premennej target.

        Vstup: nums = [2,7,11,15], target = 9
        Výstup: [0,1]

        Vstup: nums = [3,2,4], target = 6
        Výstup: [1,2]
        */

    ?>
</body>
</html>