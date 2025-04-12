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
    <title>View News</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>


    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
     <!-- Bootstrap CSS-->
     <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap JS & CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

     <!-- Vendor CSS-->
     <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
     <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
     <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
     <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
     <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
     <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
     <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
     <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
 

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/new.css" rel="stylesheet" media="all">
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
                                    <a href="new-dep.php">New Department</a>
                                </li>
                                <li>
                                    <a href="view-dep.php">View Department</a>
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

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <h3 class="mb-4 text-primary text-center">View Posted News</h3>

                <!-- Filter Dropdown -->
                <div class="row mb-4">
                    <div class="col-md-6 offset-md-3">
                        <select class="form-control" id="departmentFilter">
                            <option value="">-- Filter by Department --</option>
                            <option value="Police">Police</option>
                            <option value="TRA">TRA</option>
                            <option value="Hospital">Hospital</option>
                            <option value="School">School</option>
                        </select>
                    </div>
                </div>

                <!-- News DataTable -->
                <div class="table-responsive">
                    <table id="newsTable" class="table table-bordered table-striped">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Department</th>
                                <th>Summary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'db_connection.php'; // Make sure this file contains your DB credentials
                            $sql = "SELECT * FROM news ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql);
                            $i = 1;

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr data-full="' . htmlspecialchars($row['full_content']) . '">';
                                    echo '<td>' . $i++ . '</td>';
                                    echo '<td>' . htmlspecialchars($row['title']) . '</td>';
                                    echo '<td>' . htmlspecialchars($row['department']) . '</td>';
                                    echo '<td>' . htmlspecialchars($row['summary']) . '</td>';
                                    echo '<td><button class="btn btn-sm btn-primary read-more">Read More</button></td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<tr><td colspan="5" class="text-center text-danger">No news posted</td></tr>';
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <!-- Modal -->
    <div class="modal fade" id="readMoreModal" tabindex="-1" role="dialog" aria-labelledby="readMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="readMoreModalLabel">News Details</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="modalContent">
            <!-- News content will be injected here -->
        </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            // Initialize DataTable if needed (optional if you're using DataTables.js)
            const table = $('#newsTable').DataTable();

            // Filter by department
            $('#departmentFilter').on('change', function () {
                const selected = this.value;
                table.column(2).search(selected).draw();
            });

            // Read More functionality
            $(document).on('click', '.read-more', function () {
                const fullContent = $(this).closest('tr').data('full');
                $('#modalContent').text(fullContent);
                $('#readMoreModal').modal('show');
            });
        });
    </script>

    <!-- END PAGE CONTAINER-->
    </div>
    </div>
    <script>
        // Get the current year
        var currentYear = new Date().getFullYear();
        // Set the current year in the copyright section
        document.getElementById("current-year").textContent = currentYear;
    </script>
    
    <!-- JS to render the chart (using Chart.js for example) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('departmentActivityChart').getContext('2d');
    
        // News posted data for each category
        var departmentData = {
            labels: ['School', 'Hospital', 'TRA', 'Police'],
            data: [20, 15, 30, 10], // Example values
        };
    
        // Determine the max value for highlighting
        var maxValue = Math.max(...departmentData.data);
        
        var departmentActivityChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: departmentData.labels,
                datasets: [{
                    label: 'News Posted',
                    data: departmentData.data,
                    backgroundColor: departmentData.data.map(value => 
                        value === maxValue ? 'rgba(255, 0, 0, 0.5)' : 'rgba(54, 162, 235, 0.5)'
                    ),
                    borderColor: departmentData.data.map(value => 
                        value === maxValue ? 'rgba(255, 0, 0, 1)' : 'rgba(54, 162, 235, 1)'
                    ),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
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
    