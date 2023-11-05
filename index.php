<?php $title = 'Dashboard - Meu Sistema' ?>

<?php include_once 'preloader.php' ?>
<?php include_once 'actions/checkAuth.php' ?>
<?php include_once 'templates/head.php' ?>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <!-- Container wrapper -->
    <div class="container-fluid">
        
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">

            <!-- Avatar -->
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['nome'] ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="actions/logoutAction.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<div class="container">
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Status</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">John Doe</p>
                            <p class="text-muted mb-0">john.doe@gmail.com</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Software engineer</p>
                    <p class="text-muted mb-0">IT department</p>
                </td>
                <td>
                    <span class="badge badge-success rounded-pill d-inline">Active</span>
                </td>
                <td>Senior</td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Alex Ray</p>
                            <p class="text-muted mb-0">alex.ray@gmail.com</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Consultant</p>
                    <p class="text-muted mb-0">Finance</p>
                </td>
                <td>
                    <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                </td>
                <td>Junior</td>
                <td>
                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Kate Hunington</p>
                            <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Designer</p>
                    <p class="text-muted mb-0">UI/UX</p>
                </td>
                <td>
                    <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                </td>
                <td>Senior</td>
                <td>
                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        Edit
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php include 'templates/footer.php' ?>