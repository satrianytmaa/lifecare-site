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

    <!-- Admin Stylesheet -->
    <link rel="stylesheet" href="../../style/admin/admin_default.css" />
    <link rel="stylesheet" href="../../style/admin/create.css">
    <link rel="stylesheet" href="../../style/admin/index.css">
    <link rel="stylesheet" href="../../style/admin/show.css">
    <link rel="stylesheet" href="../../style/admin/modal.css">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Appointment Tables - Detail</title>

    <style>
        .user-show .header {
            margin-bottom: 2em;
        }

        .user-show .header h4 {
            font-size: 1.5em;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .user-show .header p {
            font-size: 1em;
            font-weight: 400;
            color: #6E7191;
        }

        .user-show .user-data {
            background-color: #F6F8FB;
            padding: 1em;
            border-radius: 1em;
        }

        .user-show .user-data h5 {
            font-size: 1em;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .user-show .user-data p {
            font-size: 1em;
            font-weight: 400;
            color: #6E7191;
        }
    </style>

</head>

<body>
    <?php
    $query = "SELECT * FROM appointment WHERE id_appointment= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM user WHERE id_user = $data->id_user ";
    $res = $DB->query($query);
    $patient = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM clinic WHERE id_clinic= $data->id_clinic ";
    $res = $DB->query($query);
    $clinic = $res->fetch_object();
    ?>

    <div class="show-database user-show container-enable">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/appointment/index.php">Appointment</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/appointment/show.php">Show</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Detail of <?php echo $data->number ?></h4>
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
                <input type="text" name="content" id="content" value="<?php echo $data->id_appointment ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="category">Category</label>
                    <p>.</p>
                </div>
                <input type="text" name="category" id="category" value="<?php echo $patient->full_name ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="date">date</label>
                    <p>date of the Blog.</p>
                </div>
                <input type="text" name="date" id="date" value="<?php echo $data->number ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="user_id">User</label>
                    <p>user of the Blog.</p>
                </div>
                <input type="text" name="user_id" id="user_id" value="<?php echo $clinic->name_clinic ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="user_id">User</label>
                    <p>user of the Blog.</p>
                </div>
                <input type="text" name="user_id" id="user_id" value="<?php echo $data->status ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="user_id">User</label>
                    <p>user of the Blog.</p>
                </div>
                <input type="text" name="user_id" id="user_id" value="<?php echo $data->date_and_time ?>" readonly>
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
        var confirmation = confirm("Are you sure you want to delete this appointment?");

        if (confirmation) {
            // If the user confirms, redirect to the delete URL
            window.location.href = "/lifecare-site/process/delete_appointment.php?id=<?php echo $data->id_appointment; ?>";
        } else {
            // If the user cancels, do nothing or handle accordingly
        }
    }
</script>

</html>