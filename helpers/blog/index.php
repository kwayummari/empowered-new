<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Blog</p>
            <h2>Latest news & articles directly from our blog</h2>
        </div>
        <div class="row">
            <?php
            // Fetch blogs from the database
            $query = "SELECT * FROM blogs";
            $result = mysqli_query($connect, $query);
            while ($blog = mysqli_fetch_assoc($result)) {
                // Display blog
                echo '<div class="col-lg-4">';
                echo '    <div class="blog-item">';
                echo '        <div class="blog-img">';
                echo '            <img src="img/blog-1.jpg" alt="Image">';
                echo '        </div>';
                echo '        <div class="blog-text">';
                echo '            <h3><a href="#" class="blog-link" data-description="'. htmlspecialchars($blog['description']) .'"> ' . htmlspecialchars($blog['title']) . '</a></h3>';
                echo '            <p>' . htmlspecialchars($blog['caption']) . '</p>';
                echo '        </div>';
                echo '        <div class="blog-meta">';
                echo '            <p><i class="fa fa-user"></i><a href="">Admin</a></p>';
                echo '            <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Popup for Description -->
<div id="description-popup" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="popup-description"></div>
    </div>
</div>

<script>
document.querySelectorAll('.blog-link').forEach(item => {
    item.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('popup-description').innerHTML = this.getAttribute('data-description');
        document.getElementById('description-popup').style.display = 'block';
    });
});

document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('description-popup').style.display = 'none';
});
</script>
