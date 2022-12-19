<!DOCTYPE html>
<html lang="en">

<?php include('zc-head.php'); ?>

<body id="body">

    <!-- Navigation Bar  -->
    <?php include('zc-navbar.php'); ?>
    <!-- Sidebar  -->
    <?php include("zc-sidebar.php"); ?>

    <main class="container py-4">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item m-2" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-Basic-Details" type="button" role="tab">Basic Details</button>
            </li>
            <li class="nav-item m-2" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-Bank-Account" type="button" role="tab">Bank Account</button>
            </li>
            <li class="nav-item m-2" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-Settings" type="button" role="tab">Settings</button>
            </li>
            <li class="nav-item m-2" role="presentation">
                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-Documents" type="button" role="tab">Documents</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-Basic-Details" role="tabpanel" tabindex="0">
                <div class="container py-4" style="max-width: 750px;">
                    <div class="table-responsive">
                        <table class="table table-bordered design-table">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="3" class="text-center fs-5">Basic Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Latitude</th>
                                    <td>Test Account</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">Longitude</th>
                                    <td>Asha</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">Hotel Mobile No.</th>
                                    <td>Current</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">Hotel Landline No.</th>
                                    <td>123456789</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">Hotel Email</th>
                                    <td>123456789</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>

                                </tr>
                                <tr>
                                    <th scope="row">Website</th>
                                    <td>Gurgaon</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>

                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td>Asha</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>

                                </tr>
                                <tr>
                                    <th scope="row">Hotel Description</th>
                                    <td>Current</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>

                                </tr>
                                <tr>
                                    <th scope="row">CIN No.</th>
                                    <td>123456789</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>

                                </tr>
                                <tr>
                                    <th scope="row">FSSAI No.</th>
                                    <td>123456789</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>

                                </tr>
                                <tr>
                                    <th scope="row">GST No.</th>
                                    <td>Gurgaon</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>

                                </tr>
                                <tr>
                                    <th scope="row">PAN No.</th>
                                    <td>Gurgaon</td>
                                    <td><button class="btn border-0" data-bs-toggle="tooltip" data-bs-title="Edit"><i class="bx bxs-pencil fs-5"></i></button></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Bank-Account" role="tabpanel" tabindex="0">
                <div class="p-3 container" style="max-width: 750px;">
                    <div class="table-responsive">
                        <table class="table table-bordered design-table">
                            <thead>
                                <tr>
                                    <th scope="col">Bank Name</th>
                                    <th scope="col">Test Account</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Beneficiary Name</th>
                                    <td>Asha</td>
                                    <td>
                                        <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="Edit">
                                            <i class="bx fs-4 bx-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Account type</th>
                                    <td>Current</td>
                                    <td>
                                        <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="Edit">
                                            <i class="bx fs-4 bx-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Account Number</th>
                                    <td>123456789</td>
                                    <td>
                                        <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="Edit">
                                            <i class="bx fs-4 bx-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">IFSC Code</th>
                                    <td>123456789</td>
                                    <td>
                                        <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="Edit">
                                            <i class="bx fs-4 bx-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Branch Code</th>
                                    <td>Gurgaon</td>
                                    <td>
                                        <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="Edit">
                                            <i class="bx fs-4 bx-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button class="btn bg-success bg-opacity-75 text-white px-4 py-2 rounded-pill fw-bold">Payments
                        Activated</button>
                </div>
            </div>
            <div class="tab-pane fade " id="pills-Settings" role="tabpanel" tabindex="0">
                <div class="container" style="max-width: 450px;">
                    <h4 class="fw-semibold mb-3">Edit Password</h4>
                    <form action="" class="p-3 p-lg-4 p-xl-5 bg-light  rounded-3 shadow-sm" style=" background: rgb(172,169,229);background: radial-gradient(circle, rgba(172,169,229,1) 0%, rgba(192,192,236,1) 35%, rgba(169,220,230,1) 100%); ">
                        <row class="gy-4">
                            <div class="col-12">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="text" class="form-control py-3 px-2 rounded-3 bg-white">
                            </div>
                            <div class="col-12 mt-3">
                                <label for="current_password" class="form-label">New Password</label>
                                <input type="text" class="form-control py-3 px-2 rounded-3 bg-white">
                            </div>
                            <div class="col-12 mt-3">
                                <label for="current_password" class="form-label">Confirm Password</label>
                                <input type="text" class="form-control py-3 px-2 rounded-3 bg-white">
                            </div>
                            <div class="col-12 mt-4">
                                <button class="btn btn-success w-100 py-3">Submit</button>
                            </div>
                        </row>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade " id="pills-Documents" role="tabpanel" tabindex="0">
                <div class="row g-4 mt-4 justify-content-center">
                    <div class="col-12 col-lg-4">
                        <!-- upload new Document Type  -->
                        <div>
                            <h4 class="fw-bold">Upload New Document</h4>
                            <form action="" class="mt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="" class="form-label">Select the Document</label>
                                        <select name="" id="" class="form-select p-3">
                                            <option value="Registration Paper">Registration Paper</option>
                                            <option value="Registration Paper">Lease Agreement</option>
                                            <option value="Registration Paper">OTA Agreement</option>
                                            <option value="Registration Paper">PAN Card</option>
                                            <option value="Registration Paper">Cancelled Check</option>
                                            <option value="Registration Paper">GST Certificate</option>
                                            <option value="Registration Paper">Cancelled Check</option>
                                            <option value="Registration Paper">NOC for Non GST</option>
                                            <option value="Registration Paper">Sign & Stamp</option>
                                            <option value="Registration Paper">Aadhaar Card</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <input type="file" name="" id="" class="form-control form-control-lg">
                                        <label for="" class="text-danger mt-1"><small> *Files Allowed .pdf, .docx, .jpg,
                                                .png</small></label>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button class="btn btn-primary d-block w-100 py-3">
                                            Upload
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="table-responsive p-3">
                            <table class="table design-table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Dccument Type</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Size</th>
                                        <th scope="col" class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Registration paper</td>
                                        <td>24 Aug ,2022</td>
                                        <td>354kb</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="Edit Document">
                                                    <i class="bx fs-4 bx-detail"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-success" data-bs-toggle="tooltip" data-bs-title="Download Document">
                                                    <i class="bx fs-4 bxs-cloud-download"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-danger" data-bs-toggle="tooltip" data-bs-title="Delete Document">
                                                    <i class="bx fs-4 bxs-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>24 Aug ,2022</td>
                                        <td>Sign & Stamp</td>
                                        <td>354kb</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="View Document">
                                                    <i class="bx fs-4 bx-detail"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-success" data-bs-toggle="tooltip" data-bs-title="Download Document">
                                                    <i class="bx fs-4 bxs-cloud-download"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-danger" data-bs-toggle="tooltip" data-bs-title="Delete Document">
                                                    <i class="bx fs-4 bxs-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Undertaking Letter</td>
                                        <td>24 Aug ,2022</td>
                                        <td>354kb</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="View Document">
                                                    <i class="bx fs-4 bx-detail"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-success" data-bs-toggle="tooltip" data-bs-title="Download Document">
                                                    <i class="bx fs-4 bxs-cloud-download"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-danger" data-bs-toggle="tooltip" data-bs-title="Delete Document">
                                                    <i class="bx fs-4 bxs-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cleartrip Agreement</td>
                                        <td>24 Aug ,2022</td>
                                        <td>354kb</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="View Document">
                                                    <i class="bx fs-4 bx-detail"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-success" data-bs-toggle="tooltip" data-bs-title="Download Document">
                                                    <i class="bx fs-4 bxs-cloud-download"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-danger" data-bs-toggle="tooltip" data-bs-title="Delete Document">
                                                    <i class="bx fs-4 bxs-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Goibibo Agreement</td>
                                        <td>24 Aug ,2022</td>
                                        <td>354kb</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="btn border-0 mx-1" data-bs-toggle="tooltip" data-bs-title="View Document">
                                                    <i class="bx fs-4 bx-detail"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-success" data-bs-toggle="tooltip" data-bs-title="Download Document">
                                                    <i class="bx fs-4 bxs-cloud-download"></i>
                                                </button>
                                                <button class="btn border-0 mx-1 text-danger" data-bs-toggle="tooltip" data-bs-title="Delete Document">
                                                    <i class="bx fs-4 bxs-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>

    </main>
    <!-- bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- normal script  -->
    <script src="assets/js/script.js"></script>
</body>

</html>