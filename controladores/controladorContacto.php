<?php
//$c = new Connection();

$nombre = $_POST["nombre"];
$email	= $_POST["email"];
$mensaje = $_POST["mensaje"];
	
$servername = "sql306.byethost.com";
$username = "b3_22963838";
$password = "matoki123";

//echo  ($nombre);
//echo  ($email);
//echo  ($mensaje);

try {
    $conn = new PDO("mysql:host=$servername;dbname=b3_22963838_empresa_courier", $username, $password);
	// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = "insert into contacto (nombre, email, mensaje) VALUES (?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$nombre, $email,$mensaje]);
	
    echo "Connected exitosa"; 
    }
catch(PDOException $e)
    {
    echo "Connection fallida: " . $e->getMessage();
    }
header("Location:/contacto.php");

?>