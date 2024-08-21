<?php
session_start();
$id = $_SESSION['id'];
$role = $_SESSION['role'];
$username = $_SESSION['username'];
$name = $_SESSION['name'];
include 'connection/index.php';
$query = "SELECT * FROM blogs";
$result = mysqli_query($connect, $query);
$count = mysqli_fetch_assoc($result);
$total_blogs = mysqli_num_rows($result);

$query1 = "SELECT * FROM projects";
$result1 = mysqli_query($connect, $query1);
$count1 = mysqli_fetch_assoc($result1);
$total_projects = mysqli_num_rows($result1);

$query2 = "SELECT * FROM internship";
$result2 = mysqli_query($connect, $query2);
$count2 = mysqli_fetch_assoc($result2);
$total_internship = mysqli_num_rows($result2);

$query3 = "SELECT * FROM jobs";
$result3 = mysqli_query($connect, $query3);
$count3 = mysqli_fetch_assoc($result3);
$total_jobs = mysqli_num_rows($result3);

$query4 = "SELECT * FROM user";
$result4 = mysqli_query($connect, $query4);
$count4 = mysqli_fetch_assoc($result4);
$total_users = mysqli_num_rows($result4);
?>

<!DOCTYPE html>
<html lang="en">

<?php include "head/head.php" ?>

<body>
  <!-- ======= Header ======= -->
  <?php include "header/header.php" ?>
  <!-- ======= Sidebar ======= -->
  <?php include "aside/aside.php" ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="row">
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Total <span>|Blogs</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $total_blogs ?></h6>
                    <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title">Total <span>| Internship</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-list"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $total_internship ?></h6>
                    <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Revenue Card -->

          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Total <span>|Jobs Requests</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-arrow-return-left"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $total_jobs ?></h6>
                    <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title">Total <span>| Users</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-arrow-return-right"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $total_users ?></h6>
                    <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->




          <!-- Top Selling -->


        </div>
        <!-- </div> -->
        <!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">




        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "footer/footer.php" ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>