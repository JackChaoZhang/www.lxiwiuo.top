<?php

$value1="abc";
$value2="def";

$res["key1"]=$value1;
$res["key2"]=$value2;

echo json_encode($res);//将数组转换为json格式并通过echo返回

?>