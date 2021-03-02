<html>
<head>
<title>display data in table format</title>
</head>
<body>
 <?php
 $con = mysql_connect("localhost","root","");
if(!$con)
{
 die("not connected".mysql_error());
}
echo "Connection open"."<br/>";
$sldb = mysql_select_db("coust",$con);
if(!$sldb)
{
 die("not found".mysql_error());
}
echo "Database selected"."<br/>";
$query = "select * from customer";
$sql = mysql_query($query);
echo "<table border = '1'>
<tr>
<th>C_No</th>
<th>C_Name</th>
<th>Item_Purchased</th>
<th>Mob_no</th>
</tr>";
while($row = mysql_fetch_array($sql))
{
 echo "<tr>";
 echo "<td>".$row['c_no']."</td>";
 echo "<td>".$row['c_name']."</td>";
 echo "<td>".$row['item_purchased']."</td>";
 echo "<td>".$row['mob_no']."</td>";

 echo "</tr>";
}
echo "</table>";
 ?>
</body>
</html>