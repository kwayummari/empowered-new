<?php
session_start();
if (!isset($_SESSION['id'], $_SESSION['role'], $_SESSION['username'], $_SESSION['name'])) {
  header("Location: ../../../../index.php");
  exit();
}
$id = $_SESSION['id'];
$role = $_SESSION['role'];
$username = $_SESSION['username'];
$name = $_SESSION['name'];
include '../connection/index.php';
$query = "SELECT * FROM internship ORDER BY id DESC";
$stmt = $connect->prepare($query);
$stmt->execute();
$result4 = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<?php include "../head/head2.php" ?>

<body>
  <?php include "../header/header2.php" ?>
  <?php include "../aside/aside2.php" ?>
  <main id="main" class="main">
    <div class="col-12">
      <div class="card recent-sales overflow-auto">
        <div class="card-body">
          <h5 class="card-title">All Data <span>| Today</span> <a href="add.php"><span class="badge bg-success text-white">+ Add Internship</span></a></h5>
          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Caption</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows4 = $result4->fetch_assoc()) {
              ?>
                <tr>
                  <td><?php echo htmlspecialchars($rows4['title']); ?></td>
                  <td><?php echo htmlspecialchars($rows4['caption']); ?></td>
                  <td><img src="../../img/blogs/<?php echo htmlspecialchars($rows4['image']); ?>" alt="Profile" class="rounded-circle" style="height: 50px; width: 50px"></td>
                  <td>
                    <?php echo $rows4['status'] == 1 ? 'Active' : 'Inactive'; ?>
                  </td>
                  <td>
                    <a href="update.php?id=<?php echo urlencode($rows4['id']); ?>"><i class="bi bi-pen" style="color: green; padding-right: 15px;"></i></a>
                    <a href="toggle_status.php?id=<?php echo urlencode($rows4['id']); ?>"><i class="bi bi-toggle2-on" style="color: blue; padding-right: 15px;"></i></a>
                    <a href="delete.php?id=<?php echo urlencode($rows4['id']); ?>"><i class="bi bi-archive-fill" style="color: red;"></i></a>
                  </td>
                </tr>
              <?php
              }
              $stmt->close();
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
    </div>
  </main>
  <?php include "../footer/footer.php" ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>