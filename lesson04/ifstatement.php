<!-- Syntax -->

<?php
    $a = true;
    $b = false;

    if($a === $b) {
        echo "This is true";
    }else{
        echo "This is false";
    }
    "<br/>";

    // tenorary operator or conditional operator
    // condition ? code a : code b

    $c = $b === $a ? "this is true" : "this is false";
    echo $c;
?>