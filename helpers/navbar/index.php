<div class="navbar navbar-expand-lg bg-white navbar-white" style="background-color: white;">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand"><img src="img/logo/EFC LOGO-05.jpg" alt=""></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">Who we are</a>
                <a href="causes.php" class="nav-item nav-link">What we do</a>
                <a href="blogs.php" class="nav-item nav-link">News and Insights</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Work with us</a>
                    <div class="dropdown-menu">
                        <a href="internship.php" class="dropdown-item">Internship</a>
                        <a href="jobs.php" class="dropdown-item">Job Adverts</a>
                        <a href="volunteer.php" class="dropdown-item">Become a Volunteer</a>
                    </div>
                </div>
                <div class="carousel-btn">
                    <a class="btn btn-custom" href="#" id="donateBtn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("donateBtn").addEventListener("click", function(event) {
        event.preventDefault();
        alert("Thank you for your generosity! Please contact us via email at info@empoweredforchange.or.tz to get more details on how you can contribute to our cause.");
    });
</script>
