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

 $sql = "SELECT * FROM meals";
 $mydata = mysql_query($sql,$conn);
 echo "<table border=1>
 <tr>
 <th>Meal Name</th>
 <th>Meal Price</th>
 <th>Meal Quantity></th>
 </tr>";

 while($record = mysql_fetch_array($mydata)){
 	echo "<tr>";
 	echo "<td>" . $record['meal_name'] . "</td>";
 	echo "<td>" . $record['meal_price'] . "<td>";
 	echo "<td>" . $record['meal_qty'] . "<td>";
 	echo "</tr>";
 }
echo "</table>";


mysql_close($conn);

?>
</body>
</html>


