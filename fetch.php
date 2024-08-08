<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT * FROM cus_info";
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
            </tr>";
    // Fetch data and display it
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["uid"] . "</td>
        <td>" . $row["email"] . "</td>
        <td>" . $row["username"] . "</td>
        <td>" . $row["password"] . "</td>   
      </tr>";
    }
      echo "</table>";
    } else {
        echo "0 results";
    }
    
    // Close the database connection
    $conn->close();
    ?>
        
      