<?php
require '../../process/db.php';
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
    <link rel="stylesheet" href="../../style/admin/index.css">
    <link rel="stylesheet" href="../../style/admin/show.css">
    <link rel="stylesheet" href="../../style/admin/modal.css">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Appointments Tables</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this appointment?");
        }
    </script>

    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-add {
            background-color: #6A55EA;
            border: 1.5px solid #D8DBDC;
            outline: none;
            cursor: pointer;
            padding: 1em 3em;
            border-radius: 0.4em;

            color: #FFFFFF;
            font-weight: 500;
        }

        .btn-add:hover {
            background-color: #5C4CE3;
        }

        /* Responsive */

        @media screen and (max-width: 768px) {
            .users-database {
                padding: 0 1em;
            }

            .header {
                flex-direction: column;
                gap: 1em;
            }

            .header-content {
                text-align: center;
            }

            .header-action {
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .btn-add {
                width: 100%;
            }

            .table {
                overflow-x: scroll;
            }
        }
    </style>


</head>

<body>
    <?php
    $query = "SELECT appointment.id_appointment, appointment.number, appointment.status, appointment.date_and_time, user.full_name, clinic.name_clinic, vaccine.name_vaccine
    FROM appointment
    INNER JOIN user ON appointment.id_user = user.id_user
    INNER JOIN clinic ON appointment.id_clinic = clinic.id_clinic
    INNER JOIN vaccine ON appointment.id_vaccine = vaccine.id_vaccine";
    $res = $DB->query($query);
    ?>


    <!-- Users Database -->
    <div class="users-database container-enable">

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Appointment Database</h4>
                <p>A list of all the appointment in your account including their name, address, and email.</p>
            </div>

            <!-- hanya role user yang bisa buat appoinment -->
            <!-- <div class="header-action">
                <a href="create.php">
                    <button class="btn-add">Add Appointment</button>
                </a>
            </div> -->
        </div>

        <!-- Table -->
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Patient Name</th>
                        <th>Clinic</th>
                        <th>Vaccine</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php while ($data = $res->fetch_object()) { ?>
                        <?php
                        // $query_patient = "SELECT * FROM user WHERE id_user = $data->id_user";
                        // $res_patient = $DB->query($query_patient);
                        // $patient = $res_patient->fetch_object();
                        ?>
                        <?php
                        // $query_clinic = "SELECT * FROM clinic WHERE id_clinic = $data->id_clinic";
                        // $res_clinic = $DB->query($query_clinic);
                        // $clinic = $res_clinic->fetch_object();
                        ?>
                        <tr>

                            <td><?php echo $data->id_appointment ?></td>
                            <td><?php echo $data->full_name ?></td>
                            <td><?php echo $data->number ?></td>
                            <td><?php echo $data->name_clinic ?></td>
                            <td><?php echo $data->name_vaccine ?></td>
                            <td><?php echo $data->status ?></td>
                            <td>
                                <a href="show.php?id=<?php echo $data->id_appointment; ?>">
                                    <button class="btn-normal">
                                        Show
                                    </button>
                                </a>
                                <a href="update.php?id=<?php echo $data->id_appointment; ?>">
                                    <button class="btn-normal">
                                        Update
                                    </button></a>
                                <button class="btn-delete" onclick="return confirmDelete()"><a href="/lifecare-site/process/delete_appointment.php?id=<?php echo $data->id_appointment; ?>">Delete</a></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>