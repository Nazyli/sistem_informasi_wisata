<?php

function createStar($star){
    $starMinus = 5 - $star;
    for ($x = 1; $x <= $star; $x++) { 
        echo "<i class='fas fa-star text-warning'></i>";
    }
    if ($starMinus != 0) {
        for ($x = 1; $x <= $starMinus; $x++) {
            echo "<i class='far fa-star text-warning'></i>";
     }
    }
}
