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


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Users Tables</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this user?");
        }
    </script>

    <style>

        body{
            background: #F3F4F6;
        }

        .users-database .header{
            margin-bottom: 2em;
        }

        .users-database .header h4{
            font-size: 2em;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .users-database .header p{
            font-size: 1em;
            font-weight: 400;
        }

        .users-database .table{
            overflow-x: auto;
            border-radius: 1em;
            border: 2px solid #D9DADC;
        }

        .users-database .table table{
            width: 100%;
            border-collapse: collapse;
            
            border-radius: 1em;
        }

        .users-database .table table thead{
            background-color: #F9FAFB;
            border-radius: 1em;
            color: #111827;
        }

        .users-database .table table thead th{
            padding: 2em;
            font-size: 1em;
            font-weight: 700;
            text-align: left;
            border-bottom: 2px solid #D9DADC;
        }

        .users-database .table table tbody tr{
            border-bottom: 1px solid #D9DADC;
            background-color: #FFF;
        }

        .users-database .table table tbody tr td{
            padding: 2em;
            font-size: 1em;
            font-weight: 400;
            text-align: left;
        }

        .btn-normal a{
            text-decoration: none;
            color: #000;
            font-size: 1em;
            font-weight: 500;
        }

        .btn-normal a:hover{
            color: #000;
        }

        .btn-normal{
            background-color: #FFF;
            border: 1.5px solid #D8DBDC;
            outline: none;
            cursor: pointer;
            padding: 0.6em 2em;
            border-radius: 0.4em;
        }


        .btn-delete{
            background-color: #DF4939;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 0.6em 2em;
            border-radius: 0.4em;
            margin-right: 1em;
        }

        .btn-delete a{
            color: #F9FAFB;
        }

        .action-btn{
            display: flex;
            align-items: center;
            gap: 1em;
        }


        /* Customize the action button */

        /* Responsive Media */

        @media screen and (max-width: 1024px){
            .users-database{
                padding: 2em;
            }

            .users-database .header h4{
                font-size: 1.5em;
            }

            .users-database .header p{
                font-size: 0.8em;
            }

            .users-database .table table thead th{
                font-size: 0.8em;
            }

            .users-database .table table tbody tr td{
                font-size: 0.8em;
            }

            .users-database .table table tbody tr td a{
                font-size: 0.6em;
            }

            .users-database .table table tbody tr td button a{
                font-size: 0.6em;
            }
        }

        @media screen and (max-width: 768px){
            .users-database{
                padding: 2em;
            }

            .users-database .header h4{
                font-size: 1.5em;
            }

            .users-database .header p{
                font-size: 0.8em;
            }

            .users-database .table table thead th{
                font-size: 0.8em;
            }

            .users-database .table table tbody tr td{
                font-size: 0.8em;
            }

            .users-database .table table tbody tr td a{
                font-size: 0.6em;
            }

            .users-database .table table tbody tr td button a{
                font-size: 0.6em;
            }
        }

        @media screen and (max-width: 425px){
            .users-database{
                padding: 2em;
            }

            .users-database .header h4{
                font-size: 1.5em;
            }

            .users-database .header p{
                font-size: 0.8em;
            }

            .users-database .table table thead th{
                font-size: 0.8em;
            }

            .users-database .table table tbody tr td{
                font-size: 0.8em;
            }

            .users-database .table table tbody tr td a{
                font-size: 0.6em;
            }

            .users-database .table table tbody tr td button a{
                font-size: 0.6em;
            }
        }
        

        

    </style>
</head>

<body>
    <?php
    $query = "SELECT * FROM user";
    $res = $DB->query($query);
    ?>
    

    <!-- Users Database -->
     <div class="users-database container-enable">

        <!-- Header -->
        <div class="header">
            <h4>Users Database</h4>
            <p>A list of all the users in your account including their name, title, email and role.</p>
        </div>

        <!-- Table -->
        <div class="table">
        <table>
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $res->fetch_object()) { ?>
                    <tr>
                        <td><?php echo $data->id_user ?></td>
                        <td><?php echo $data->full_name ?></td>
                        <td><?php echo $data->phone_number ?></td>
                        <td><?php echo $data->password ?></td>
                        <td><?php echo $data->role ?></td>
                        <td class="action-btn">
                            <a href="show.php?id=<?php echo $data->id_user; ?>">
                                <button class="btn-normal">
                                    Show
                                </button>
                             </a>
                             <a href="update.php?id=<?php echo $data->id_user; ?>">
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
</body>

</html>