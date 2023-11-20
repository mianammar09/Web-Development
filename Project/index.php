<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SparkTrip - Home</title>
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

        /* Responsive Styles */
        @media (max-width: 768px) {
            .col-md-6 {
                margin-bottom: 20px;
            }
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
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content Section -->
    <div class="container">
        <div class="row">
            <!-- Most Favorite Posts Column -->
            <div class="col-md-6">
                <h2 class="mt-4 mb-4">Most Favorite Posts</h2>
                <ul>
                    <li>
                        <img src="assets/images/insta-post-1.png" alt="Post Image">
                        <p>Beautiful Sunset</p>
                    </li>
                    <li>
                    <img src="assets/images/insta-post-2.png" alt="Post Image">
                        <p>Adventure in the Mountains</p>
                    </li>
                    <li>
                    <img src="assets/images/insta-post-3.png" alt="Post Image">
                        <p>Exploring the City</p>
                    </li>
                </ul>
            </div>

            <!-- Recent Posts and Categories Column -->
            <div class="col-md-6">
                <h2 class="mt-4 mb-4">Recent Posts</h2>
                <ul>
                    <li>
                    <img src="assets/images/recent-post-1.jpg" alt="Post Image">
                        <p>City Lights at Night</p>
                    </li>
                    <li>
                    <img src="assets/images/recent-post-2.jpg" alt="Post Image">
                        <p>Sunrise in the Mountains</p>
                    </li>
                    <li>
                    <img src="assets/images/recent-post-3.jpg" alt="Post Image">
                        <p>Relaxing on the Beach</p>
                    </li>
                </ul>

                <h2 class="mt-4 mb-4">Post Categories</h2>
                <ul>
                    <li>Tech Base</li>
                    <li>Outdoor Tours</li>
                    <li>Camping</li>
                </ul>
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
