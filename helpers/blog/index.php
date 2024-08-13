<?php
include 'admin/connection/index.php';
$query = "SELECT * FROM blogs ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>

<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Blog</p>
            <h2>Latest news & articles directly from our blog</h2>
        </div>
        <div class="row">
            <?php while ($blog = mysqli_fetch_assoc($result)) { ?>
                <div class="col-lg-4">
                    <div class="blog-item" data-bs-toggle="modal" data-bs-target="#blogModal" data-title="<?php echo htmlspecialchars($blog['title']); ?>" data-caption="<?php echo htmlspecialchars($blog['caption']); ?>" data-description="<?php echo htmlspecialchars($blog['description']); ?>" data-image="img/blogs/<?php echo htmlspecialchars($blog['image']); ?>">
                        <div class="blog-img">
                            <img src="img/blogs/<?php echo htmlspecialchars($blog['image']); ?>" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#"><?php echo htmlspecialchars($blog['title']); ?></a></h3>
                            <p>
                                <?php echo htmlspecialchars($blog['caption']); ?>
                            </p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="#">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="#">15 Comments</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Modal -->
<div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blogModalLabel">Blog Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" alt="Blog Image" style="width: 100%; height: auto;">
                <h3 id="modalTitle"></h3>
                <h4 id="modalCaption"></h4>
                <div id="modalDescription" style="overflow: auto;"></div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var blogModal = document.getElementById('blogModal');

    blogModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Button that triggered the modal
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
        modalDescription.innerHTML = description; // Set HTML content
        modalImage.src = image;
    });
});
</script>