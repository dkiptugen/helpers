<?php 
function test($con)
{
$dbh=$con->query("select * from hospital.patient_details");
$dbh->execute();
if($dbh->rowCount()>0)
	{
	$x=1;
	 echo "<table><tr>
		<th>PATIENT_NAME</th>
		<th>TEL_NO</th>
		<th>ADDRESS</th>
		<th>PATIENT_ID</th>
		<th>DATE_OF_REG</th>
		<th>NATIONAL_ID</th>
</tr>";
while($ROW=$dbh->fetch(PDO::FETCH_ASSOC))
{
echo"<tr>
<td>".$ROW["PATIENT_NAME"]."</td>
<td>".$ROW["Tel_no"]."</td>
<td>".$ROW["address"]."</td>
<td>".$ROW["patient_id"]."</td>
<td>".$ROW["date_of_reg"]."</td>
<td>".$ROW["National_id"]."</td>
</tr>";
}
echo "</table>";
}
}
?><?php 
function lab($con)
{
$dbh=$con->query("select * from hospital.Lab");
$dbh->execute();
if($dbh->rowCount()>0)
	{
	$x=1;
	 echo "<table><tr>
		<th>LAB_TEST</th>
		<th>LAB_FINDING</th>
		<th>ATTENDANT</th>
		<th>TIME</th>
</tr>";
while($ROW=$dbh->fetch(PDO::FETCH_ASSOC))
{
echo"<tr>
<td>".$ROW["lab_test"]."</td>
<td>".$ROW["lab_finding"]."</td>
<td>".$ROW["attendant"]."</td>
<td>".$ROW["Time"]."</td>
</tr>";
}
echo "</table>";
}
}
?><?php 
function patients($con)
{
$dbh=$con->query("select * from hospital.patient_history");
$dbh->execute();
if($dbh->rowCount()>0)
	{
	$x=1;
	 echo "<table><tr>
		<th>HEIGHT</th>
		<th>WEIGHT</th>
		<th>TEMPERATURE</th>
		<th>HEARTBEAT</th>
		<th>BLOODPRESSURE</th>
		<th>SYMPTOM</th>
		<th>MEDICATION</th>
		<th>DOCTOR_ID</th>
		<th>DIAGNOSIS</th>
		<th>BMI</th>
</tr>";
while($ROW=$dbh->fetch(PDO::FETCH_ASSOC))
{
echo"<tr>
<td>".$ROW["height"]."</td>
<td>".$ROW["weight"]."</td>
<td>".$ROW["temperature"]."</td>
<td>".$ROW["heartbeat"]."</td>
<td>".$ROW["bloodpressure"]."</td>
<td>".$ROW["symptom"]."</td>
<td>".$ROW["medication"]."</td>
<td>".$ROW["doctor_id"]."</td>
<td>".$ROW["diagnosis"]."</td>
<td>".$ROW["bmi"]."</td>
</tr>";
}
echo "</table>";
}
}
?><?php 
function veiw_staff($con)
{
$dbh=$con->query("select * from hospital.userdetails");
$dbh->execute();
if($dbh->rowCount()>0)
	{
	$x=1;
	 echo "<table><tr>
		<th>EMPLOYEE_NAME</th>
		<th>EMAIL_ADDRESS</th>
		<th>TEL_NO</th>
		<th>DEPARTMENT</th>
		<th>ROLE</th>
		<th>SHIFT_SCHEDULE</th>
		<th>IMAGE</th>
</tr>";
while($ROW=$dbh->fetch(PDO::FETCH_ASSOC))
{
echo"<tr>
<td>".$ROW["employee_name"]."</td>
<td>".$ROW["email_address"]."</td>
<td>".$ROW["tel_no"]."</td>
<td>".$ROW["department"]."</td>
<td>".$ROW["role"]."</td>
<td>".$ROW["shift_schedule"]."</td>
<td>".$ROW["image"]."</td>
</tr>";
}
echo "</table>";
}
}
?><?php 
function view_patients($con)
{
$dbh=$con->query("select * from hospital.patient_details");
$dbh->execute();
if($dbh->rowCount()>0)
	{
	$x=1;
	 echo "<table><tr>
		<th>PATIENT_NAME</th>
		<th>TEL_NO</th>
		<th>ADDRESS</th>
</tr>";
while($ROW=$dbh->fetch(PDO::FETCH_ASSOC))
{
echo"<tr>
<td>".$ROW["PATIENT_NAME"]."</td>
<td>".$ROW["Tel_no"]."</td>
<td>".$ROW["address"]."</td>
</tr>";
}
echo "</table>";
}
}
?><?php 
function viewpatient($con)
{
$dbh=$con->query("select * from hospital.patient_history");
$dbh->execute();
if($dbh->rowCount()>0)
	{
	$x=1;
	 echo "<table><tr>
		<th>HEIGHT</th>
		<th>WEIGHT</th>
		<th>TEMPERATURE</th>
		<th>HEARTBEAT</th>
		<th>BLOODPRESSURE</th>
		<th>SYMPTOM</th>
		<th>MEDICATION</th>
		<th>DOCTOR_ID</th>
		<th>DIAGNOSIS</th>
		<th>BMI</th>
</tr>";
while($ROW=$dbh->fetch(PDO::FETCH_ASSOC))
{
echo"<tr>
<td>".$ROW["height"]."</td>
<td>".$ROW["weight"]."</td>
<td>".$ROW["temperature"]."</td>
<td>".$ROW["heartbeat"]."</td>
<td>".$ROW["bloodpressure"]."</td>
<td>".$ROW["symptom"]."</td>
<td>".$ROW["medication"]."</td>
<td>".$ROW["doctor_id"]."</td>
<td>".$ROW["diagnosis"]."</td>
<td>".$ROW["bmi"]."</td>
</tr>";
}
echo "</table>";
}
}
?>