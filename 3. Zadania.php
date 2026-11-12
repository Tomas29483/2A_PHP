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


    ?>
</body>
</html>