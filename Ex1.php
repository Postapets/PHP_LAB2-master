<html style="height: 100%;">
<head>
    <title>Ex1</title>
</head>
<body style="height: 100%;">
<?php
    error_reporting(0);
    //объявляем массивы и простую переменную
    $x = 1;
    $arr1 = array();

    $arr2= array("http://www.yandex.com",
        "http://www.google.com",
        "http://www.altavista.com");

    $arr3=array("yandex"=>"http://www.yandex.com",
        "google"=>"http://www.google.com",
        "bing"=>"http://www.altavista.com");
    $arr4 = array(1,"asd",array(2,3));
    //вывод размеров массивов
    echo '1)'.sizeof($arr1).'<br />'.' 2)'. sizeof($arr2).'<br />'.' 3)'. sizeof($arr3).'<br />';
    //присвоение перменным ключей и значений массивов
    $key1 = array_keys($arr1); $key2 = array_keys($arr2); $key3 = array_keys($arr3);
    $value1 = array_values($arr1); $value2 = array_values($arr2); $value3 = array_values($arr3);
    //вывод ключей и значений массивова в цикле
    for($i = 0; $i<3; $i++){
        echo "1)key: ".$key1[$i].' value: '.$value1[$i];
        echo ' 2)key: '.$key2[$i].' value: '.$value2[$i];
        echo ' 3)key: '.$key3[$i].' value: '.$value3[$i].'<br />';
    }
    echo "<br>print_r and var_dump for arr2:<br>";
    echo print_r($arr2)."<br>", var_dump($arr2)."<br>";

    echo "<br>arr4 with array inside: <br>";
    echo print_r($arr4)."<br>", var_dump($arr4)."<br>";

    echo "<br>simple value: <br>";
    echo print_r($x)."<br>", var_dump($x)."<br>";
?>
</body>
</html>
