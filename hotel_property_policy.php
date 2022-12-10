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

    <main class="py-4">
        <div class="container">
            <h5 class="fw-semibold">Photo Gallery Upload</h5>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                        Property Policy
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                        Cancellation policy
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                        Terms & Conditions
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="form">
                        <div class="row g-4 mt-2">
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Transport&nbsp;Policies</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">No Transport facility</option>
                                            <option value="transport">Transport facility Available</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Pay&nbsp;at&nbsp;hotel</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">Not Allowed</option>
                                            <option value="transport">Transport facility Available</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Smoking&nbsp;Policies</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">Allowed</option>
                                            <option value="transport">Not Allowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Multi Language</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">Yes</option>
                                            <option value="transport">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Liquor Policies</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">Allowed</option>
                                            <option value="transport">Not Allowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Foeigners Allowed</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">Allowed</option>
                                            <option value="transport">Not Allowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Pets Policy</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">In Some Areas</option>
                                            <option value="transport">Not Allowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Late Checkout</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">Subject to Availability</option>
                                            <option value="transport">Not Allowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Currency</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">Rupee</option>
                                            <option value="transport">USD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Early CheckIn</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">Subject to Availability</option>
                                            <option value="transport">Not Allowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Kids Free Upto</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport">3 Year</option>
                                            <option value="transport">5 Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Consider Kids Upto</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="transport_policy" id="" class="form-select p-3">
                                            <option value="transport" selected>3 Year</option>
                                            <option value="noen">5 Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Check In/Out Policy</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="input-group">
                                            <div class="form-check mx-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check mx-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Senior Citizens discount</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="input-group">
                                            <div class="form-check mx-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check mx-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <span class="form-label me-3">Food type</span>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="input-group">
                                            <div class="form-check mx-2">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Veg
                                                </label>
                                            </div>
                                            <div class="form-check mx-2">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Non veg
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    Cancellation Policy
                </div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                    Terms and Conditions
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