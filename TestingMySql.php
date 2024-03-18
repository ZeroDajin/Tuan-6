<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456";

    //create connection
    $conn = new mysqli($servername,$username,$password);

    //testin connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    //create database
    $sql = "CREATE DATABASE PHPTestMysql";
    if($conn->query($sql)===TRUE){
        echo "<br> Database created Successfully";
    }else{
        echo "<br> Error creating database". $conn->error;
    }
    $conn = new mysqli($servername,$username,$password,"PHPTestMysql");
    // Tạo bảng
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
    echo "<br> Table MyGuests created successfully";
    } else {
    echo "<br> Error creating table: " . $conn->error;
    }
    //Thêm dữ liệu
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    if ($conn->query($sql) === TRUE) {
        echo "<br> New record created successfully";
    } else {
        echo "<br> Error: " . $sql . "<br>" . $conn->error;
    }
    //close connection

    $conn->close();
?>