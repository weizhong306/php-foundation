<!-- Integer -->

<?php
    $a = 1;
    $b = 1.23;
    $c = -0.234;

    echo $a;
    echo "<br/>";
    echo $b;
    echo "<br/>";
    echo $c;
    echo "<br/>";

    // show value and datatype
    var_dump($a); 
    echo "<br/>";
    echo gettype($c);
?>

<br/><br/><br/>


<!-- String -->

<?php
    $a = "string";
    $b = 'single quote';
    $c = "I'm a boy";


    echo $a;
    echo "<br/>";
    echo $b;
    echo "<br/>";

    // show value and datatype
    var_dump($a); 
    echo "<br/>";
    echo gettype($a);
    echo "<br/>";
    // show string length
    echo strlen($a);
?>

<br/><br/><br/>