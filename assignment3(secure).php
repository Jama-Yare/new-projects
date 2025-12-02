<html>
<form action="assignment3(secure).php" method="post">
magac: <input type="text" name="jj">
<br>
age: <input type="text" name="age">
<br>
Email: <input type="text" name="EM">
<br>
mothername: <input type="text" name="mn">
<br>
yourclass: <input type="text" name="YC">
<br>
yourSemester: <input type="text" name="YS">
<br>
<input type="Submit">   
</form>
<?php           
if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    $Name = (htmlspecialchars(string: $_REQUEST['jj'])) ;
    if (empty($Name)){
        echo "Fadlan Buuxi";
    }else{
        echo "your name is: " .$Name;
    }
    echo"<br>";
    $age = (htmlspecialchars(string: $_REQUEST['age'])) ;
    if (empty($age)){
        echo "Fadlan Buuxi";
    }else{
        echo $age;
    }
    echo"<br>";
    $Email = (htmlspecialchars(string: $_REQUEST['EM']));
    if (empty($Email)){
        echo "Fadlan Buuxi";
    }else{
        echo "your email is: " .$Email;
    }
    echo"<br>";
    $Mothername = (htmlspecialchars(string: $_REQUEST['mn']));
    if (empty($Mothername)){
        echo "Fadlan Buuxi";
    }else{
        echo "your mothername is: " .$Mothername;
    }
    echo"<br>";
    $Class = (htmlspecialchars(string: $_REQUEST['YC']));
    if (empty($Class)){
        echo "Fadlan Buuxi";
    }else{
        echo "your class is: " .$Class;
    }
    echo"<br>";
    $Semester = (htmlspecialchars(string: $_REQUEST['YS']));
    if (empty($Semester)){
        echo "Fadlan Buuxi";
    }else{
        echo "your semester is: " .$Semester;
    }
}   
?>



</html>