<?php 
function view_itm($con)
{
$dbh=$con->query("select * from laf.document");
$dbh->execute();
if($dbh->rowCount()>0)
	{
	$x=1;
	 echo "<table><tr>
		<th>ID</th>
		<th>DOCUMENT_TYPE</th>
		<th>DOCUMENT_NUMBER</th>
		<th>OWNER</th>
		<th>PICTURE</th>
		<th>FINDER</th>
		<th>LOCATION_FOUND</th>
		<th>DATE</th>
		<th>DOC_STATUS</th>
</tr>";
while($ROW=$dbh->fetch(PDO::FETCH_ASSOC))
{
echo"<tr>
<td>".$ROW["ID"]."</td>
<td>".$ROW["DOCUMENT_TYPE"]."</td>
<td>".$ROW["DOCUMENT_NUMBER"]."</td>
<td>".$ROW["OWNER"]."</td>
<td>".$ROW["PICTURE"]."</td>
<td>".$ROW["FINDER"]."</td>
<td>".$ROW["LOCATION_FOUND"]."</td>
<td>".$ROW["DATE"]."</td>
<td>".$ROW["DOC_STATUS"]."</td>
</tr>";
}
echo "</table>";
}
}
?>