<!-- hello -->
<?php
    $first_name = validate($_POST['fName']);
    $last_name = validate($_POST['lName']);
    $age = validate($_POST['age']);
    $roll = validate($_POST['roll']);

    function validate($val) {
        $sanitizedVal = htmlspecialchars($val);
        $sanitizedVal = trim($sanitizedVal);
        $sanitizedVal = stripslashes($sanitizedVal);
        return $sanitizedVal;
    }

   // MySQL connection parameters
   $host = '172.17.0.2'; // The IP address of the MySQL Docker container
   $username = 'root';
   $password = 'iloveu';

   // Create MySQL connection
   $connection = new mysqli($host, $username, $password);
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    } else {
        echo "Connection successful";
    }


    $sql = 'CREATE DATABASE IF NOT EXISTS test';
    if ($connection->query($sql) === true) {
        echo "Database created successfully!";
    } else {
        echo "Failed to create database: " . $connection->error;
    }

    echo $first_name;
    echo $last_name;
    echo $age;
    echo $roll;
?>
