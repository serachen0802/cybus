<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$oid=$_POST['oid'];

$a = $db->query("DELETE FROM bus_corder WHERE oid='".$oid."' " );
?>