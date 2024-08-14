<?php
include 'admin/connection/index.php'; // Adjust the path to your database connection file

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO volunteer (name, email, reason) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $reason);

    if ($stmt->execute()) {
        $message = "Message sent successfully!";
    } else {
        $message = "Failed to submit. Please try again later.";
    }

    $stmt->close();
    $conn->close();
}
?>

<div class="volunteer" data-parallax="scroll" data-image-src="img/topper.webp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="volunteer-form">
                    <?php if (!empty($message)): ?>
                        <div class="alert alert-success"><?php echo $message; ?></div>
                    <?php endif; ?>
                    <form action="submit_volunteer.php" method="post">
                        <div class="control-group">
                            <input type="text" class="form-control" placeholder="Name" required="required" />
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" placeholder="Email" required="required" />
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit">Become a volunteer</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="volunteer-content">
                    <div class="section-header">
                        <p>Become A Volunteer</p>
                        <h2>Let’s make a difference in the lives of others</h2>
                    </div>
                    <div class="volunteer-text">
                        <p>
                            Be the change you wish to see in the world. Join us as a volunteer and together, we can make a difference..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>