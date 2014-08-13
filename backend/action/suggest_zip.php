<?php

if ( !isset($_REQUEST['term']) )
    exit;

$dblink = mysql_connect('localhost', 'root', '') or die( mysql_error() );
mysql_select_db('inscripcion');

//$rs = mysql_query('select zip, state, county from zipcode where county like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by county asc limit 0,10', $dblink);



$rs = mysql_query('select dni,  apellidos, nombres from personas where apellidos like "'. $_REQUEST['term'] .'%" order by nombres asc limit 0,10', $dblink);
//$rs = mysql_query('select idempleados, nombres,departamento  from empleados where nombres like  "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by nombres asc limit 0.10', $dblink);
$data = array();
if ( $rs && mysql_num_rows($rs) )
{
    while( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
    {
        $data[] = array(
            'label' => $row['dni'] .', '. $row['apellidos'] .' '. $row['nombres'] ,
            'value' => $row['dni']
        );
    }
}

echo json_encode($data);
flush();

