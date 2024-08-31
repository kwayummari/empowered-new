<?php
include 'admin/connection/index.php';
$query = "SELECT * FROM blogs WHERE status = 1 ORDER BY id DESC LIMIT 3";
$result = mysqli_query($connect, $query);
?>

<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>NEWS AND UPDATES</p>
        </div>
        <div class="row">
            <?php while ($blog = mysqli_fetch_assoc($result)) { ?>
                <div class="col-lg-4 mb-4 <?php if ($num_items < 3) echo 'mx-auto'; ?>">
                    <div class="blog-item h-100"
                        data-bs-toggle="modal" data-bs-target="#blogModal"
                        data-title="<?php echo htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?>"
                        data-caption="<?php echo htmlspecialchars($blog['caption'], ENT_QUOTES, 'UTF-8'); ?>"
                        data-description="<?php echo htmlspecialchars(nl2br($blog['description']), ENT_QUOTES, 'UTF-8'); ?>"
                        data-image="https://empoweredforchange.or.tz/img/blogs/<?php echo htmlspecialchars($blog['image'], ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="blog-img" style="width: 100%; height: 400px; overflow: hidden;">
                            <img src="https://empoweredforchange.or.tz/img/blogs/<?php echo htmlspecialchars($blog['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                alt="Image"
                                class="img-fluid w-100 h-100"
                                style="object-fit: cover; object-position: center;">
                        </div>

                        <div class="blog-text p-3" style="height: 150px;">
                            <h3><a href="#" class="text-dark"><?php echo htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?></a></h3>
                            <p><?php echo htmlspecialchars($blog['caption'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                        <!-- <div class="blog-meta p-3">
                            <p><i class="fa fa-user"></i> <a href="#">EMPOWERED FOR CHANGE</a></p>
                        </div> -->
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
            modalDescription.innerHTML = description; // Directly set innerHTML
            modalImage.src = image;
        });
    });
</script>