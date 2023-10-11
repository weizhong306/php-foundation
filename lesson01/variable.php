<!-- Base Syntax -->

<?php
    $a = "Hello World";
    echo $a;
    echo "<br/>";
?>

<!-- Case Sensitive -->

<?php
    $b = "Hello";
    $B = 123;

    echo $b;
    echo "<br/>";
    echo $B;
?>

<!-- Constants -->

<?php
    define("SAYHI", "Hi, I'm Danny");
    echo "<br/>";
    echo SAYHI;
?>

<!-- Naming Methods -->

<!-- 建議用Snake Case命名法，小寫英文字母搭配底線做區隔 -->
<!-- EX: smail_dog  -->