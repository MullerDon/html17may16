<html>
<head>

<title>Job Assignment</title>
</head>

<body>
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>







<form action="edit_assign_kzn.php" method ="post">
<fieldset>
<legend>Enter the job ID and select a person to assign the job to</legend>
<p>Please enter the job ID:</p>
<tr>
<td><b>KZN</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />


<p>Assign job to:</p>
	<select name="assigned_tech">

		<optgroup label="Durban/King Shaka Office">
			<option selected> </option>
			<option value="Ashok.Rampersad">Ashok Rampersad</option>
			<option value="Desmond.Dimba">Desmond Dimba</option>
			<option value="Dhirusha.Raghunandan">Dhirusha Ragunandan</option>
			<option value="Edward.Barnies">Edward Barnies</option>
			<option value="Gus.Mckay">Gus Mckay</option>
			<option value="Jacque.Jonker">Jacque Jonker</option>
			<option value="Johann.Swanepoel">Johann Swanepoel</option>
			<option value="Johannes.Masinge">Johannes Masinge</option>
			<option value="Lucky.Makhwedzha">Lucky Makhwedzha</option>
			<option value="Mcabango.Biyela">Mcabango Biyela</option>
			<option value="Mduduzi.Mthembu">Mduduzi Mthembu</option>
			<option value="Ntombi.Mgobhozi">Ntombi Mgobhozi</option>
			<option value="Sanjeev.Sewnarian">Sanjeev Sewnarian</option>
			<option value="Siyabonga.Mthethwa">Siyabonga Mthethwa</option>
			<option value="Stacey.Colborne">Stacey Colborne</option>
			<option value="Vulindlela.Nzimande">Vulindlela Nzimande</option>
			<option value="Wisani.Maluleke">Wisani Maluleke</option>
			<option value="Wiseman.Dlamini">Wiseman Dlamini</option>
			<option value="Yolande.Maharaj">Yolande Maharaj</option>
			<option value="Other (Durban/King Shaka)">Other (Durban/King Shaka)</option>
			
		</optgroup>

		<optgroup label="Technologist Group">
			<option value="Ambrose.Gambushe">Ambrose Gambushe</option>
			<option value="Charmaine.Shibambo">Charmaine Shibambo</option>
			<option value="Davis.Moshweunyane">Davis Moshweunyane</option>
			<option value="Donald.Muller">Donald Muller</option>	
			<option value="Dumisani.Mhlophe">Dumisani Mhlophe</option>
			<option value="Edward.Barnies">Edward Barnies</option>
			<option value="Floyd.Ngwato">Floyd Ngwato</option>
			<option value="Lati.Selepe">Lati Selepe</option>
			<option value="Natheer.Tofa">Natheer Tofa</option>
			<option value="Dumisani.Mhlophe">Dumisani Mhlophe</option>
			<option value="Peter.Roux">Peter Roux</option>
			<option value="Riaan.Lourens">Riaan Lourens</option>
			<option value="Sandile.Mdose">Sandile Mdose</option>
			<option value="Tankiso.Seboka">Tankiso Seboka</option>
			<option value="Webster.Ngoepe">Webster Ngoepe</option>
			<option value="Zamikhaya.Magogotya">Zamikhaya Magogotya</option>
			<option value="Technologists - Other">Technologists - Other</option>
		</optgroup>	
	</select>

<br />
<br />
<br />
<!--
<p>Enter the assigned date in <b>YYYY-MM-DD</b> format below:</p>
<tr>
<td><input type="text" name="date_assigned"></td>
</tr>
-->
<br />
<br />
</fieldset>

	<input type="submit" value="Assign Job">
	<input type="reset" value="Clear all entries" />

</form>







<td>
<p class="footer">
<a href="edit_kzn.html">Back</a> 
</p>
</td>

</body>
</html>

