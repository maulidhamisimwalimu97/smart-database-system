<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Admin-Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/loader.css" rel="stylesheet" media="all">


</head>

<body>

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <h6 class="ims-heading">Smart Database System</h6>  
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>User</a>                            
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="user-reg.php">New user</a>
                                </li>
                                <li>
                                    <a href="view-user.php">View User</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                    <i class="fas fa-building"></i>Department
                                </a>                                
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.php">New Department</a>
                                </li>
                                <li>
                                    <a href="register.php">View Department</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-newspaper"></i>News</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="view-news.php">View News</a>
                                </li>
                            </ul>
                        </li>
                            <!-- Reports Section -->
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-chart-line"></i>Reports
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li><a href="report.php">Generate Reports</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for News &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">

                                    </div>
                                    <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-email"></i>
                                    <span class="quantity">3</span>
                                    <div class="email-dropdown js-dropdown">
                                        <div class="email__title">
                                            <p>You have 3 New Messages</p>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-06.jpg" alt="Admin" />
                                            </div>
                                            <div class="content">
                                                <p>New user registration request pending approval.</p>
                                                <span>System Bot, 2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-05.jpg" alt="Admin" />
                                            </div>
                                            <div class="content">
                                                <p>Backup completed successfully.</p>
                                                <span>System Bot, 1 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-04.jpg" alt="Admin" />
                                            </div>
                                            <div class="content">
                                                <p>Monthly report has been generated.</p>
                                                <span>System Bot, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="email__footer">
                                            <a href="#">See all messages</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity">3</span>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You received a message from the administrator.</p>
                                                <span class="date">Today, 08:15</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>A new department has been added.</p>
                                                <span class="date">Yesterday, 14:22</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>3 users uploaded new files.</p>
                                                <span class="date">2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <img src="images/icon/2.jpg" alt="User Image" />
                                    </div>
                                    <div class="content">
                                        <!-- Use session data to display the logged-in user's full name -->
                                        <a class="js-acc-btn" href="#"><?php echo isset($_SESSION['full_name']) ? $_SESSION['full_name'] : 'Guest'; ?></a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="images/icon/2.jpg" alt="User Image" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <!-- Use session data to display the logged-in user's full name and email -->
                                                <h5 class="name">
                                                    <a href="#"><?php echo isset($_SESSION['full_name']) ? $_SESSION['full_name'] : 'Guest'; ?></a>
                                                </h5>
                                                <span class="email">
                                                    <?php 
                                                        if (isset($_SESSION['email'])) {
                                                            echo $_SESSION['email'];  // Display email from session
                                                        } else {
                                                            echo "Not logged in";  // If the user is not logged in
                                                        }
                                                    ?>
                                                </span>   
                                            </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                    </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- Registration Form -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="text-center">Register New User</h4>
                        </div>
                        <div class="card-body">
                            <form id="registerForm" class="row g-3" method="POST">
                                <!-- Full Name -->
                                <div class="col-md-4">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" name="full_name" required>
                                </div>

                                <!-- Email -->
                                <div class="col-md-4">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-4">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone_number" required>
                                </div>

                                <?php
                                include 'db_connection.php'; // Ensure your DB connection is here
                                $sql = "SELECT id, department_name FROM departments";
                                $result = $conn->query($sql);
                                $departmentOptions = "";
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $departmentOptions .= "<option value='" . $row['id'] . "'>" . $row['department_name'] . "</option>";
                                    }
                                } else {
                                    $departmentOptions = "<option value=''>No departments found</option>";
                                }
                                $conn->close();
                                ?>

                                <!-- Select Department -->
                                <div class="col-md-4">
                                    <label class="form-label">Department</label>
                                    <select class="form-control" id="department" name="department_id" required>
                                        <option value="">Select Department</option>
                                        <?php echo $departmentOptions; ?>
                                    </select>
                                </div>

                                <!-- Password -->
                                <div class="col-md-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-md-4">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required>
                                </div> </div>

                                <!-- Submit Button -->
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary w-50">Register</button>
                                </div><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div><br><br><br>  
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('registerForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Gather form data
            const formData = new FormData(form);

            // Use fetch to submit the form data via POST
            fetch('reg-user.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Show SweetAlert on success
                if (data.trim() === "Registration successful!") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'User registered successfully.',
                    }).then(() => {
                        // Optionally, reset the form or redirect to another page
                        form.reset();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data,
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'An error occurred while registering.',
                });
            });
        });
    });
</script>
<script>
    window.addEventListener('load', function () {
        const loader = document.getElementById('loader-wrapper');
        if (loader) {
            loader.style.display = 'none';
        }
    });
</script>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
