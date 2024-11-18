<?php
echo "<h1>practica:Te has conectado con exito a tu servidor </h1><br><br>";

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:melanie.database.windows.net,1433; Database = progweb", "melanie", "melS0406");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

print "la conexion se hizo correctamente";

}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "melanie", "pwd" => "melS0406", "Database" => "progweb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:melanie.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
