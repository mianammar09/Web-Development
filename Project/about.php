<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SparkTrip</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #343a40;
            padding: 10px 0;
        }

        header a {
            color: #fff;
        }

        header a:hover {
            color: #17a2b8;
        }

        .container {
            margin-top: 50px;
        }

        .team-member {
            margin-bottom: 50px;
            text-align: center;
        }

        .team-member img {
            max-width: 150px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .team-member h3 {
            color: #343a40;
        }

        .team-member p {
            color: #555;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About Us</a>
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
        <h2 class="mt-4 mb-4">About Us</h2>

        <div class="row team-member">
            <div class="col-md-4">
                <img src="assets/images/profile 2.jpg" alt="Ammar's Photo">
            </div>
            <div class="col-md-8">
                <h3>Ammar</h3>
                <p class="lead">Student of BS Software Engineering, 5th semester</p>
                <p>Passionate about web development and creating innovative solutions. Ammar is dedicated to crafting seamless user experiences and enjoys working on cutting-edge technologies.</p>
            </div>
        </div>

        <div class="row team-member">
            <div class="col-md-4">
                <img src="assets/images/wasi.jpeg" alt="Wasi's Photo">
            </div>
            <div class="col-md-8">
                <h3>Wasi</h3>
                <p class="lead">Student of BS Software Engineering, 5th semester</p>
                <p>Enthusiastic about software engineering and dedicated to learning and growing. Wasi is keen on developing scalable and efficient solutions, and he enjoys tackling complex challenges in the world of technology.</p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
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
