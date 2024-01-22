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

    <title>Contacts Tables - Detail</title>

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
        $query = "SELECT contact.*, user.* FROM contact
                JOIN user ON contact.user_id = user.id_user
                WHERE contact.id_contact = $id";

        $res = $DB->query($query);

        if ($res->num_rows > 0) {
            $row = $res->fetch_object();
            $row->id_contact;
            $row->full_name;
        } else {
            // Handle no results
        }
    ?>






    <div class="show-database user-show container-enable">

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
        <p>/</p>
        <a class="bread" href="/lifecare-site/admin/clinic/index.php">Contact</a>
        <p>/</p>
        <a class="bread current" href="/lifecare-site/admin/clinic/create.php">Show</a>
    </div>

    <!-- Header -->
    <div class="header">
        <div class="header-content">
            <h4>Detail of <?php echo $row->full_name ?></h4>
            <p>Detail information of the clinic, including name, location, and email.</p>
        </div>
    </div>

    <!-- Form Show -->
    <form method="POST" action="/lifecare-site/process/create_contact.php">
        <div class="form-wrap">
            <div class="form-headline">
                <label for="id">No</label>
                <p>Number of the contact data.</p>
            </div>
            <input type="text" name="id" id="id" value="<?php echo $row->id_contact ?>" readonly>
        </div>
        <div class="form-wrap">
            <div class="form-headline">
                <label for="name">Name</label>
                <p>Name of the person.</p>
            </div>
            <input type="text" name="name" id="name" value="<?php echo $row->full_name ?>" readonly>
        </div>
        <div class="form-wrap">
            <div class="form-headliner">
                <label for="email">Email</label>
                <p>Email used in contact form.</p>
            </div>
            <input type="text" name="email" id="email" value="<?php echo $row->email ?>" readonly>
        </div>
        <div class="form-wrap">
            <div class="form-headline">
                <label for="subject">Subject</label>
                <p>Subject of the email.</p>
            </div>
            <input type="text" name="subject" id="subject" value="<?php echo $row->subject ?>" readonly>
        </div>
        <div class="form-wrap">
            <div class="form-headline">
                <label for="problem">Problem</label>
                <p>User's problem in contact form.</p>
            </div>
            <input type="textarea" name="problem" id="problem" value="<?php echo $row->problem ?>" readonly>
        </div>
        <div class="create-action">
            <a class="btn-cancel-a" href="/lifecare-site/process/delete_clinic.php?id=<?php echo $data->id_contact; ?>" onclick="return confirmDelete()">Delete</a>
            <a href="update.php?id=<?php echo $row->id_contact; ?>" class="btn-create-a">Edit</a>

        </div>
    </form>


</body>

<script>
    function confirmDelete() {
        var confirmation = confirm("Are you sure you want to delete this contact?");

        if (confirmation) {
            // If the user confirms, redirect to the delete URL
            window.location.href = "/lifecare-site/process/delete_contact.php?id=<?php echo $data->id_contact; ?>";
        } else {
            // If the user cancels, do nothing or handle accordingly
        }
    }
</script>

</html>