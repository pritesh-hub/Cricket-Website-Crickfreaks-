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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Admin Panel</title>
</head>

<body>
<!-- --------------------------------------------------------------------------------------------------------------------- -->


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

    // SQL query to fetch user count
    $userCountSql = "SELECT COUNT(*) AS userCount FROM cus_info";
    $userCountResult = $conn->query($userCountSql);

    // Check if the query was successful
    if ($userCountResult->num_rows > 0) {
        $userCountRow = $userCountResult->fetch_assoc();
        $userCount = $userCountRow["userCount"];
    } else {
        $userCount = 0;
    }
    ?>


<!-- ---------------------------------------------------------------------------------------------------------------------------- -->
    <div class="side-menu">
        <div class="brand-name">
            <h1>Menu</h1>
        </div>
        <ul>
            <li><i class="fa-solid fa-chart-line"></i>&nbsp; <a href="#"><span>Dashboard</span></a> </li>
            <!-- <li><i class="fa-regular fa-newspaper"></i>&nbsp; <a href=""><span>News</span></a> </li>
            <li><i class="fa-regular fa-image"></i>&nbsp; <a href="gallery.html"><span>Gallery</span></a> </li>
            <li><i class="fa-regular fa-face-smile-wink"></i>&nbsp; <a href="meme.html"><span>Meme's</span></a> </li>
            <li><i class="fa-regular fa-user"></i>&nbsp; <a href="user.html"><span>Users</span></a> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <a href="help.html"><span>Help</span></a></li>
            <li><img src="settings.png" alt="">&nbsp; <a href="#"><span>Settings</span></a> </li> -->
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Site Content</a>
                    <i class="fa-regular fa-2x fa-bell"></i>
                    <!-- <div class="img-case">
                        <i class="fa-regular fa-user"></i>
                    </div> -->
                    <i class="fa-regular fa-2x fa-user"></i>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                    <h1><?php echo $userCount; ?></h1>
                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Content</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <?php
    // Close the database connection
    $conn->close();
    ?>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Active user</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350</h1>
                        <h3>Total Content</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>All Users</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Uid</th>
                            <th>Username</th>
                            <th>email</th>
                            <th>Password</th>
                        </tr>
                        <?php
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
                            ?>
                        
                    </table>
                </div>
                <!-- <div class="new-students">
                    <div class="title">
                        <h2>New User</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Password</th>
                        </tr>
                        <tr>
                            <td><i class="fa-regular fa-user"></i></td>
                            <td>John Steve Doe</td>
                            <td>abc@123</td>
                        </tr>
                        <tr>
                            <td><i class="fa-regular fa-user"></i></td>
                            <td>John Steve Doe</td>
                            <td>abc@123</td>
                        </tr>
                        <tr>
                            <td><i class="fa-regular fa-user"></i></td>
                            <td>John Steve Doe</td>
                            <td>abc@123</td>
                        </tr>
                        <tr>
                            <td><i class="fa-regular fa-user"></i></td>
                            <td>John Steve Doe</td>
                            <td>abc@123</td>
                        </tr>

                    </table>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>
<?php
$conn->close();
?>