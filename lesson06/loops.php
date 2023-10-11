<!-- While Loop -->

<?php
$x = 1;

while($x <= 5){
    echo "The Number is" . $x . "<br/>";
    $x++;
}

echo $x;

"<br/>";

while($x <= 5) :
    echo "The Number is" . $x . "<br/>";
    $x++;
endwhile;

echo $x;

?>

<br/>

<?php

for($x=0;$x<=10;$x=$x+2){
    echo "The Number is" . $x . "<br/>";
}

?>



