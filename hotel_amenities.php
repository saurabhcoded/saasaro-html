<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- boxicons  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- main css  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hotel Page</title>
</head>

<body id="body">
    <!-- Navigation Bar  -->
    <?php include('zc-navbar.php'); ?>
    <!-- Sidebar  -->
    <?php include("zc-sidebar.php"); ?>

    <main class="container py-4">
        <div class="rounded-4 shadow-sm">
            <div class="p-3 bg-secondary bg-opacity-25 rounded-top">
                <h5>Hotel Amenities,</h5>
            </div>
            <div class="d-flex align-items-center justify-content-start mt-4 p-3 pb-4">
                <h6 class="me-4">Amenities</h6>
                <select name="" id="" class="form-select  p-3">
                    <option value="one">One</option>
                    <option value="one">two</option>
                    <option value="one">three</option>
                    <option value="one">four</option>
                    <option value="one">five</option>
                </select>
                <button class="btn btn-success py-3 px-3 px-lg-4 px-xl-5 ms-3 rounded">Submit</button>
            </div>
        </div>
        <div class="rounded-4 shadow-sm mt-4">
            <div class="p-3 bg-secondary bg-opacity-25 rounded-top">
                <h5>Room Amenities,</h5>
            </div>
            <div class="d-flex align-items-center justify-content-start mt-4 p-3 pb-4">
                <h6 class="me-4">Amenities</h6>
                <select name="" id="" class="form-select  p-3">
                    <option value="one">One</option>
                    <option value="one">two</option>
                    <option value="one">three</option>
                    <option value="one">four</option>
                    <option value="one">five</option>
                </select>
                <button class="btn btn-success py-3 px-3 px-lg-4 px-xl-5 ms-3 rounded">Submit</button>
            </div>
        </div>

    </main>
    <!-- bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- normal script  -->
    <script src="assets/js/script.js"></script>
</body>

</html>