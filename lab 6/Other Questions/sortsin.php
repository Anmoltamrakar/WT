<!DOCTYPE html>
<html>
<body>

<?php
$name = array("Chris", "Michal", "Akon");
sort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$name = array("Chris", "Michal", "Akon");
rsort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$age = array("Chris"=>"21", "Michal"=>"23", "Akon"=>"18");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Chris"=>"21", "Michal"=>"23", "Akon"=>"18");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Chris"=>"21", "Michal"=>"23", "Akon"=>"18");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Chris"=>"21", "Michal"=>"23", "Akon"=>"18");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
</body>
</html>