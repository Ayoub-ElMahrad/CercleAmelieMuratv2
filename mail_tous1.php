<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<br>
<?
include("include_mdp.php");
?>


MESSAGE D'INFORMATION<br><br>

<form method="POST" action="mail_tous2.php">
<input type="hidden" name="mdp" value="<?echo $mdp;?>">

objet:<br>
<input type="text" name="objet">
<br><br>

message:<br>
<textarea rows="12" name="message" onkeyup="this.value = this.value.slice(0, 800)" onchange="this.value = this.value.slice(0, 800)" cols="70" >

</textarea>
<input type="submit" value="OK">

</form>

</body></html>



