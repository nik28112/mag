<html>
<head>
<title>Создание таблицьк/title>
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
    echo "Не могу соединиться сервером базы данных";
     exit();
}
echo "Соединение с сервером базы данных произошло успешно";

mysql_select_db($dbname);
$myquery="CREATE TABLE SGroup (GrpPK INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
Num VARCHAR(20),
DepFK INT NOT NULL,
Year INT,
Quantify INT,
Rating INT,
CONSTRAINT FK_Dep2 FOREIGN KEY(DepFK) REFERENCES DEPARTMENT (DepPK)
 ON DELETE CASCADE ON UPDATE CASCADE)";

if(!mysql_db_query($dbname, $myquery, $link))
{
echo "Не могу выполнить запрос";
exit();
}

echo "<br>Banpod успешно выполнен таблица добавлена ";

mysql_close($link);
?> </body>
</html>
