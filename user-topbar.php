<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        nav {
            background-color: #E42E2E;
            color: white;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-link {
            color: white !important;
            font-size: 16px;
            margin: 0 10px;
        }

        .nav-link:hover {
            color: #ffc107 !important;
        }

        .btn-login {
            background-color: white;
            color: #E42E2E;
            border-radius: 5px;
            padding: 5px 15px;
            font-weight: bold;
            border: none;
            transition: 0.3s;
        }

        .btn-login:hover {
            background-color: #ffc107;
            color: white;
        }

        nav .logo-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            cursor: pointer;
        }

        nav .logo {
            height: 70px;
            width: auto;
            margin: -0.825rem -3.9rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid" style="margin-right:50px; margin-left:50px">
            <a href="user-home.php" class="logo-link">
                <img src="assets/uploads/image3.jpg" alt="Donor Hub" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user-home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_requests.php">Request Darah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-login" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>