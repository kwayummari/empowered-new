<?php
include 'admin/connection/index.php';
$query = "SELECT * FROM jobs ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'helpers/head/index.php' ?>

<body>
    <!-- Top Bar Start -->
    <?php include 'helpers/topBar/index.php' ?>
    <!-- Top Bar End -->
    <!-- Nav Bar Start -->
    <?php include 'helpers/navbar/causes.php' ?>
    <!-- Nav Bar End -->
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Become a volunteer</h2>
                </div>
                <div class="col-12">
                    <a href="index.php">Home</a>
                    <a href="">volunteer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Volunteer Start -->
    <?php include 'helpers/volunteer/index.php' ?>
    <!-- Volunteer End -->
    <!-- Footer Start -->
    <?php include 'helpers/footer/index.php' ?>
    <!-- Footer End -->
    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var blogModal = document.getElementById('blogModal');

            blogModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var title = button.getAttribute('data-title');
                var caption = button.getAttribute('data-caption');
                var description = button.getAttribute('data-description');
                var image = button.getAttribute('data-image');

                var modalTitle = blogModal.querySelector('#modalTitle');
                var modalCaption = blogModal.querySelector('#modalCaption');
                var modalDescription = blogModal.querySelector('#modalDescription');
                var modalImage = blogModal.querySelector('#modalImage');

                modalTitle.textContent = title;
                modalCaption.textContent = caption;
                modalDescription.innerHTML = description;
                modalImage.src = image;
            });
        });
    </script>
</body>
</html>