<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$conn = mysql_connect("localhost","foodex","password");
if(!$conn){
	die("Not Connected" .mysql_error);
}
mysql_select_db("owner",$conn);



if(isset($_POST['update'])) {
$UpdateQuery = "UPDATE meals SET meal_name='$_POST[meal_name]', meal_price='$_POST[meal_price]' WHERE meal_name='$_POST[hidden]'";
mysql_query($UpdateQuery, $conn);

};




 $sql = "SELECT * FROM meals";
 $mydata = mysql_query($sql,$conn);
 echo "<table border=1>
 <tr>
 <th>Meal Name</th>
 <th>Meal Price</th>
 </tr>";

 while($record = mysql_fetch_array($mydata)){
 echo"<form action=update.php method =post>";
 	echo "<tr>";
 	echo "<td>" ."<input type=text name=meal_name value=" . $record['meal_name'] . "></td>";
 	echo "<td>" . "<input type=text name=meal_price value=" . $record['meal_price'] . "><td>";
 	echo "<td>" ."<input type=hidden name=hidden value=" . $record['meal_name'] . " ></td>";
 	echo "<td>" . "<input type=submit name=update value=update" . "></td>";
 echo"</form>";
 }
echo "</table>";


mysql_close($conn);

?>
</body>
</html>


