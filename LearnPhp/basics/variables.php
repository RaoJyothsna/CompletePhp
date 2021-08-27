<?php
$intVar=10;
$floatVar=10.4;
$stringVar="Hai";
$charVar='A';
$flagVar=false;

echo "<h3>Integer ".$intVar."</h3>";
echo "<h3>Float ".$floatVar."</h3>";
echo "<h3>String ".$stringVar."</h3>";
echo "<h3>Char ".$charVar."</h3>";
echo "<h3>Boolean ".$flagVar."</h3>";

echo "<h3>10 is of type ".gettype($intVar)."</h3>";
echo "<h3>10.4 is of type ".gettype($floatVar)."</h3>";
echo "<h3>hai is of type ".gettype($stringVar)."</h3>";
echo "<h3>C is of type ".gettype($charVar)."</h3>";
echo "<h3>false is of type ".gettype($flagVar)."</h3>";

?>