<?
    //Developer: Carlos
    //database:conexion-Database engine conection
    //credenciales
    $host = "127.0.0.1"; //127.0.0.1,localhost
    $port = "3306";
    $username = "carlos";
    $password = "1234";
    $dbname = "portafolio";
    //Mysqul connection
    $conn = new mysqli($host, $username, $password, $dbname, $port);
    //Check conmecttion
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }
    
    // else {
    //     echo "Connection succesfully";
    // }
?>