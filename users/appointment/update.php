<?php
require '../../process/db.php';

session_start();
$id = $_GET['id'];
// Store the ID in the session
$_SESSION['id_appointment'] = $id;
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

    <title>Clinics Tables - Detail</title>

    <style>
        .dropdown-select{
            width: 60%;
            border-radius: 8px;
            border: 1px solid #f2f2f2;
            background-color: #f9f9f9;
            padding: 16px 16px;
            font-family: "Inter", sans-serif;
            font-size: 16px;
            font-weight: 400;
        }
    </style>
</head>

<body>

    

    <!-- Header -->
    <div class="show-database user-show container-enable"">
        <div class="header-content">
            <h4>Update <?php echo $data->name_clinic ?></h4>
            <p>Detail information of the clinic, including name, location, and email.</p>
        </div>

        <!-- Form Show -->
        <form method="POST" action="/lifecare-site/process/update_appointment.php">
            <!-- buat query select select clinic -->
            <?php
            $query = "SELECT * FROM appointment WHERE id_appointment= $id ";
            $res = $DB->query($query);
            $data = $res->fetch_object();
            ?>

            <?php
            $query_patient = "SELECT * FROM user WHERE id_user= $data->id_user";
            $res_patient = $DB->query($query_patient);
            $patient = $res_patient->fetch_object();
            ?>

            <?php
            $query_clinic = "SELECT * FROM clinic ";
            $res_clinic = $DB->query($query_clinic);
            // $clinic = $res->fetch_object();
            ?>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="name">Name</label>
                    <p>Full name of the patient.</p>
                </div>
                <input type="text" name="name" id="name" value="<?php echo $patient->full_name; ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="clinic">Clinic</label>
                    <p>Location of the clinic.</p>
                </div>
                <select class="dropdown-select" name="clinic" id="clinic">

                <?php

                while ($clinic = $res_clinic->fetch_object()) {
                    $selected = ($data->id_clinic == $clinic->id_clinic) ? 'selected' : '';
                    echo '<option value="' . $clinic->id_clinic . '" ' . $selected . '>' . $clinic->name_clinic . '</option>';
                }
                ?>

            </select>
            </div>
            <div class="create-action">
                <a class="btn-cancel-a" href="/lifecare-site/process/delete_appointment.php?id=<?php echo $data->id_appointment; ?>" onclick="return confirmDelete()">Delete</a>

            </div>
        </form>


    </div>
</body>

</html>