<?php
include "Dbconnection.php";

$sql = "SELECT * FROM listodo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    echo "<th>Title</th>";
    echo "<th>Status</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".($row['completed'] ? 'Completed' : 'Not Completed')."</td>";
        echo "<td>
                <a href='update_task_status.php?id=".$row['id']."' class='btn btn-info btn-sm'>Update</a> 
                <a href='delete_task.php?id=".$row['id']."' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this task?');\">Delete</a>
            </td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "No tasks found";
}

include "Dbdisconnection.php";
?>
