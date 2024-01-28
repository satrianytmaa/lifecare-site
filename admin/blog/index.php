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


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Blog Tables</title>

    <script>
        function openModal(id) {
            document.getElementById('confirmationModal').style.display = 'block';
            // Set the clinic ID in a hidden input field within the modal
            document.getElementById('BlogIdInput').value = id;
        }

        function closeModal() {
            document.getElementById('confirmationModal').style.display = 'none';
        }

        function confirmDelete() {
            // Get the clinic ID from the hidden input field
            var blogId = document.getElementById('BlogIdInput').value;

            // Add logic to perform deletion using clinicId
            var deleteLink = document.getElementById('deleteLink');
            deleteLink.href = "/lifecare-site/process/delete_blog.php?id=" + blogId;
            deleteLink.click(); // Trigger the click on the hidden link
            closeModal(); // Close the modal after deletion
        }

        // function openCustomAlert(message) {
        //     document.getElementById('customAlertMessage').innerText = message;
        //     document.getElementById('customAlertModal').style.display = 'block';

        //     // Automatically close the modal after 3 seconds (adjust the time as needed)
        //     setTimeout(function() {
        //         closeCustomAlert();
        //     }, 3000);
        // }

        // function closeCustomAlert() {
        //     var modal = document.getElementById('customAlertModal');
        //     modal.classList.add('fade-out');

        //     // Delay the actual hiding of the modal to match the transition duration
        //     setTimeout(function() {
        //         modal.style.display = 'none';
        //         modal.classList.remove('fade-out');
        //     }, 500); // Adjust the duration to match the transition duration
        // }
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

        /* Modal */
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>


</head>

<body>
    <?php
    $query = "SELECT * FROM blog";
    $res = $DB->query($query);
    ?>

    <!-- Modal -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Are you sure you want to delete this Blog?</p>
            <button onclick="confirmDelete()">Yes, Delete</button>
            <button onclick="closeModal()">No, Cancel</button>
            <!-- Hidden input to store Blog ID -->
            <input type="hidden" id="BlogIdInput" value="">
        </div>
    </div>

    <!-- Custom Alert Modal -->
    <!-- <div id="customAlertModal" class="modal">
        <div class="modal-content">
            <p id="customAlertMessage"></p>
        </div>
    </div> -->




    <!-- Users Database -->
    <div class="users-database container-enable">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/Blog/index.php">Blog</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/Blog/create.php">Index</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Blog Database</h4>
                <p>A list of all the Blog.</p>
            </div>

            <div class="header-action">
                <a href="create.php">
                    <button class="btn-add">Add Blog</button>
                </a>
            </div>
        </div>

        <!-- Table -->
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Content</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $res->fetch_object()) { ?>
                        <?php
                        $query_user = "SELECT * FROM user WHERE id_user = $data->user_id";
                        $res_user = $DB->query($query_user);
                        $user = $res_user->fetch_object();
                        ?>
                        <tr>
                            <td><?php echo $data->id_blog ?></td>
                            <td><?php echo $data->content ?></td>
                            <td><?php echo $data->category ?></td>
                            <td><?php echo $data->date ?></td>
                            <td><?php echo $user->full_name ?></td>
                            <td>
                                <a href="show.php?id=<?php echo $data->id_blog; ?>">
                                    <button class="btn-normal">
                                        Show
                                    </button>
                                </a>
                                <a href="update.php?id=<?php echo $data->id_blog; ?>">
                                    <button class="btn-normal">
                                        Update
                                    </button></a>
                                <button class="btn-delete" onclick="return confirmDelete()"><a href="/lifecare-site/process/delete_blog.php?id=<?php echo $data->id_blog; ?>">Delete</a></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>