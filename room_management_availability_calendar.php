<!DOCTYPE html>
<html lang="en">

<?php include('zc-head.php'); ?>

<body id="body">
    <!-- Navigation Bar  -->
    <?php include('zc-navbar.php'); ?>
    <!-- Sidebar  -->
    <?php include("zc-sidebar.php"); ?>

    <main class="py-4">
        <div class="container">
            <h5 class="fw-semibold">Availability Calendar</h5>
            <div>
                <div class="d-flex align-items-center flex-wrap justify-content-between">
                    <div class="d-flex align-items-center flex-wrap justify-content-start m-1">
                        <button class="btn button-tertiary rounded m-1">
                            Download&nbsp;Inventory
                        </button>
                        <button class="btn btn-success m-1">
                            Bulk&nbsp;Update
                        </button>
                        <button class="btn btn-primary m-1">
                            Sync&nbsp;Inventory
                        </button>
                    </div>
                    <div class="d-flex align-items-center justify-content-end m-1">
                        <input type="text" class="form-control p-2" placeholder="Search.." style="max-width: 250px;">
                        <button class="btn"><i class="bx bx-search fs-4" style="transform: translateX(-50px) translateY(2px);"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- normal script  -->
    <script src="assets/js/script.js"></script>
</body>

</html>