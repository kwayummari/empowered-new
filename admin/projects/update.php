<?php
session_start();
include '../connection/index.php';
$id = $_GET['id'];
$query = "SELECT * FROM projects WHERE id = '$id'";
$result4 = mysqli_query($connect, $query);
$blog = mysqli_fetch_assoc($result4);

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $caption = $_POST['caption'];
    $description = $_POST['description'];
    $file = $_FILES["cv"]["name"];
    $path = $_FILES['cv']['tmp_name'];
    $folder = "../../img/blogs/";

    if ($file) {
        $final_name = time() . '-' . str_replace(" ", "-", $file);
        move_uploaded_file($path, $folder . $final_name);
        $imageQuery = ", image='$final_name'";
    } else {
        $imageQuery = "";
    }

    $updateQuery = "UPDATE projects SET 
        title='$title', 
        caption='$caption', 
        description='$description' 
        $imageQuery 
        WHERE id='$id'";
    
    $update = mysqli_query($connect, $updateQuery);

    if ($update) {
        echo "Blog Updated Successfully!";
        header("Location: index.php");
        exit;
    } else {
        echo "Failed to Update Blog.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "../head/head2.php" ?>
<body>
  <?php include "../header/header2.php" ?>
  <?php include "../aside/aside2.php" ?>
  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Update Blog Details</h5>
            <form method="POST" action="" autocomplete="on" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" value="<?php echo htmlspecialchars($blog['title']); ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputCaption" class="col-sm-2 col-form-label">Caption</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="caption" value="<?php echo htmlspecialchars($blog['caption']); ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <textarea rows="20" id="editor" class="form-control" name="description"><?php echo htmlspecialchars($blog['description']); ?></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputImage" class="col-sm-2 col-form-label">Main Image</label>
                <div class="col-sm-10">
                  <input class="form-control" type="file" name="cv" id="file_id">
                  <?php if ($blog['image']) { ?>
                    <img src="../../img/blogs/<?php echo htmlspecialchars($blog['image']); ?>" alt="Current Image" style="margin-top: 10px; max-width: 200px;">
                  <?php } ?>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                  <button type="submit" name="submit" class="btn btn-primary">Update Blog</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include "../footer/footer.php" ?>
  <script src="ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor', {
      filebrowserUploadUrl: 'upload.php',
      filebrowserUploadMethod: 'form',
    });
  </script>
</body>
</html>