<html style="height: 100%;">
<head>
    <title>Ex3</title>
</head>
<body style="height: 100%;">

<?php
error_reporting(0);
$usefulSites=array(
    array("http://www.yandex.com","http://www.google.com", "http://www.altavista.com"),
    array("http://www.php.com","http://www.rusdoc.ru")
);

echo "<b>", "usefulSites:", "</b>","<br>";
foreach($usefulSites as $arr) {
    foreach($arr as $value) {
        echo "$value <br> ";
    }
    echo "<br>";
}
?>
</body>
</html>
