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







<form action="edit_assign_gau.php" method ="post">
<fieldset>
<legend>Enter the job ID and select a person to assign the job to</legend>
<p>Please enter the job ID:</p>
<tr>
<td><b>GAU</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />


<p>Assign job to:</p>
	<select name="assigned_tech">

		<optgroup label="Bolepi Office">
			<option selected> </option>
			<option value="Abednego.Gumede">Abednego Gumede</option>
			<option value="Dan.Maputle">Dan Maputle</option>
			<option value="Dithuso.Mogapi">Dithuso Mogapi</option>
			<option value="Joseph.Nkosi">Joseph Nkosi</option>
			<option value="Kabelo.Moabi">Kabelo Moabi</option>	
			<option value="Marlin.Coert">Marlin Coert</option>
			<option value="Peter.Lekala">Peter Lekala</option>
			<option value="Simon.Tshwana">Simon Tshwana</option>
			<option value="Victor.Mafata">Victor Mafata</option>
			<option value="Other (Bolepi)">Other (Bolepi)</option>
		</optgroup>	
		<optgroup label="Irene Office">
			<option value="Ambrose.Gambushe">Ambrose Gambushe</option>
			<option value="Charmaine.Shibambo">Charmaine Shibambo</option>
			<option value="Dikobote.Makhutle">Dikobote Makhutle</option>
			<option value="Duduzile.Dzondzi">Duduzile Dzondzi</option>
			<option value="Dumisani.Mhlophe">Dumisani Mhlophe</option>
			<option value="Emily.Maredi">Emily Maredi</option>
			<option value="Floyd.Ngwato">Floyd Ngwato</option>
			<option value="Hendrik.Swart">Hendrik Swart</option>
			<option value="Jessica.Erasmus">Jessica Erasmus</option>
			<option value="John.Khanyile">John Khanyile</option>
			<option value="Joseph.Lekwadu">Joseph Lekwadu</option>
			<option value="Lati.Selepe">Lati Selepe</option>
			<option value="Machoene.Thupana">Machoene Thupana</option>
			<option value="Misokuhle.Bulayane">Misokuhle Bulayane</option>
			<option value="Moaginyane.Molalugi">Moaginyane Molalugi</option>
			<option value="Nomvuso.Busizi">Nomvuso Busizi</option>
			<option value="Peter.Mabasa">Peter Mabasa</option>
			<option value="Phillip.Mothokoa">Phillip Mothokoa</option>
			<option value="Riaan.Lourens">Riaan Lourens</option>
			<option value="Rydall.Jardine">Rydall Jardine</option>
			<option value="Sandile.Mdose">Sandile Mdose</option>
			<option value="Saul.Hlatswayo">Saul Hlatswayo</option>	
			<option value="Segale.Motseto">Segale Motseto</option>
			<option value="Sello.Motsetso">Sello Motsetso</option>
			<option value="Simon.Molato">Simon Molato</option>
			<option value="Solly.Shaku">Solly Shaku</option>
			<option value="Thabiso.Sekhoto">Thabiso Sekhoto</option>
			<option value="Velelo.Mazele">Velelo Mazele</option>
			<option value="Webster.Ngoepe">Webster Ngoepe</option>
			<option value="Zamikhaya.Magogotya">Zamikhaya Magogotya</option>
			<option value="Other (Irene)">Other (Irene)</option>
		</optgroup>
			<optgroup label="ORT Office">
			<option value="Bawinile.Mgedesi">Bawinile Mgedesi</option>
			<option value="Dineo.Matsana">Dineo Matsana</option>
			<option value="Denzil.Subramani">Denzil Subramani</option>
			<option value="Enny.Tsebe">Enny Tsebe</option>
			<option value="Kobus.Viljoen">Kobus Viljoen</option>
			<option value="Menthiam.Sebesho">Menthiam Sebesho</option>
			<option value="Thabo.Molemohi">Thabo Molemohi</option>
			<option value="Sifiso.Mkwanazi">Sifiso Mkwanazi</option>
			<option value="Yandiswa.Sahula">Yandiswa Sahula</option>
			<option value="Zanele.Magomezulu">Zanele Magomezulu</option>
			<option value="Other (ORT)">Other (ORT)</option>			
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
<a href="edit_gau.html">Back</a> 
</p>
</td>

</body>
</html>

