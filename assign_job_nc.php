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







<form action="edit_assign_nc.php" method ="post">
<fieldset>
<legend>Enter the job ID and select a person to assign the job to</legend>
<p>Please enter the job ID:</p>
<tr>
<td><b>NC</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />


<p>Assign job to:</p>
	<select name="assigned_tech">

		<optgroup label="Calvinia Office">
			<option selected> </option>
			<option value="Andre.Strauss">Andre Strauss</option>
			<option value="Cyril.Links">Cyril Links</option>
			<option value="Franklin.Farao">Franklin Farao</option>
			<option value="Jonathan.Kotze">Jonathan Kotze</option>
			<option value="Manti.Mabizela">Manti Mabizela</option>
			<option value="Nicole.Gouws">Nicole Gouws</option>
			<option value="Other (Calvinia)">Other (Calvinia)</option>
		</optgroup>

		<optgroup label="De Aar Office">
			
			<option value="Freddy.Brown">Freddy Brown</option>
			<option value="Janushca.Beukes">Janushca Beukes</option>
			<option value="Ryan.Massok">Ryan Massok</option>
			<option value="Tamar.Raisi">Tamar.Raisi</option>
			<option value="Vuyo.Xelithole">Vuyo Xelithole</option>
			<option value="Willem.Booysen">Willem Booysen</option>
			<option value="Other (De Aar)">Other (De Aar)</option>
			
		</optgroup>	
		<optgroup label="Kimberley Office">
			<option value="Agatha.Louw">Agatha Louw</option>
			<option value="Kagisho.Ngakaemang">Kagisho Ngakaemang</option>
			<option value="Lungile.Tsengiwe">Lungile Tsengiwe</option>
			<option value="Mark.Horace">Mark Horace</option>
			<option value="Marumo.Setlhare">Marumo Setlhare</option>
			<option value="Ofentse.Rabuthu">Ofentse Rabuthu</option>
			<option value="Sonja.Oor">Sonja Oor</option>
			<option value="Other (Kimberley)">Other (Kimberley)</option>
		</optgroup>

		<optgroup label="Springbok Office">
			<option value="Anzelle.Julie">Anzelle Julie</option>
			<option value="Bianca.Cloete">Bianca Cloete</option>
			<option value="Gerald.Meyer">Gerald Meyer</option>
			<option value="Gerard.Oppel">Gerard Oppel</option>
			<option value="Jasper.Cloete">Jasper Cloete</option>
			<option value="Julian.Grace ">Julian Grace</option>
			<option value="Peter.Cloete">Peter Cloete</option>
			<option value="Rodney.Cloete">Rodney Coete</option>
			<option value="Venel.Edwards">Venel Edwards</option>
			<option value="Yvonne.Sneygans">Yvonne Sneygans</option>
			<option value="Other (Springbok)">Other (Springbok)</option>
			
		</optgroup>

		<optgroup label="Upington Office">
			<option value="Adri.Retief">Adri Retief</option>
			<option value="Carmen.Cloete">Carmen Cloete</option>
			<option value="Charlene.Orange">Charlene Orange</option>
			<option value="Catherine.vanEden">Catherine Van Eden</option>
			<option value="Dean.Amos">Dean Amos</option>
			<option value="Gertruida.Mpahlaza">Gertruida Mpahlaza</option>
			<option value="Jacques.Links">Jacques Links</option>
			<option value="Ricardo.Lubbe">Ricardo Lubbe</option>
			<option value="Other (Upington)">Other (Upington)</option>	
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
<a href="edit_nc.html">Back</a> 
</p>
</td>

</body>
</html>

