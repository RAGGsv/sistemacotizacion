
<?php
 $serverName = "RAG-5\SQLEXPRESS"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"cotizador_bs3");
$con = sqlsrv_connect( $serverName, $connectionInfo);

if( $con ) {
    
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
} 
 ?> */
