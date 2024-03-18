<?php
include "Dbconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];
    $completed = 0;

    $sql = "INSERT INTO listodo (title, completed) VALUES ('$task', $completed)";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

include "Dbdisconnection.php";
?>
