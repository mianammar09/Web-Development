<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Blog_Site";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the total number of users
$sql = "SELECT COUNT(*) as totalUsers FROM users";
$result = $conn->query($sql);

$totalUsers = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalUsers = $row['totalUsers'];
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - SparkTrip</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #17a2b8;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #fff;
        }

        .container {
            margin-top: 50px;
        }

        /* Add responsive padding to columns */
        .col-md-6 {
            padding: 15px;
        }

        /* Style list items */
        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            padding: 10px 0;
        }

        /* Style footer */
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 15px 0;
        }

        /* Custom styles for image and post name */
        img {
            max-width: 100%;
            height: auto;
        }

        p {
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">SparkTrip</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<!-- Main Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-4 mb-4">Admin Dashboard</h2>
            <p>Welcome, Admin! This is your dashboard.</p>

            <!-- Additional Admin-related Content -->
            <div class="dashboard-content">
                <h4>Recent Activities</h4>
                <ul>
                    <li>Reviewed user accounts</li>
                    <li>Updated site settings</li>
                    <li>Checked website analytics</li>
                </ul>

                <h4>Statistics</h4>
                <p>Total Users: <?php echo $totalUsers; ?></p>
                <p>Total Posts: 500</p>

                <!-- You can add more elements as needed -->
            </div>
        </div>
    </div>
</div>

    <!-- Footer Section -->
    <footer class="mt-5">
        <div class="container text-center">
            <p>&copy; <?php echo date("Y"); ?> SparkTrip. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap and JavaScript Dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
