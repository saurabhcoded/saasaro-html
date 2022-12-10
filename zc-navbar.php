    <nav class="navbar navbar-expand-lg bg-white border-bottom fixed-top">
        <div class="container-fluid">
            <div class="navbar-brand">
                <button class="btn btn-outline-warning rounded-0 fs-3 p-2 py-0" onclick="toggleSidebar()">
                    <i class='bx bx-menu-alt-left'></i></button>
                <a href="#"><img src="assets/img/logo.jpg" alt="" style="width: 60px;height:60px">
                </a>
            </div>
            <div class="d-flex align-items-center">
                <form class="d-flex d-none d-lg-block me-2" role="search">
                    <div class="input-group rounded-pill border" style="overflow: hidden;">
                        <input class="form-control border-0 ps-4" style="box-shadow: none;" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success border-0 search-btn-grad p-2 px-4" type="submit">Search</button>
                    </div>
                </form>
                <button class="btn login-btn-grad  px-3 py-2 me-2 rounded-pill">Login</button>
                <button class="btn login-btn-grad  px-3 py-2 rounded-pill bg-success text-white">Register</button>
                <div class="btn-group dropstart">
                    <button type="button" class="btn border-0 " data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bx-user-circle fs-1'></i>
                    </button>
                    <ul class="dropdown-menu p-4" style="min-width: 250px;">
                        <li>Welcome to SaasAro, <br><span class="text-success">Saurabh Sharma</span></li>
                        <li class="mt-2 border p-2 px-3 rounded"><a href="#" class="nav-link ">My Account</a></li>
                        <li class="mt-2 border p-2 px-3 rounded"><a href="#" class="nav-link ">Edit Profile</a></li>
                        <li class="mt-2 border p-2 px-3 rounded"><a href="#" class="nav-link text-danger"><i class='bx bxs-log-out-circle text-danger'></i> Logout</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>