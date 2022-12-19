<!DOCTYPE html>
<html lang="en">

<?php include('zc-head.php'); ?>

<body id="body">
    <!-- Navigation Bar  -->
    <?php include('zc-navbar.php'); ?>
    <!-- Sidebar  -->
    <?php include("zc-sidebar.php"); ?>

    <main class="container py-4">
        <div class="container " style="max-width: 700px;">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h5 class="fw-semibold">Photo Gallery Upload</h5>
                <div class="p-relative containerw-100 rounded-4" style="box-sizing:content-box;max-width:450px ;border:2px dotted green">
                    <input type="file" name="" id="" class="upload p-5 " style="position: relative;z-index:10;">
                    <i class="bx bxs-cloud-upload text-success" style="font-size: 5rem;position: absolute;right:45%;top: 15%;z-index: 5;"></i>
                </div>
                <button class="btn btn-success mt-4 p-3 px-5 mx-atuo d-block"><i class="bx bxs-cloud-upload fs-4 me-3"></i> Upload</button>
            </div>
        </div>
        <hr>
        <div class="galleries mt-4">
            <h6 class="fw-semibold text-center">Uploaded Images</h6>
        </div>
    </main>
    <!-- bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- normal script  -->
    <script src="assets/js/script.js"></script>
</body>

</html>