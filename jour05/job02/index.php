<?php 

function bonjour($jour){
    if ($jour == true){
        echo "bonjour <br>";
    }
    else {
        echo "bonsoir <br>";
    }
}

bonjour(true);
bonjour(false);


?>