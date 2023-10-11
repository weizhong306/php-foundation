<!-- Syntax -->

<?php
    $a = true;
    $b = trUe;
    $c = false;
    // 兩個等號只比對值
    // 三個等號就是做值跟類別的比對
    // true 回傳 1, false 回傳 空值
    echo $a === $b; 
    echo $c === $a;
?>