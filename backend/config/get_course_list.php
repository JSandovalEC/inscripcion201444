<?php
require_once "connection_bd.php";
conectar();
$q = strtolower($_GET["q"]);
if (!$q) return;


$sql = "select DISTINCT CONCAT(apellidos,' ',nombres) as completo, dni from personas where apellidos LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['completo'];
    $dni=$rs['dni'];
	echo "$cname\n";
	

/*

$sql = "select DISTINCT course_name as course_name from course where course_name LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['course_name'];
	echo "$cname\n";

*/

}
?>