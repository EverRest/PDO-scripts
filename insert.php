<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users&pets";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (users_id, name, password, phone_number, email)
    VALUES ('7', 'Doe', '1234567', '0725454123','john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

//close connection

$conn = null;

?>