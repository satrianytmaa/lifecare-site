<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id_user'])) {
    header("location: http://localhost/lifecare-site/index/login.php");
    exit();
}

// Access user information from the session
$full_name = $_SESSION['full_name'];

require '../process/db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Browser Logo -->

    <!-- Browser Logo -->
    <link rel="icon" href="../assets/icons/Logo.svg" />

    <!-- components -->
    <link rel="stylesheet" href="../style/components/support.css" />
    <link rel="stylesheet" href="../style/components/blog.css" />
    <link rel="stylesheet" href="../style/components/footer.css" />

    <!-- Base Config -->
    <link rel="stylesheet" href="../style/base_font.css" />
    <link rel="stylesheet" href="../style/base_config.css" />
    <link rel="stylesheet" href="../style/base_root.css" />
    <link rel="stylesheet" href="../style/base_component.css" />

    <!-- Initial -->
    <link rel="stylesheet" href="../style/contact_page.css" />
    <link rel="stylesheet" href="../style/contact_responsive.css" />

    <!-- Responsive -->
    <link rel="stylesheet" href="" />

    <!-- New Header V2 -->
    <link rel="stylesheet" href="../style/components/headerv2.css" />
    <link rel="stylesheet" href="../style/admin/dashboard.css">
    <link rel="stylesheet" href="../style/admin/index.css">


    


    <title>Get Started</title>

    <style>
        .user-profile {
            display: flex;
            gap: 1em;
            justify-content: center;
            align-items: center;
        }

        .profile-name p {
            font-size: 18px;
            color: #5c6a78;
        }

        .content img {
            width: 56px;
            height: 56px;
            margin-bottom: 1em;
        }



        .table {
            overflow-x: auto;
            border-radius: 1em;
            border: 2px solid rgba(228, 231, 235, 0.431);
            margin: 3em 0;
        }

        .table table {
            width: 100%;
            border-collapse: collapse;

            border-radius: 1em;
        }

        .table table thead {
            background-color: #F9FAFB;
            border-radius: 1em;
            color: #111827;
        }

        .table table thead th {
            padding: 2em;
            font-size: 1em;
            font-weight: 700;
            text-align: left;
            border-bottom: 2px solid rgba(228, 231, 235, 0.500);
        }

        .table table tbody tr {
            border-bottom: 1px solid rgba(228, 231, 235, 0.500);
            background-color: #FFF;
        }

        .table table tbody tr td {
            padding: 2em;
            font-size: 1em;
            text-align: left;
        }

        .btn-normal a {
            text-decoration: none;
            color: #000;
            font-size: 1em;
            font-weight: 500;
        }

        .btn-normal a:hover {
            color: #000;
        }

        .btn-normal {
            background-color: #FFF;
            border: 1.5px solid #D8DBDC;
            outline: none;
            cursor: pointer;
            padding: 0.6em 2em;
            border-radius: 0.4em;
        }


        .btn-delete {
            background-color: #DF4939;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 0.6em 2em;
            border-radius: 0.4em;
            margin-right: 1em;
        }

        .btn-delete a {
            color: #F9FAFB;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 1em;
        }

        .table-full-name {
            color: #000;
            font-weight: bold;
        }

        /* Customize the action button */

        /* Responsive Media */



        body {
            background: #FCFCFC;
        }

        .header-content h4 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 0.4em;
            color: #1d354f;
        }

        p {
            font-size: 1rem;
            font-weight: 400;
            color: #5c6a78;
        }

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

        .user-action {
            display: flex;
            align-items: center;
            gap: 2em;
        }

        .btn-logout {
            padding: 1.4em;
            border: none;
            background-color: #6A55EA;
            color: #FFFFFF;
            border-radius: 1em;
            text-align: center;
            font-family: "Roobert-Medium", sans-serif;
            font-size: 0.9em;
            transition: all 200ms ease-in-out;
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

    <div class="new-header sticky-nav">

        <div class="container-n">
            <!-- Logo -->
            <div class="n-logo">
                <img src="../assets/Icons/logo/logo-new-md.svg" alt="">
            </div>

            <!-- Navigation -->
            <nav class="n-bar">
                <ul class="n-list">
                    <li class="n-item">
                        <a href="#" class="n-link">Home</a>
                    </li>
                    <li class="n-item">
                        <a href="user/index.php" class="n-link">Users</a>
                    </li>
                    <li class="n-item">
                        <a href="clinic/index.php" class="n-link">Clinic</a>
                    </li>
                    <li class="n-item">
                        <a href="vaccine/index.php" class="n-link">Vaccine</a>
                    </li>
                    <li class="n-item">
                        <a href="contact/index.php" class="n-link">Contact</a>
                    </li>
                    <li class="n-item">
                        <a href="appointment/index.php" class="n-link">Appointment</a>
                    </li>
                </ul>

                <!-- Action Button -->
                <div class="user-action">
                    <div class="user-profile">
                        <img src="../assets/default/Pfp-1.png" alt="Profile" width="40px" />
                        <div class="profile-name">
                            <p><?php echo $full_name; ?></p>
                        </div>
                    </div>

                    <form action="../process/process_logout.php" method="POST">
                        <button class="btn-logout" type="submit">Logout</button>
                    </form>

                </div>

                <button class="close-menu" onclick="closeMenu()">
                    <img src="../assets/Icons/x-close.png" alt="" />
                </button>
            </nav>

        </div>



        <button class="open-menu" onclick="toggleMenu()">
            <img src="../assets/Icons/align-justify.png" alt="" />
        </button>

    </div>

    <div class="d-header container-enable-special">
        <div class="d-header-content">
            <h4>Welcome back, <?php echo $full_name; ?>!</h4>
            <p>Take a look for the recent data.</p>
        </div>
    </div>

    <div class="dashboard-content container-enable-special">
        <div class="content-wrap">
            <a href="#">
                <div class="content">
                    <img src="assets/user.svg" alt="Icon">
                    <p>Registerd User</p>
                    <?php
                    // menghitung total data user 
                    $query = "SELECT COUNT(*) AS jumlah_pengguna FROM user";
                    $res = $DB->query($query);

                    // ekstrak nilai  jumlah_pengguna jika ada tampilkan total data user, jika tidak tampilkan 0
                    $jumlah_pengguna = ($res) ? $res->fetch_assoc()['jumlah_pengguna'] : 0;
                    ?>

                    <h3><?php echo $jumlah_pengguna; ?></h3>
                    <p class="small">Increase vs last month</p>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="assets/clinic.svg" alt="">
                    <p>Registerd Clinic</p>
                    <?php
                    // menghitung total data clinic
                    $query = "SELECT COUNT(*) AS jumlah_clinic FROM clinic";
                    $res = $DB->query($query);

                    // ekstrak nilai  jumlah_clinic jika ada tampilkan total data clinic, jika tidak tampilkan 0
                    $jumlah_clinic = ($res) ? $res->fetch_assoc()['jumlah_clinic'] : 0;
                    ?>

                    <h3><?php echo $jumlah_clinic; ?></h3>
                    <p class="small">Increase vs last month</p>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="assets/vaccine.svg" alt="">
                    <p>Registerd Vaccine</p>
                    <?php
                    // menghitung total data vaccine
                    $query = "SELECT COUNT(*) AS jumlah_vaccine FROM vaccine";
                    $res = $DB->query($query);

                    // ekstrak nilai  jumlah_clinic jika ada tampilkan total data clinic, jika tidak tampilkan 0
                    $jumlah_vaccine = ($res) ? $res->fetch_assoc()['jumlah_vaccine'] : 0;
                    ?>

                    <h3><?php echo $jumlah_vaccine; ?></h3>
                    <p class="small">Increase vs last month</p>
                </div>
            </a>
        </div>
    </div>

    <div class="recent-content container-enable-special">
        <div class="rc-header">
            <div class="rc-left">
                <h4>Recent User</h4>
                <p>Registered in the past of 24 hours</p>
            </div>
            <a href="#">View All</a>
        </div>

        <div class="rc-wrap">
            <?php
            $query = "SELECT * FROM user";
            $res = $DB->query($query);
            ?>
            <!-- Table -->
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = $res->fetch_object()) { ?>
                            <tr>
                                <td><?php echo $data->id_user ?></td>
                                <td class="table-full-name"><?php echo $data->username ?></td>
                                <td class="table-full-name"><?php echo $data->full_name ?></td>
                                <td><?php echo $data->role ?></td>
                                <td class="action-btn">
                                    <a href="user/show.php?id=<?php echo $data->id_user; ?>">
                                        <button class="btn-normal">
                                            Show
                                        </button>
                                    </a>
                                    <a href="user/update.php?id=<?php echo $data->id_user; ?>">
                                        <button class="btn-normal">
                                            Edit
                                        </button>
                                    </a>
                                    <button class="btn-delete" onclick="return confirmDelete()">
                                        <a href="/lifecare-site/process/delete_user.php?id=<?php echo $data->id_user; ?>">Delete</a>
                                    </button>

                                </td>
                            </tr>   
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../javascript/toggle.js"></script>



</body>

</html>