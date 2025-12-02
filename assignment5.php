<html>
<head>
<style>
.khalad { color:red; }
</style>
</head>
<body>

<?php  
$magackhalad = $telkhalad = $idkhalad = $mothernamekhalad = $fasalkhalad = $semesterkhalad =    "";
$magac = $tel = $id = $mothername = $fasal = $semester = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["n"])){
        $magackhalad = "Magaca soo geli";
        $telkhalad = "Telefoonka soo geli";
        $idkhalad = "ID-ga soo geli";       
        $mothernamekhalad = "Mothername soo geli";
        $fasalkhalad = "Fasalka soo geli";
        $semesterkhalad = "Semester-ka soo geli";   

    } 
    else{
        $magac = test($_POST["n"]);
        $tel = test($_POST["t"]);
        $id = test($_POST["id"]);   
        $mothername = test($_POST["mothername"]);
        $fasal = test($_POST["fasal"]);
        $semester = test($_POST["semester"]);

    }
}

function test($info){
    $info = trim($info);
    $info = stripslashes($info);
    $info = htmlspecialchars($info);
    return $info;
}
?>

<form method="POST" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
magac:  
<input type="text" name="n"> 
<span class="khalad"> * <?php echo $magackhalad; ?></span>
<br>
tell: <input type="text" name="t">
<span class="khalad"> * <?php echo $telkhalad; ?></span>
<br>
ID: <input type="text" name="id">
<span class="khalad"> * <?php echo $idkhalad; ?></span>
<br>
Mothername: <input type="text" name="mothername">
<span class="khalad"> * <?php echo $mothernamekhalad; ?></span>
<br>
Fasal: <input type="text" name="fasal"> 
<span class="khalad"> * <?php echo $fasalkhalad; ?></span>
<br>
semester: <input type="text" name="semester">
<span class="khalad"> * <?php echo $semesterkhalad; ?></span>  
<br>
<input type="Submit">
</form>

<h1>Xogta qofka</h1>

<?php  
echo $magac;
echo "<br>";
echo $tel;      
echo "<br>";
echo $id;
echo "<br>";
echo $mothername;
echo "<br>";
echo $fasal;
echo "<br>";
echo $semester;



?>

</body>
</html>