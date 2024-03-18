<?php
include "Dbconnection.php";

$sql = "SELECT * FROM listodo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>";
        echo $row['title'];
        echo "<span class='float-right'>";
        echo "<a href='update_task_status.php?id=".$row['id']."' class='btn btn-sm btn-info'>Update</a> ";
        echo "<a href='delete_task.php?id=".$row['id']."' class='btn btn-sm btn-danger' onclick=\"return confirm('Are you sure you want to delete this task?');\">Delete</a>";
        echo "</span>";
        echo "</li>";
    }
} else {
    echo "<li class='list-group-item'>No tasks found</li>";
}

include "Dbdisconnection.php";
?>
