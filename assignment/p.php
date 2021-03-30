<!DOCTYPE html>
<html>
<body>

<?php

$name = array("chris", "michal", "Akon");
sort($name);


$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$name = array("chris", "michal", "Akon");
rsort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$age = array("chris"=>"35", "michal"=>"40", "Akon"=>"20");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("chris"=>"35", "michal"=>"40", "Akon"=>"20");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("chris"=>"35", "michal"=>"40", "Akon"=>"20");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("chris"=>"35", "michal"=>"40", "Akon"=>"20");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
</body>
</html>