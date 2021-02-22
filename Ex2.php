<html style="height: 100%;">
<head>
    <title>Ex2</title>
</head>
<body style="height: 100%;">

<?php
error_reporting(0);

$arr5=array(0=>"http://www.yandex.com",
            1=>"http://www.google.com",
            "2"=>"http://www.altavista.com");
$arr6=array(2=>"http://www.yandex.com",
            4=>"http://www.google.com",
            1=>"http://www.altavista.com");

echo "<h1 align = 'center'>arr5: </h1>","<table align='center' bgcolor='#b0b0b0' border= '1px'>
    <tr> <td>Ключ</td> <td>Значение</td> </tr> ";
    foreach ($arr5 as $key => $value)
    {
        echo "<tr> <td>$key</td> <td>$value</td> </tr>";
    }
echo "</table>", "<h1 align = 'center'>arr6: </h1>","<table align='center' bgcolor='#b0b0b0' border= '1px'>
    <tr> <td>Ключ</td> <td>Значение</td> </tr> ";
    foreach ($arr6 as $key => $value)
    {
        echo "<tr> <td>$key</td> <td>$value</td> </tr>";
    }
echo "</table>";


echo "<br>","Сокращенная форма arr5: ", "<br>";
foreach($arr5 as $x)
{
    echo "$x <br />";
}


$arr=array(0=>"первый",  1=>"второй", 3=>"четверытй", 4=>"пятый", 2=>"третий");
//По циклу вывод производится относительно значений ключей, порядок ожидаемый
echo "<br>","for and count: ", "<br>";
for($i = 0; $i <= count($arr); $i++)
    {
        echo "$arr[$i] <br/>";
    }
//с помощью foreach вывод производится подряд
echo "foreach: ", "<br>";
foreach($arr as $x)
{
    echo "$x <br/>";
}
?>
</body>
</html>
