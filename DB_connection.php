<?php

//database connection details
$servername="localhost";
$username="root";
$password="";
$dbname="webtech";


//connection database 
$conn =new mysqli($servername,$username,$password,$dbname);

//checking the connection status 
if($conn->connect_error){
    die("connection failed : ".$conn->connect_error);
}

//creating table if not exists
$createTable = "CREATE TABLE IF NOT EXISTS user(userId primary key,name varchar(50),email varchar(40))";

if($conn->query($createTable)===true){

// //inserting data 
// $userName="monu siddiki";
// $email="m9800564411@gmail.com";

// $sqllnsert = "INSERT INTO user(userName,email) VALUES ($userName,$email)";

//     //checking insert status 
//     if($conn->query($sqllnsert)===true){
//         echo "Inserting data into database successful";
//     }else {
//         echo "inserting failed ";
//     }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sqlInsert = "INSERT INTO user (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sqlInsert) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sqlInsert . "<br>" . $conn->error;
    }

    }
else
{
    echo "Table already exists !!";
}
}

//selecting value from database 
$sqlselect = "SELECT name,email FROM user";
$result= query($sqlselect);


//having many row in table show all data 
if($result->num_rows>0){
    //show data of each row 
    while($row=$result->fetch_accoc){
        echo "Id : " .$row["id"]."-Username :".$row["name"]."-email:".$row["email"]."<br>";
    }
}else{
    echo "0 result found !!";
}


// close the database connection 
$conn->close();

?>