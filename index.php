<?php
include("db.php");

$sql = "SELECT * FROM vw_employee_full_info ORDER BY employee_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Full Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Employee Full Information</h2>

<table>
    <tr>
        <th>Employee ID</th>
        <th>Name</th>
        <th>Job Title</th>
        <th>Employment Date</th>
        <th>Manager Name</th>
        <th>Department Name</th>
        <th>Location</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['employee_id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['job_title']."</td>";
            echo "<td>".$row['employment_date']."</td>";
            echo "<td>".$row['manager_name']."</td>";
            echo "<td>".$row['department_name']."</td>";
            echo "<td>".$row['location']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No records found</td></tr>";
    }
    ?>

</table>

</body>
</html>

<?php
$conn->close();
?>