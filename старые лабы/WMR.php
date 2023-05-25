<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host="localhost"; $user="root"; $password="";
$dbname="Prepodi";
$link=mysql_connect($host, $user, $password);
mysql_select_db($dbname);
echo "<html> <head><title>Тaблица преподы</title></head><body>"; 
echo "<h1>Таблица преподы/h1>";
echo "<table border=1 width=60% bgcolor=gold>";
echo "<tr><td>PrepPR</td>";
echo "<td>Name</td>";
echo "<td>Surname</td>";
echo "<td>Klass</td>";
echo "<td>Fireon</td></tr>";

$r=mysql_query("SELECT * FROM Prepodi", $link);
$rows=mysql_num_rows($r);
$cols=mysql_num_fields($r);

for($i=0; $i<$rows; $i++)
{
    echo "<tr>";
    $f=mysql_fetch_array($r);
    echo "<td>$f[PrepPR]</td>";
    echo "<td>$f[Name]</td>";
    echo "<td>$f[Surname]</td>";
    echo "<td>$f[Klass]</td>";
    echo "<td>$f[Fireon]</td>";
    echo "</tr>";
}
echo "</table>";
echo "</body></html>";
?>

</body>
</html>