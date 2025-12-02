<?php
$x = 26;
while($x >= 2) {
  echo "The number is: $x <br>";
  $x-= 2;
}
?>
<br>

<?php
$x = 5;
do {
  echo "tirada kurdheysa waa: $x <br>";
  $x+= 2;
} while ($x < 15);  
?>
<br>




<?php
$x = 10;
for ($x = 10; $x <= 20; $x++) {

  echo "Tirada waa: $x <br>";
}
?>
<br> 

<?php
$magacyo = array("Fawzia", "Farhaan", "Caasha", "Ahmed", "Hodan", "Mohamed");   
foreach ($magacyo as $value) {
  echo "Magacyadu waa: $value <br>";

} 
?>
<br>
<?php
$salarey = array("Fawzia"=>"5000$", "Farhaan"=>"7000$", "Caasha"=>"6000$", "Ahmed"=>"8000$");   
foreach ($salarey as $name => $value) {
  echo "Mushaharka $name waa: $value <br>";

}   
?>