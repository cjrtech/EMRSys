<?php
// Connect to your database
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'my_webapp_db';

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

// Fetch data from the "appointments" table
$query = 'SELECT * FROM prescriptions';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Loop through the fetched data and display it in the table
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['medication'] . '</td>';
        echo '<td>' . $row['dosage'] . '</td>';
        echo '<td>' . $row['frequency'] . '</td>';
        echo '<td>' . $row['start_date'] . '</td>';
        echo '<td>' . $row['end_date'] . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="4">No prescriptions found found</td></tr>';
}

// Close the database connection
mysqli_close($conn);
?>
