<?php
	$servername = "localhost";
	$username = "root";
	$password = "b1b2b38412";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=vermelho", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully";
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }

	$test = "testing";
?> 