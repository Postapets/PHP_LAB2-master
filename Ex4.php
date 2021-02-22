<html style="height: 100%;">
<head>
    <title>Ex4</title>
</head>
<body style="height: 100%;">

<?php
error_reporting(0);
$arr1["yandex"]="http://www.yandex.com";
$arr1["google"]="http://www.google.com";
$arr1["altavista"]="http://www.altavista.com";
echo "<b>", "Массив:", "</b>","<br>";
    while($x = each($arr1)){
        echo print_r($x)."<br>";
    }

?>
</body>
</html>
