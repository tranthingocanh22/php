<html>
<body>
<?php
$array = array(1,2,3,4,5);

foreach ($array as $value){
    if ($value==3)continue;
    echo "value is $value <br/>";
}
?>
</body>
</html>