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


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Contact Tables</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this user?");
        }
    </script>

    <style>
        .header{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-add{
            background-color: #6A55EA;
            border: 1.5px solid #D8DBDC;
            outline: none;
            cursor: pointer;
            padding: 1em 3em;
            border-radius: 0.4em;

            color: #FFFFFF;
            font-weight: 500;
        }

        .btn-add:hover{
            background-color: #5C4CE3;
        }

        /* Responsive */

        @media screen and (max-width: 768px){
            .users-database{
                padding: 0 1em;
            }

            .header{
                flex-direction: column;
                gap: 1em;
            }

            .header-content{
                text-align: center;
            }

            .header-action{
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .btn-add{
                width: 100%;
            }

            .table{
                overflow-x: scroll;
            }
        }
    </style>

    
</head>

<body>

    <?php
    $query = "SELECT * FROM contact";
    $res = $DB->query($query);
    ?>

    <!-- Users Database -->
    <div class="users-database container-enable">

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Contact Database</h4>
                <p>A list of all the contact message that people send.</p>
            </div>
        </div>

        <!-- Table -->
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Problem</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $res->fetch_object()) { ?>
                        <?php
                        $query = "SELECT * FROM user WHERE id_user = $data->user_id";
                        $res_user = $DB->query($query);
                        $user = $res_user->fetch_object();
                        ?>
                        <tr>
                            <td><?php echo $data->id_contact ?></td>
                            <td><?php echo $user->full_name ?></td>
                            <td><?php echo $data->email ?></td>
                            <td><?php echo $data->subject ?></td>
                            <td><?php echo $data->problem ?></td>
                            <td class="action-btn">
                                <a href="show.php?id=<?php echo $data->id_contact; ?>">
                                    <button class="btn-normal">
                                        Show
                                    </button>
                                </a>
                                <a href="update.php?id=<?php echo $data->id_contact; ?>">
                                    <button class="btn-normal">
                                        Edit
                                    </button>
                                </a>
                                <button class="btn-delete" onclick="return confirmDelete()">
                                <a href="/lifecare-site/process/delete_contact.php?id=<?php echo $data->id_contact; ?>">Delete</a>
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