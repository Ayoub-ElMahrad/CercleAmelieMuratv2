<html>
<body>
<?

include("connexion.php");

$resultatae=mysql_query("SELECT ae FROM membres ORDER BY ae;");

echo "<br>nb est: ",mysql_numrows($resultatae);


for ($i=0 ; $i<mysql_numrows($resultatae) ; $i++)
{
$ae=mysql_result($resultatae,$i,'ae');
echo "<br>",$ae;
}

?>
</body>
</html>
