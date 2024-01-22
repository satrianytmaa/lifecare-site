<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id_user'])) {
    header("location: http://localhost/lifecare-site/index/login.php");
    exit();
}

// Access user information from the session
$full_name = $_SESSION['full_name'];

// Now you can use $full_name in your page
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
    

    <title>Get Started</title>

    <style>
        body{
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .new-header{
            padding: 2em 8em;
            border-bottom: 2px solid rgba(228, 231, 235, 0.431)
        }


        .container-n{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 3em;
        }

        .n-link, .n-btn-login, .n-btn-signup{
            font-size: 18px;
            color: #5c6a78;
        }

        .n-logo{
            font-size: 21px;
            color: #111826;
        }

        .n-bar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            flex-grow: 1;
        }

        .n-list{
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 3em;
        }

        .n-action{
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 3em;
        }

        .n-btn-login{
            color: #5c6a78;
        }

        .n-btn-signup{
            color: #FFFFFF;
            background-color: #6A55EA;
            padding: 0.6em 1em;
            border-radius: 1em;
        }

        /* Menu Toggle */
        .open-menu {
            display: none;
        }

        .close-menu{
            display: none;
            position: absolute;
            top: 4%;
            right: 4%;
        }

        @media only screen and (max-width: 1280px) {

            .new-header{
                display: flex;
                justify-content: space-between;
                align-items: center ;
            }
            nav{
                margin: 0;
            }

            .open-menu{
                display: block;
            }

            .n-bar {
                display: flex;
                justify-content: center;
                align-items: center;
                transform: translateX(100%);
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #111826;
                z-index: 1;
            }

            .n-list{
                display: flex;
                flex-direction: column;
            }

            .n-link, .n-btn-login, .n-btn-signup{
                font-size: 18px;
                color: #fff;
            }

            .n-action{
                position: absolute;
                bottom: 4%;
                right: 4%;
            }
            
            .n-bar.show {
                transform: translateX(0);
            }

            .close-menu.show {
                display: block;
            }

            .n-list li {
                display: block;
                margin-bottom: 1.6em;
                color: #fff;
            }

            .mobile-toggle {
                display: block;
            }
        }

        .n-logo img{
            font-size: 2em;
        }

        .sticky-nav {
            position: sticky;
            top: 0;
            background-color: #ffffff; /* Add a background color for the sticky navigation */
            z-index: 100; /* Adjust the z-index as needed */
        }

        .user-profile{
            display: flex;
            gap: 1em;
            justify-content: center;
            align-items: center;
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
                        <a href="../index.html" class="n-link">Home</a>
                    </li>
                    <li class="n-item">
                        <a href="./vaccine.php" class="n-link">Healthcare</a>
                    </li>
                    <li class="n-item">
                        <a href="./blog.html" class="n-link">Blog</a>
                    </li>
                    <li class="n-item">
                        <a href="./about.html" class="n-link">About</a>
                    </li>
                    <li class="n-item">
                        <a href="./contact.php" class="n-link">Contact</a>
                    </li>
                </ul>
                
                <!-- Action Button -->
                <div class="user-profile">
                    <img src="../assets/default/Pfp-1.png" alt="Profile" width="40px" />
                    <div class="profile-name">
                        <p>
            
                        <?php echo $full_name; ?>
     
                        </p>
                
                    </div>
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

    <script>
        // Update the toggleMenu function
        function toggleMenu() {
            var navbar = document.querySelector('.n-bar');
            var close = document.querySelector('.close-menu');
            navbar.classList.toggle('show');
            close.classList.toggle('show');

        }

        // Add the closeMenu function
        function closeMenu() {
            var navbar = document.querySelector('.n-bar');
            var close = document.querySelector('.close-menu');
            navbar.classList.remove('show');
            close.classList.remove('show'); // Remove 'show' class from close button as well
        }

        // Add an event listener to close the menu when clicking outside or pressing the close button
        document.addEventListener('click', function (event) {
            var navbar = document.querySelector('.navbar');
            var toggleButton = document.querySelector('.mobile-toggle');

            if (event.target !== navbar && event.target !== toggleButton && !navbar.contains(event.target)) {
                closeMenu(); // Call closeMenu function instead of directly removing 'show' class
            }
        });



    </script>
    
</body>

</html>