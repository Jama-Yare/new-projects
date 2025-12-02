<html>
<?php

$magac = $tel = $ID = $fee = $year = $semester = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $magac = test($_POST["nn"]);
    $tel = test($_POST["tl"]);
    $ID = test($_POST["rr"]);
    $fee = test($_POST["pl"]);
    $year = test($_POST["ll"]);
    $semester = test($_POST["mm"]); 
}

function test($xog) {
    $xog = trim($xog);
    $xog = stripslashes($xog);
    $xog = htmlspecialchars($xog);
    return $xog;
}
?>

<form method="post" action="<?php echo($_SERVER["PHP_SELF"]); ?>">
    magac: <input type="text" name="nn"> <br><br>
    tel: <input type="text" name="tl"> <br><br>
    ID: <input type="text" name="rr"> <br><br>
    fee: <input type="text" name="pl"> <br><br>
    year: <input type="text" name="ll"> <br><br>
    semester: <input type="text" name="mm"> <br><br>
    <input type="submit">
</form>

<?php
echo $magac . "<br>";
echo $tel . "<br>";
echo $ID . "<br>";
echo $fee . "<br>";
echo $year . "<br>";
echo $semester . "<br>";
?>
</html>