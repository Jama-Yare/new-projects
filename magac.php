<?php
$father = "Ahmed";
$mother = "Hodan";
?>

<form action="magac.php" method="GET">
    <input type="hidden" name="Fathername" value="<?php echo $father; ?>">
    <input type="hidden" name="Mothername" value="<?php echo $mother; ?>">

    <button type="submit">taabo</button>
</form>