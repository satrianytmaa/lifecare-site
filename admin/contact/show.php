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
    $query = "SELECT * FROM contact WHERE id_contact= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM user WHERE id_user= $data->user_id ";
    $res = $DB->query($query);
    $user = $res->fetch_object();
    ?>




    <div class="user-database user-show container-enable">
        <!-- Header -->
        <div class="header">
            <h4>Detail Information of <?php echo $user->full_name ?></h4>
            <p>A list of all the contacts in your account including their name, email, subject, and problem.</p>
        </div>

        <div class="user-data">
            <h5>Id : <?php echo $data->id_contact ?></h5>
            <h5>Name : <?php echo $user->full_name ?></h5>
            <h5>Email : <?php echo $data->email ?></h5>
            <h5>Subject : <?php echo $data->subject ?></h5>
            <h5>Problem : <?php echo $data->problem ?></h5>
        </div>

        <div class="action-button">
            <a href="update.php?id=<?php echo $data->id_contact; ?>">
                <button class="btn-normal">
                    Edit
                </button>
            </a>
            <button class="btn-delete" onclick="return confirmDelete()">
                <a href="/lifecare-site/process/delete_contact.php?id=<?php echo $data->id_contact; ?>">Delete</a>
            </button>
        </div>
    </div>


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