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

    <title> Appointment - Detail</title>

    <style>

        .header h4{
            font-size: 1.5em;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .header p{
            font-size: 1em;
            font-weight: 400;
            color: #6E7191;
        }

        .card-ui{
            background-color: #F8F2EB;
            color: #FFFFFF;
            padding: 2em;
            border: 2px solid #E9E9E9;
            border-radius: 1em;
            margin: 2em 0;
        }

        .card-ui .number{
            font-size: 1em;
            font-weight: 600;
            color: #6E7191;
            margin-bottom: 0.5em;
            color: #1D354F;
            opacity: 0.6;
        }

        .card-ui .fullname{
            font-size: 3em;
            font-weight: 700;
            color: #1D354F;
            margin: 0.4em 0;
        }

        .card-ui .clinic{
            font-size: 1.2em;
            font-weight: 400;
            color: #1D354F;
        }

        .card-ui .status{
            font-size: 1em;
            font-weight: 600;
            color: #1D354F;
            background-color: #FDB86B;
            padding: 0.6em 2em;
            border-radius: 0.4em;
        }

        .card-wrap{
            display: flex;
            justify-content: space-between;
            margin-top: 3em;
            align-items: center;
        }

        .card-ui .date{
            font-size: 1em;
            font-weight: 400;
            color: #1D354F;
            opacity: 0.6;
        }

        .action-button{
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 1em;
        }

        .action-button .btn-normal{
            background-color: #6A55EA;
            border: 1.5px solid #D8DBDC;
            outline: none;
            cursor: pointer;
            padding: 1em 3em;
            border-radius: 0.4em;

            color: #FFFFFF;
            font-weight: 500;
        }

        .action-button .btn-normal:hover{
            background-color: #5C4CE3;
        }

        .action-button .btn-delete{
            background-color: #FF4D4D;
            border: 1.5px solid #D8DBDC;
            outline: none;
            cursor: pointer;
            padding: 1em 3em;
            border-radius: 0.4em;

            color: #FFFFFF;
            font-weight: 500;
        }

        .action-button .btn-delete:hover{
            background-color: #E33E3E;
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

    <div class="user-database user-show container-enable">
        <!-- Header -->
        <div class="header">
            <h4>Detail Information of <?php echo $patient->full_name ?></h4>
            <p>A list of all the appointment in your account including their name, number, clinic,status, and date.</p>
        </div>

        <div class="card-ui">
                <div class="number"><?php echo $data->number ?></div>
                <div class="fullname"><?php echo $patient->full_name ?></div>
                <div class="clinic"><?php echo $clinic->name_clinic ?></div>
                
                <div class="card-wrap">
                    <div class="status"><?php echo $data->status ?></div>
    
                    <div class="date"><?php echo $data->date_and_time ?></div>
                </div>
        </div>

        <div class="action-button">
            <a href="update.php?id=<?php echo $data->id_appointment; ?>">
                <button class="btn-normal">
                    Edit
                </button>
            </a>
            <button class="btn-delete" onclick="return confirmDelete()">
                <a href="/lifecare-site/process/delete_appointment.php?id=<?php echo $data->id_appointment; ?>">Delete</a>
            </button>
        </div>
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