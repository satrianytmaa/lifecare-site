<?php


session_start();
// if (!isset($_SESSION['role'])) {
//     header('location: localhost/lifecare-site/admin/dashboard.php');
// }
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
    <link rel="stylesheet" href="../style/components/header.css" />
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
    <link rel="stylesheet" href="../style/admin/admin_dashboard.css" />


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Admin Dashboard</title>

    <style>
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1em;
            gap: 4em
        }

        .navbar {
            display: flex;
            flex-grow: 1;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .logo {
            font-size: 1.6em;
        }

        .menu {
            list-style: none;
            gap: 1em;
        }

        .menu li {
            display: inline-block;
            margin-right: 20px;
        }

        .menu a {
            text-decoration: none;
            font-size: 1.2em;
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .username {
            font-size: 16px;
        }

        .logout-btn {
            background-color: #555;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .mobile-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        @media only screen and (max-width: 768px) {
            nav {
                margin: 0;
            }

            .navbar {
                flex-direction: column;
                transform: translateX(100%);
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #333;
                z-index: 1;
            }

            .navbar.show {
                transform: translateX(0);
            }

            .menu li {
                display: block;
                margin-bottom: 10px;
            }

            .mobile-toggle {
                display: block;
            }
        }

        /* Add these styles to the existing styles.css */

        .close-btn {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            background: none;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 768px) {
            .close-btn {
                display: block;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <div class="logo">
                <!-- <img src="../assets/Icons/Logo Typeface.svg" alt="Logo"> -->
                Lifecare
            </div>
            <nav class="navbar">
                <ul class="menu">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Vaccine</a></li>
                </ul>
                <div class="profile">
                    <button class="logout-btn">Logout</button>
                </div>

                <button class="close-btn" onclick="closeMenu()">✖</button>
            </nav>
            <div class="mobile-toggle" onclick="toggleMenu()">&#9776;</div>
        </div>
    </header>

    <script>
        // Add these lines to the existing script.js
        // Update the toggleMenu function
        function toggleMenu() {
            var navbar = document.querySelector('.navbar');
            navbar.classList.toggle('show');
        }

        // Add the closeMenu function
        function closeMenu() {
            var navbar = document.querySelector('.navbar');
            navbar.classList.remove('show');
        }

        // Add an event listener to close the menu when clicking outside or pressing the close button
        document.addEventListener('click', function(event) {
            var navbar = document.querySelector('.navbar');
            var toggleButton = document.querySelector('.mobile-toggle');

            if (event.target !== navbar && event.target !== toggleButton && !navbar.contains(event.target)) {
                navbar.classList.remove('show');
            }
        });
    </script>
</body>

</html>