<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="wrap">
<div id="header"><a href="index.html">
	<img border="0" src="images/glasre1.GIF" width="172" height="239"></a><b><font size="6">
	<font color="#6633CC">Glasreinigung</font> <font color="#330099">Horst Guse</font></font></b></div>
<div id="navigation">

<div id="button">
<ul>
	<li><a href="index.html">Home</a></li>
	<li><a href="uns.html">Über uns</a></li>
	<li><a href="leistungen.html">Leistungen</a></li>
	<li><a href="preise.html">Preise</a></li>
	<li><a href="referenzen.html">Referenzen</a></li>
	<li><a href="kontakt.php">Kontakt</a></li>
</ul>
</div>

</div>
<div id="content">

	<h1>Kontakt</h1>



<h3>Wir haben Ihr Interesse geweckt?</h3>

	<div align=center>

<?php
$gesendet = $_POST['gesendet'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$betreff = $_POST['betreff'];
$nachricht = $_POST['nachricht'];
$email = $_POST['email'];

if ($gesendet == "Absenden") {
 # Ihre E-Mail-Adresse
 $an ="m.braeutigam@gmail.com; mail@glas-guse.de";

 # Diese Nachricht wird an Ihre E-Mail-Adresse gesendet
 $text ="Hallo,\n Sie haben eine neue Nachricht von $vorname $nachname erhalten:\n\n
 ====\n $nachricht\n====\n\nSie können $vorname $nachname unter dieser $email erreichen.";
 mail($an,$betreff,$text,"From: ".$email);
 echo "<b>Ihre Nachricht wurde gesendet!</b>";
}
else { ?>

<script type="text/javascript">
function eingaben_ueberpruefen(){
 var mail = document.Formular.email.value;
 if (document.Formular.vorname.value.length < 3){
  alert("Sie haben noch keinen Vornamen eingegeben!")
  document.Formular.vorname.focus();
  return false;
 }

 else if (document.Formular.nachname.value.length < 3){
  alert("Bitte geben Sie Ihren Nachnamen ein");
  document.Formular.nachname.focus();
  return false;
 }

 else if (mail.length < 10 || mail.indexOf ('@',0) == -1 || mail.indexOf ('.',0) == -1){
  alert("Bitte geben Sie eine gültige E-Mail-Adresse ein.")
  document.Formular.email.select();
  return false;
 }

 else if (document.Formular.betreff.value.length < 10){
  alert("Bitte geben Sie einen Betreff ein!")
  document.Formular.betreff.focus();
  return false;
 }

 else if (document.Formular.nachricht.value.length < 20){
  alert("Bitte geben Sie eine Nachricht ein!")
  document.Formular.nachricht.focus();
  return false;
 }

 else
 return true;
}
</script>

<form name="Formular" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"
 onSubmit="return eingaben_ueberpruefen();">
 <table cellPadding=4 cellSpacing=2 border=1>
  <tr>
   <td><b>Vorname:</b></td>
   <td><input type="text" name="vorname" size="35" maxlength="40"></td>
  </tr>
  <tr>
   <td><b>Nachname:</b></td>
   <td><input type="text" name="nachname" size="35" maxlength="40"></td>
  </tr>
  <tr>
   <td><b>E-Mail:</b></td>
   <td><input type="text" name="email" size="35" maxlength="40"></td>
  </tr>
  <tr>
   <td><b>Betreff:</b></td>
   <td><input type="text" name="betreff" size="45" maxlength="60"></td>
  </tr>
  <tr>
   <td colspan=2>
    <b>Nachricht:</b><br><textarea name="nachricht" cols="45" rows="10"></textarea>
   </td>
  </tr>
  <tr>
   <th colspan=2><br>
    <input type="submit" name="gesendet" value="Absenden"> * 
    <input type="reset">
   </th>
  </tr>
 </table>
</form>

<?php 
}
?>

</div>






	

	Glasreinigung <br>

	Horst Guse <br>

	Heyerhoffstr. 24<br>

	45770 Marl <br>

	Tel./Fax: (0 23 65) 91 34 96 <br>

	Mobil: 01 72 / 2 81 40 37 <br>

	E-Mail:<a title="Schreiben Sie eine Email an uns" href="mailto:mail@glas-guse.de?subject=Kontakt"> 

	mail@glas-guse.de</a> <p>

Wir werden uns schnellstmöglich mit Ihnen in Verbindung setzen!</p>

	<p>

&nbsp;</p>



</div>



<div id="footer">

<p>Tel./Fax: (0 23 65) 91 34 96 Mobil: 01 72 / 2 81 40 37 E-Mail: mail@glas-guse.de

</div>





</div>

</body>



</html>