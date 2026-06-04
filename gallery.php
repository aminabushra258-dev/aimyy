<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Gallery | SparkleClean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .gallery-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .gallery-img:hover {
        transform: scale(1.03);
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
                    <a class="nav-link active" href="gallery.php">
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

    <section class="container py-5">
        <h2 class="fw-bold fs-2 text-primary mb-5 text-center">Our Work in Action</h2>
   <div class="row g-4">

    <div class="col-12 col-sm-6 col-md-4">
        <img src="https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=500&q=80"
            class="gallery-img shadow-sm w-100"
            alt="Clean Living Room">
    </div>

    <div class="col-12 col-sm-6 col-md-4">
        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=500&q=80"
            class="gallery-img shadow-sm w-100"
            alt="Sparkling Kitchen">
    </div>

    <div class="col-12 col-sm-6 col-md-4">
        <img src="https://images.unsplash.com/photo-1563453392212-326f5e854473?auto=format&fit=crop&w=500&q=80"
            class="gallery-img shadow-sm w-100"
            alt="Clean Bathroom">
    </div>

</div>
    </section>

    <footer class="bg-dark text-white py-4 text-center mt-5">
        <p>&copy; 2026 SparkleClean Services.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>