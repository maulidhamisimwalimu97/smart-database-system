<?php
session_start(); // Start session to access session data
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Police-Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">


    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
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
                        <a href="police_dashboard.php">
                            <i class="fas fa-tachometer-alt"></i>Dashboard
                        </a>
                    </li>
                    
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-newspaper"></i>News
                        </a>                            
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="news.php">New News</a>
                            </li>
                            <li>
                                <a href="view-news.php">View News</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-building"></i>Report
                        </a>                                
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="Greport.php">Generate Report</a>
                            </li>
                            <li>
                                <a href="view-report.php">View Report</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-cogs"></i>Setting
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="password.php">Change Password</a>
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
                               <!-- Police Activities Notification -->
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-email"></i>
                                    <span class="quantity">3</span>
                                    <div class="email-dropdown js-dropdown">
                                        <div class="email__title">
                                            <p>You have 3 New Police Activities</p>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-06.jpg" alt="Admin" />
                                            </div>
                                            <div class="content">
                                                <p>New police report submitted for review.</p>
                                                <span>System Bot, 2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-05.jpg" alt="Admin" />
                                            </div>
                                            <div class="content">
                                                <p>Backup of police records completed successfully.</p>
                                                <span>System Bot, 1 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-04.jpg" alt="Admin" />
                                            </div>
                                            <div class="content">
                                                <p>Monthly police report summary generated.</p>
                                                <span>System Bot, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="email__footer">
                                            <a href="#">See all police activities</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Police Activities Notifications -->
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity">3</span>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Police Activity Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>New police report received for processing.</p>
                                                <span class="date">Today, 08:15</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>A new police activity log has been added.</p>
                                                <span class="date">Yesterday, 14:22</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>3 new police records have been uploaded.</p>
                                                <span class="date">2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All police notifications</a>
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
            <?php
            include 'db_connection.php';
            ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- DataTable Row -->
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header bg-info text-white text-center">
                            <h5 class="mb-0">Latest Police News</h5>
                        </div>
                        <div class="card-body">
                            <table id="newsTable" class="table table-bordered table-striped text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Title</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $news_sql = "SELECT id, title, content, DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at FROM police_records ORDER BY created_at DESC LIMIT 3";
                                    $news_result = mysqli_query($conn, $news_sql);
                                    while ($row = mysqli_fetch_assoc($news_result)) {
                                        $id = $row['id'];
                                        $title = htmlspecialchars($row['title']);
                                        $content = nl2br(htmlspecialchars($row['content']));
                                        $created_at = $row['created_at'];
                                        echo "<tr>";
                                        echo "<td>$title</td>";
                                        echo "<td>$created_at</td>";
                                        echo "<td>
                                                <button class='btn btn-sm btn-info' onclick='viewContent(\"" . addslashes($title) . "\", `" . addslashes($content) . "`)'><i class='fas fa-eye'></i></button>
                                                <button class='btn btn-sm btn-danger' onclick='deleteNews($id)'><i class='fas fa-trash-alt'></i></button>
                                            </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <!-- Navigation Buttons -->
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-primary" id="prevBtn">
                                    <i class="fas fa-chevron-left"></i> Previous
                                </button>
                                <button class="btn btn-primary" id="nextBtn">
                                    Next <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->

<!-- Modal to View News -->
<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="newsModalLabel">News Title</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="newsContent">
        <!-- Content dynamically added -->
      </div>
    </div>
  </div>
</div>

<!-- JS Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        $('#newsTable').DataTable({
            "paging": false,
            "searching": false,
            "info": false
        });

        $('#prevBtn').click(function () {
            alert('Previous clicked');
        });

        $('#nextBtn').click(function () {
            alert('Next clicked');
        });

        // Show SweetAlert if deleted=1 in URL
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('deleted') === '1') {
            Swal.fire({
                title: 'Deleted!',
                text: 'The news item has been deleted.',
                icon: 'success',
                confirmButtonColor: '#3085d6'
            });
        }
    });

    function viewContent(title, content) {
        $('#newsModalLabel').text(title);
        $('#newsContent').html(content);
        $('#newsModal').modal('show');
    }

    function deleteNews(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This news item will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "deleting.php?delete=" + id;
            }
        });
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Get the current year
    var currentYear = new Date().getFullYear();
    // Set the current year in the copyright section
    document.getElementById("current-year").textContent = currentYear;
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 500,
            events: [
                {
                    title: 'Police News Posted',
                    start: '2025-04-08',
                    color: '#007bff'
                },
                {
                    title: 'Hospital Announcement',
                    start: '2025-04-10',
                    color: '#28a745'
                },
                {
                    title: 'TRA Tax News',
                    start: '2025-04-11',
                    color: '#ffc107'
                }
                // You can load more dynamically using AJAX here
            ]
        });
        calendar.render();
    });
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
