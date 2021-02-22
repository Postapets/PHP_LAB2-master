<html style="height: 100%;">
<head>
    <title>Ex5</title>
</head>
<body style="height: 100%;">
<?php
error_reporting(0);
$arr7["yandex"] = "http://www.yandex.com";
$arr7["google"] = "http://www.google.com";
$arr7["altavista"] = "http://www.altavista.com";
echo "<br><h1 align ='center'>arr7</h1><br>";
foreach($arr7 as $key=>$val){
    $x = [$key, $val];
    print_r($x);
}
echo "<br><h1 align ='center'>_SERVER</h1><br>";
foreach($_SERVER as $key=>$val){
    echo "<br>$key => $val";
}
?>
</body>
</html>
