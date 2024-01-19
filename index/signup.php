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
    <link rel="stylesheet" href="" />


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Get Started</title>

    <style>
        .signup {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            gap: 16em;
        }

        .signup-form {
            display: flex;
            flex-direction: column;
            gap: 1.5em;
            margin-top: 2em;
        }

        .header {
            margin-bottom: 2em;
        }

        .header h3 {
            margin-bottom: 0.5em;
        }

        .button-signup {
            margin: 2em 0;
        }

        .logo-placement,
        .copyright-placement {
            /* Make the logo stick on the corner left without disturbing other element */
            position: absolute;
        }

        .logo-placement {
            top: 2em;
            left: 2em;
        }

        .copyright-placement {
            bottom: 2em;
            left: 2em;
        }

        .error-password {
            font-size: 0.8em;
        }

        .wrapper-message {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Responsive Media */

        @media screen and (max-width: 1180px) {
            .signup {
                gap: 4em;
            }
        }

        @media screen and (max-width: 1024px) {

            /* Create the responsive */
            .signup {
                flex-direction: column;
                gap: 0;
                padding: 2em;
            }

            .signup-img {
                display: none;
            }

            .signup-content {
                width: 100%;
            }

            .signup-form {
                margin-top: 0;
            }

            .header {
                margin-bottom: 1em;
            }

            .button-signup {
                margin: 1em 0;
            }

        }

        /* Responsive Media */
        @media screen and (max-width: 768px) {}

        /* Responsive Media */
        @media screen and (max-width: 425px) {}
    </style>
</head>

<body>

    <!-- Logo Placement -->
    <div class="logo-placement">
        <img src="../assets/Icons/Logo Typeface.svg" alt="">
    </div>

    <!-- Copyright Placement -->
    <p class="copyright-placement">Copyright of @Lifecare.io All Reserved 2024</p>

    <!-- Sign Up Form -->
    <div class="signup container-enable">

        <div class="signup-content">

            <!-- Header -->
            <div class="header">
                <h3>Create an Account</h3>
                <p>Fill the form with the required information in order to join with us</p>
            </div>

            <!-- Button Google Sign Up -->
            <!-- <div class="google-button">
                <button>Sign Up with Google</button>
            </div> -->

            <!-- Form Sign Up -->
            <form action="../process/process_started.php" class="signup-form" method="POST" onsubmit="return validateForm()">
                <!-- <div class="form-wrap">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Enter your Username" required />
                </div> -->
                <div class="form-wrap">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" placeholder="Enter your Fullname" required />
                </div>
                <div class="form-wrap">
                    <label for="phone_number">Phone Number</label>
                    <input type="number" name="phone_number" placeholder="Enter your Phone Number" required />
                </div>
                <div class="form-wrap">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your Password" required oninput="checkPasswordMatch()" />
                </div>
                <div class="form-wrap">
                    <div class="wrapper-message">
                        <label for="confirm_password">Confirm Password</label>
                        <!-- Error Message -->
                        <span class="error-password" id="password_match_error"></span>
                    </div>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter your Password" required oninput="checkPasswordMatch()" />
                </div>
                <button type="submit" class="button-primary button-signup"><a href="../users/index.php">Create an Account</a></button>
            </form>


            <p>Already have an account? <a href="#">Log In</a></p>
        </div>

        <!-- Sign Up Image -->
        <div class="signup-img">
            <img src="../assets/images/Content/Vaccine.png" alt="Sign Up">
        </div>

    </div>
    <!-- JavaScript -->
    <script>
        function checkPasswordMatch() {
            var password1 = document.getElementById("password").value;
            var password2 = document.getElementById("confirm_password").value;
            var errorSpan = document.getElementById("password_match_error");

            if (password1 !== password2) {
                errorSpan.innerHTML = "Passwords do not match!";
                errorSpan.style.color = "red"; // Set error message color to red
            } else {
                errorSpan.innerHTML = "Good to go!";
                errorSpan.style.color = "green"; // Set success message color to green
            }
        }

        function validateForm() {
            var password1 = document.getElementById("password").value;
            var password2 = document.getElementById("confirm_password").value;

            if (password1 !== password2) {
                var errorSpan = document.getElementById("password_match_error");
                errorSpan.innerHTML = "Passwords do not match!";
                errorSpan.style.color = "red"; // Set error message color to red
                return false;
            }

            return true;
        }
    </script>
</body>

</html>