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
$b = 0;
function ФИО()
{
    return array ("Иванов", "Иван","Иванович");
}
list ($фамилия, $имя, $отчество) = ФИО();
echo "<table>";
echo "<tr><td>фамилия: <td>$фамилия";
echo "<tr><td>имя: <td>$имя";
echo "<tr><td>отчество: <td>$отчество</table>";
$a = array(2, 4, 5, 5);
print_r($a);
{
    echo "sum(a) = " . $b = array_sum($a)/count($a) . "\n";


}

if ($b < 3) {
    echo "Стипендия = 0";
}
elseif (3 <= $b && $b < 4) 
{
    echo "Стипендия = 1500";
}
elseif (4 <= $b && $b < 5)
{
    echo "Стипендия = 2300";
}
?>
</body>
</html>