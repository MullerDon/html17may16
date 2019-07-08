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







<form action="edit_assign_lim.php" method ="post">
<fieldset>
<legend>Enter the job ID and select a person to assign the job to</legend>
<p>Please enter the job ID:</p>
<tr>
<td><b>LIM</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />


<p>Assign job to:</p>
	<select name="assigned_tech">

		<optgroup label="Polokwane Office">
			<option value="Jannie.Ferreira">Jannie Ferreira</option>
			<option value="Joel.Hamese">Joel Hamese</option>
			<option value="Louis.JansevanVuuren">Louis Janse Van Vuuren</option>
			<option value="Thabo.Bela">Thabo Bela</option>
			<option value="Thatego.Magopane">Thatego Magopane</option>
			<option value="William.Ngobeni">William Ngobeni</option>
			<option value="Other (Polokwane)">Other (Polokwane)</option>
		</optgroup>

		<optgroup label="Thohoyandou Office">
			<option selected> </option>
			<option value="Albert.Nemurangoni">Albert Nemurangoni</option>
			<option value="Bjorn.Perks">Bjorn Perks</option>
			<option value="Koot.Kamfer">Koot Kamfer</option>
			<option value="Mulatwa.Ralufhe">Mulatwa Ralufhe</option>
			<option value="Nico.Theron">Nico Theron</option>
			<option value="Raymond.Magaela">Raymond Magaela</option>
			<option value="Refilwe.Raito">Refilwa Raito</option>
			<option value="Titus.Mosweu">Titus Mosweu</option>
			<option value="Webster.Maringa">Webster Maringa</option>
			<option value="Yvonne.Sello">Yvonne Sello</option>
			<option value="Other (Thohoyandou)">Other (Thohoyandou)</option>
			
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
<a href="edit_lim.html">Back</a> 
</p>
</td>

</body>
</html>

