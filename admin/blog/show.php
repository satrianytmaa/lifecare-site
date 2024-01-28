<?php
require '../../process/db.php';

$id = $_GET['id'];
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
    <link rel="stylesheet" href="../../style/admin/admin_default.css" />
    <link rel="stylesheet" href="../../style/admin/create.css">
    <link rel="stylesheet" href="../../style/admin/index.css">
    <link rel="stylesheet" href="../../style/admin/show.css">



    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Blog Tables - Detail</title>

</head>

<body>
    <?php
    $query = "SELECT * FROM blog WHERE id_blog= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query_user = "SELECT * FROM user WHERE id_user = $data->user_id";
    $res_user = $DB->query($query_user);
    $user = $res_user->fetch_object();
    ?>



    <div class="show-database user-show container-enable">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/blog/index.php">blog</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/blog/show.php">Show</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Detail of <?php echo $data->content ?></h4>
                <p>Detail information of the Blog.</p>
            </div>
        </div>

        <!-- Form Show -->
        <form method="POST" action="/lifecare-site/process/create_blog.php">
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="Content">Content</label>
                    <p>Content of the Blog.</p>
                </div>
                <input type="text" name="content" id="content" value="<?php echo $data->content ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="category">Category</label>
                    <p>.</p>
                </div>
                <input type="text" name="category" id="category" value="<?php echo $data->category ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="date">date</label>
                    <p>date of the Blog.</p>
                </div>
                <input type="text" name="date" id="date" value="<?php echo $data->date ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="user_id">User</label>
                    <p>user of the Blog.</p>
                </div>
                <input type="text" name="user_id" id="user_id" value="<?php echo $user->full_name ?>" readonly>
            </div>
            <div class="create-action">
                <a class="btn-cancel-a" href="/lifecare-site/process/delete_blog.php?id=<?php echo $data->id_blog; ?>" onclick="return confirmDelete()">Delete</a>
                <a href="update.php?id=<?php echo $data->id_blog; ?>" class="btn-create-a">Edit</a>

            </div>
        </form>
    </div>


</body>

<script>
    function confirmDelete() {
        var confirmation = confirm("Are you sure you want to delete this clinic?");

        if (confirmation) {
            // If the user confirms, redirect to the delete URL
            window.location.href = "/lifecare-site/process/delete_clinic.php?id=<?php echo $data->id_clinic; ?>";
        } else {
            // If the user cancels, do nothing or handle accordingly
        }
    }
</script>

</html>