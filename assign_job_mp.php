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







<form action="edit_assign_mp.php" method ="post">
<fieldset>
<legend>Enter the job ID and select a person to assign the job to</legend>
<p>Please enter the job ID:</p>
<tr>
<td><b>MP</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />


<p>Assign job to:</p>
	<select name="assigned_tech">

	<optgroup label="Nelspruit Office">
			<option selected> </option>
			<option value="Bongani.Chibi">Bongani Chibi</option>
			<option value="Chris.Nkosi">Chris Nkosi</option>
			<option value="Isa.Mlambo">Isa Mlambo</option>
			<option value="Lebogang.Mashile">Lebogang Mashile</option>
			<option value="Nondumiso.Gwebu">Nondumiso Gwebu</option>
			<option value="Phumza.Mbali">Phumza Mbali</option>
			<option value="Rudzani.Malala">Rudzani Malala</option>
			<option value="Sizwe.Mlima">Sizwe Mlima</option>
			<option value="Tebogo.Moloi">Tebogo Moloi</option>
			<option value="Thabo.Bela">Thabo Bela</option>
			<option value="Thato.Mothopi">Thato Mothopi</option>
			<option value="Thuso.Otukile">Thuso Otukile</option>
			<option value="Webster.Maringa">Webster Maringa</option>
			<option value="Winnie.Mlambo">Winnie Mlambo</option>
			<option value="Other (Nelspruit)">Other (Nelspruit)</option>
			
		</optgroup>
		<optgroup label="Ermelo Office">
			<option value="Bongani.Ntshangasi">Bongani Ntshangasi</option>
			<option value="Elsie.Mekwa">Elsie Mekwa</option>
			<option value="Ken.Short">Ken Short</option>
			<option value="Wayne.Smit">Wayne Smit</option>
			<option value="Other (Ermelo)">Other (Ermelo)</option>
			
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
<a href="edit_mp.html">Back</a> 
</p>
</td>

</body>
</html>

