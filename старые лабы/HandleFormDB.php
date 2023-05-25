<html>
<head>
<title>обработка данных формы</title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$dbname="Prepodi";
$tablename="Prepodi";
$PrepPR=$_POST['[PrepPR'];
$Name=$_POST['Name'];
$Surname=$_POST['Surname'];
$Klass=$_POST['Klass'];
$Fireon=$_POST['Fireon'];
$link=mysql_connect($host, $user, $password);
if (!$link)
{
    echo "Не могу соединиться с сервером базы данных";
    exit();
}
echo "Соединение с сервером базы данных произошло успешно";
mysql_select_db($dbname);
$myquery="DELETE FROM Prepodi WHERE Name = 'Alex'";
$myquery="INSERT INTO $tablename VALUES ('0', '$Name', '$Surname', '$Klass', '$Fireon')";
if(!mysql_db_query($dbname, $myquery, $link))
{
echo "Не могу выполнить запрос";
exit();
}
echo "<br>Запрос успешно выполнен - Запись добавлена ";

mysql_close($link);
?>
</body>
</html>
