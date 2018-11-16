<?php
$con = mysql_connect("localhost","lxiwiuo","mySQL_zhch2004");
if (!$con)
  {
  //die('Could not connect: ' . mysql_error());
  echo mysql_error();
  }

mysql_select_db("lxiwiuo", $con);

$result = mysql_query("SELECT * FROM article");

echo json_encode(mysql_fetch_array($result));

mysql_close($con);
?>
