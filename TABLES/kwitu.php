<?php 
function test($con)
{
$dbh=$con->query("select * from mysql.db");
$dbh->execute();
if($dbh->rowCount()>0)
	{
	$x=1;
	 echo "<table><tr>
</tr>";
while($ROW=$dbh->fetch(PDO::FETCH_ASSOC))
{
echo"<tr>
</tr>";
}
echo "</table>";
}
}
?><?php 
function test($con)
{
$dbh=$con->query("select * from mysql.db");
$dbh->execute();
if($dbh->rowCount()>0)
	{
	$x=1;
	 echo "<table><tr>
		<th>DB</th>
</tr>";
while($ROW=$dbh->fetch(PDO::FETCH_ASSOC))
{
echo"<tr>
<td>".$ROW["Db"]."</td>
</tr>";
}
echo "</table>";
}
}
?>