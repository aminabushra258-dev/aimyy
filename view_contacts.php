<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM contacts");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Customer Requests | SparkleClean</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f8f9fa;
}



.table-card{
    border:none;
    border-radius:15px;
}

.table-hover tbody tr:hover{
    background-color:#eef5ff;
}

.badge-service{
    font-size:0.85rem;
}
</style>

</head>
<body class="d-flex flex-column min-vh-100">

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
                    <a class="nav-link" href="index.php">
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
    <a class="nav-link active" href="view_contacts.php">
        View Requests
    </a>
</li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-5 flex-grow-1">

    <h2 class="text-center fw-bold fs-2 text-primary mb-5">
        Customer Requests
    </h2>

    <div class="card shadow table-card">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-striped table-hover align-middle">

                    <thead class="table-primary">

                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Message</th>
                        </tr>

                    </thead>

                <tbody>

<?php

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['fullname']; ?></td>

    <td><?php echo $row['email']; ?></td>

    <td>

    <?php
    if($row['service']=="home")
    {
        echo "<span class='badge bg-success'>Home Cleaning</span>";
    }
    elseif($row['service']=="office")
    {
        echo "<span class='badge bg-warning text-dark'>Office Cleaning</span>";
    }
    else
    {
        echo "<span class='badge bg-info'>Deep Cleaning</span>";
    }
    ?>

    </td>

    <td><?php echo $row['message']; ?></td>

</tr>

<?php
    }
}
else
{
?>

<tr>
    <td colspan="5" class="text-center py-5">

        <div class="d-flex flex-column align-items-center">

            <div style="font-size:70px;">
                📭
            </div>

            <h4 class="mt-3 text-secondary">
                No Requests Found
            </h4>

            <p class="text-muted mb-0">
                Customer quote requests will appear here once submitted.
            </p>

        </div>

    </td>
</tr>

<?php
}
?>

</tbody>

                </table>

            </div>

        </div>

    </div>

</main>

<footer class="bg-dark text-white py-4 text-center">
    <p class="mb-0">
        © 2026 SparkleClean Services.
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>