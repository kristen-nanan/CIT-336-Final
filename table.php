<!DOCTYPE html>
<html>
<head>
	<title> Attendance Records</title>
	 <style>
	 
  body{ background:#33A2FF;}
  h1, a {font-family: Courier;
    color: white;}
th, td, table{
	border-collapse: collapse;
	border:1px solid black;
	padding: 10px;
}
th {
  height: 25px;
  width: 150px;
}
</style>
<body>
<!-- Kristen Nanan --> 
<!--adapted from example-->
<center><h1>Attendance Records</h1></center>
<center>
<?php
//Link to database
$link = mysqli_connect("localhost", "root", "root", "final_project");
 
// Check connection to database
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Grab data from table and transform to HTML for easy viewing

	$sql = "SELECT * FROM attendance";
	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        echo "<table>";
	            echo "<tr>";
	                echo "<th>Day</th>";
	                echo "<th>Name</th>";
	                echo "<th>Subject</th>";
	                echo "<th>Tutor</th>";
	            echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['Day'] . "</td>";
	                echo "<td>" . $row['Name'] . "</td>";
	                echo "<td>" . $row['Subject'] . "</td>";
	                echo "<td>" . $row['Tutor'] . "</td>";
	            echo "</tr>";
	        }
	        echo "</table>";
	        
	        mysqli_free_result($result);
	    } else{
	        echo "No records matching your query were found.";
	    }
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

?>
</center>
<br>
<br>

<!--add link to form -->
<center><a href="form.html"> Back to Form </a></center>
</body>
</html>



