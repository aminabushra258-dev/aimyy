<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SparkleClean | Professional Cleaning Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .hero-section {
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                url('https://images.unsplash.com/photo-1627905646269-7f034dcc5738?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y2xlYW5pbmd8ZW58MHx8MHx8fDA%3D');
    background-size: cover;
    background-position: center;
    height: 70vh;
}
</style>
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
                    <a class="nav-link active" href="index.php">
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
                    <a class="nav-link" href="contact.php">
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

    <header class="hero-section text-center text-white d-flex align-items-center">
        <div class="container">
            <h1 class="display-3 fw-bold">Fresh Space, Fresh Mind</h1>
            <p class="lead">Professional cleaning services for homes and offices.</p>
            <a href="contact.html" class="btn btn-lg btn-warning mt-3">Book a Cleaning</a>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold fs-2 text-primary mb-5 text-center">Our Core Services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <h3 class="h5 card-title">Residential Cleaning</h3>
                            <p class="card-text">Complete home cleaning tailored to your schedule.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <h3 class="h5 card-title">Office Cleaning</h3>
                            <p class="card-text">A hygienic environment for your professional team.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <h3 class="h5 card-title">Deep Cleaning</h3>
                            <p class="card-text">Thorough sanitization of every corner and crevice.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container text-center">
            <p>&copy; 2026 SparkleClean Services. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>