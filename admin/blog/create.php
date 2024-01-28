<?php
require '../../process/db.php';
?>

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id_user'])) {
    header("location: http://localhost/lifecare-site/index/login.php");
    exit();
}

// Access user information from the session
$full_name = $_SESSION['full_name'];


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Browser Logo -->

    <!-- Browser Logo -->
    <link rel="icon" href="../../assets/icons/Logo.svg" />

    <!-- components -->
    <link rel="stylesheet" href="../../style/components/header.css" />
    <link rel="stylesheet" href="../../style/components/support.css" />
    <link rel="stylesheet" href="../../style/components/blog.css" />
    <link rel="stylesheet" href="../../style/components/footer.css" />

    <!-- Base Config -->
    <link rel="stylesheet" href="../../style/base_font.css" />
    <link rel="stylesheet" href="../../style/base_config.css" />
    <link rel="stylesheet" href="../../style/base_root.css" />
    <link rel="stylesheet" href="../../style/base_component.css" />

    <!-- Initial -->
    <link rel="stylesheet" href="../../style/contact_page.css" />
    <link rel="stylesheet" href="../../style/contact_responsive.css" />

    <!-- Responsive -->
    <link rel="stylesheet" href="" />

    <!-- Admin Stylesheet -->
    <link rel="stylesheet" href="../../style/admin/admin_default.css" />
    <link rel="stylesheet" href="../../style/admin/create.css">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />



    <title>Blog Tables</title>


</head>

<body>

    <?php
    $query = "SELECT * FROM blog";
    $res = $DB->query($query);
    ?>



    <div class="create-database container-enable">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/blog/index.php">Blog</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/blog/create.php">Create</a>
        </div>


        <!-- Header Create -->
        <div class="header">
            <div class="header-content">
                <h4>Create</h4>
                <p>Create a Blog.</p>
            </div>


        </div>

        <!-- Form Create -->
        <form method="POST" action="/lifecare-site/process/create_blog.php">
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="content">Content</label>
                    <p>Content of the blog.</p>
                </div>
                <input type="text" name="content" id="content" placeholder="Enter the content...">
            </div>
            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="category">Category</label>
                    <p>Input the Category of the blog.</p>
                </div>
                <input type="text" name="category" id="category" placeholder="Enter the category...">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="date">Date</label>
                    <p>Date of the blog.</p>
                </div>
                <input type="date" name="date" id="date" placeholder="Enter the date...">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="user_id">Publisher</label>
                    <p>Publisher of the blog.</p>
                </div>
                <input type="text" name="user_id" id="user_id" placeholder="Enter the user..." value="<?php echo $full_name; ?>" readonly>
            </div>
            <div class="create-action">
                <button class="btn-cancel">Cancel</button>
                <button class="btn-create" type="submit">Save</button>
            </div>
        </form>
    </div>
</body>

</html>