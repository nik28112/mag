<html>
<head>
<title>Соединение с сервером базы данных </title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$dbname="Prepodi";
$link=mysql_connect($host, $user, $password);
if (!$link)
{
    echo "Не могу соединиться с сервером базы данных"; 
    exit();
}
echo "Соединение c сервером базы данных произошло успешно";

mysql_select_db($dbname);

$myquery="INSERT INTO Prepodi(name,surname, klass, fireon)
VALUES('Естественных','Кривоносов','9','Gera')";

if(!mysql_query($myquery,$link))
{
 echo "Не могу выполнить запрос";
 exit();
}

echo "<br>запрос успешно выполнен - Запись добавлена";
mysql_close($link);
?>
</body>
</html>
