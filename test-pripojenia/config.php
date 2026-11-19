<?php

    $conn = mysqli_connect("localhost", "root", "root", "testik");

    if(!$conn) {
        echo "error" . mysqli_connect_error();
    } else {
        echo "parada";
    }

?>