<?php
include "Dbconnection.php";
$sql = "CREATE TABLE listodo (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    completed BOOLEAN
)";
if ($conn->query($sql) === TRUE) {
    echo "Table listodo created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
include "Dbdisconnection.php";
?>
