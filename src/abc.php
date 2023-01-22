<?php include "config.php"; ?>
// create query to select data
<?php
$sql = "SELECT * FROM projects";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1px">';
        echo "<tr>";
        echo "<th>Image</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . "<img src=" . $row['project_image'] . ' width=100px height="100px">' . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records found";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
// Close connection
mysqli_close($connect);
?>