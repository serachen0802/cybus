<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$oid=$_POST['oid'];

echo $oid;

$a = $db->query("DELETE FROM Corder WHERE oid='".$oid."'" );

// header('Location: Search2.php');
?>