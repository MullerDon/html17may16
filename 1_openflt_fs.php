<html>
<head>

<title>All Open Jobs</title>
</head>

<body>
<style type="text/css">

.footer {text-align: left;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>


<b>All open jobs in the Free State database that have not been completed</b><br>
<br />
<?php


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT * FROM job_track_fs
WHERE fault_status= 'not complete'";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0'cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date logged</th><th>Status</th><th>Location</th><th>Job assigned to</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "FS".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['fault_status'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td>";

Echo "</tr>";

}

echo "</table>";


mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="management_fs.php">Back</a> 
</p>
</td>

</body>
</html>
