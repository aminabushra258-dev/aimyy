<?php

include 'db.php';

if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $query = "
    INSERT INTO contacts
    (fullname,email,service,message)

    VALUES

    ('$fullname',
     '$email',
     '$service',
     '$message')
    ";

    mysqli_query($conn,$query);

    echo "<script>
        alert('Request Submitted Successfully');
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | SparkleClean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">
            SparkleClean
        </a>

        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
            id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link " href="index.php">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="services.php">
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">
                        Gallery
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_contacts.php">
                        View Requests
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <article class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card p-4 shadow border-0">
                    <h2 class="fw-bold fs-2 text-primary mb-2 text-center">Request a Quote</h2>
                    <form action="contact.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Full Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Your Name" name="fullname" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Select Service</label>
                            <select class="form-select"  name="service" required>
                                <option value="home">Home Cleaning</option>
                                <option value="office">Office Cleaning</option>
                                <option value="deep">Deep Cleaning</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Additional Details</label>
                            <textarea id="message" class="form-control" rows="4" placeholder="How can we help?" name="message"></textarea>
                        </div>
                       <button
name="submit"
type="submit"
class="btn btn-primary">
Submit Request
</button>
                    </form>
                </div>
            </div>
        </div>
    </article>

    <footer class="bg-dark text-white py-4 text-center mt-5">
        <p>&copy; 2026 SparkleClean Services.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>