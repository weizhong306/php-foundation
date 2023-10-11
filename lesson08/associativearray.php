<?php

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

echo $age["Peter"];
echo "<br/>";

print_r(array_keys($age));
print_r(array_values($age));

?>