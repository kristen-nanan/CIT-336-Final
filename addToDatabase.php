<!DOCTYPE html>
<html>
<body>
<!--Kristen Nanan-->
<!--adapted from example-->
<?php
/* establish connection to database */
$link = mysqli_connect("localhost", "root", "root", "final_project");
 
/*check connection to database*/
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
/*get data from form*/
$Day = mysqli_real_escape_string($link, $_GET['Day']);
$Name = mysqli_real_escape_string($link, $_GET['Name']);
$Subject = mysqli_real_escape_string($link, $_GET['Subject']);
$Tutor = mysqli_real_escape_string($link, $_GET['Tutor']);
 
/*insert user data from form into table */
$sql = "INSERT INTO attendance (Day, Name, Subject, Tutor) VALUES ('$Day', '$Name', '$Subject', '$Tutor')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
/*disconnect from database */
mysqli_close($link);
?>

</body>
</html>