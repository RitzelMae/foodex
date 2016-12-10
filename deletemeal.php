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



if(isset($_POST['delete'])) {
$DeleteQuery = "DELETE FROM meals WHERE meal_name='$_POST[hidden]'";
mysql_query($DeleteQuery, $conn);
};




 $sql = "SELECT * FROM meals";
 $mydata = mysql_query($sql,$conn);
 echo "<table border=1>
 <tr>
 <th>Meal Name</th>
 <th>Meal Price</th>
 <th>Meal Quantity</th>
 </tr>";

 while($record = mysql_fetch_array($mydata)){
 echo"<form action=deletemeal.php method =post>";
 	echo "<tr>";
 	echo "<td>" ."<input type=text name=meal_name value=" . $record['meal_name'] . "></td>";
 	echo "<td>" . "<input type=text name=meal_price value=" . $record['meal_price'] . "><td>";
 	echo "<td>" . "<input type=text name=meal_qty value=" . $record['meal_qty'] . "><td>";
 	echo "<td>" ."<input type=hidden name=hidden value=" . $record['meal_name'] . " ></td>";
 	echo "<td>" . "<input type=submit name=delete value=delete" . "></td>";
 	echo "</tr>";
 echo"</form>";
 }
echo "</table>";


mysql_close($conn);

?>
</body>
</html>


