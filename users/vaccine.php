<?php
require '../process/db.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id_user'])) {
    header("location: http://localhost/lifecare-site/index/login.php");
    exit();
}

// Access user information from the session
$full_name = $_SESSION['full_name'];
$phone_number = $_SESSION['phone_number'];

// Now you can use $full_name in your page
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>🥗 Lifecare.io — Register Vaccine</title>

    <!-- Browser Logo -->
    <link rel="icon" href=".././assets/icons/Logo.svg" />

    <!-- components -->
    <link rel="stylesheet" href=".././style/components/header.css" />
    <link rel="stylesheet" href=".././style/components/support.css" />
    <link rel="stylesheet" href=".././style/components/blog.css" />
    <link rel="stylesheet" href=".././style/components/footer.css" />

    <!-- Base Config -->
    <link rel="stylesheet" href=".././style/base_font.css" />
    <link rel="stylesheet" href=".././style/base_config.css" />
    <link rel="stylesheet" href=".././style/base_root.css" />
    <link rel="stylesheet" href=".././style/base_component.css" />

    <!-- Initial -->
    <link rel="stylesheet" href=".././style/landing_page.css" />
    <link rel="stylesheet" href=".././style/landing_responsive.css" />
    <link rel="stylesheet" href=".././style/vaccine_page.css" />
    <link rel="stylesheet" href=".././style/vaccine_responsive.css" />

    <!-- Responsive -->
    <link rel="stylesheet" href="" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- New Header V2 -->
    <link rel="stylesheet" href="../style/components/headerv2.css" />

    <style>
        .wrap{
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1em;
      margin-right: 2em;
    }
    </style>
</head>

<body>
    <!-- New Header V2 -->
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
                        <a href="./index.php" class="n-link">Home</a>
                    </li>
                    <li class="n-item">
                        <a href="./vaccine.php" class="n-link">Healthcare</a>
                    </li>
                    <li class="n-item">
                        <a href="./blog.php" class="n-link">Blog</a>
                    </li>
                    <li class="n-item">
                        <a href="./about.php" class="n-link">About</a>
                    </li>
                    <li class="n-item">
                        <a href="./contact.php" class="n-link">Contact</a>
                    </li>
                </ul>

                <div class="user-profile">
                    <div class="wrap">
                      <img src=".././assets/default/Pfp-1.png" alt="Profile" />
                      <div class="profile-name">
                        <p>
              
                        <?php echo $full_name; ?>
              
                        </p>
              
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

    <!-- COMPONENT / Landing Page -->
    <main>
        <!-- CONTENT => Header -->
        <div class="vaccine-header container-enable">
            <div class="vaccine-header-content">
                <h1>Get vaccinated for a better tomorrow</h1>
                <h5>Fill the necessary form and you are good to go.</h5>
            </div>

            <img class="component-pattern-vaccine" src=".././assets/images/Items/Pattern.svg" alt="" />
            <div class="vaccine-header-data">
                <div class="component-data">
                    <div class="label-rate">↗ 14.2 %</div>
                    <h2>165.42M</h2>
                    <p>Fully Vaccinated</p>
                </div>

                <div class="component-data">
                    <div class="label-rate">↗ 8.9 %</div>
                    <h2>37.45M</h2>
                    <p>Booster Given</p>
                </div>

                <div class="component-data">
                    <div class="label-rate">↗ 13.7 %</div>
                    <h2>60.5%</h2>
                    <p>Population Vaccinated</p>
                </div>
            </div>

            <div class="vaccine-header-call">
                <button class="button-primary"><a href="#">Register now</a></button>
                <div class="small-text">
                    <img src=".././assets/icons/Health Company.svg" alt="" /><span>Verified and supported by <u>Ministry of Health Indonesia</u></span>
                </div>
            </div>
        </div>

        <!-- Select Clinic -->
        <?php
        $query = "SELECT * FROM clinic";
        $clinic = $DB->query($query);
        ?>

        <?php
        $query = "SELECT * FROM vaccine";
        $vaccine = $DB->query($query);
        ?>
        <!-- CONTENT => Form -->
        <form class="vaccine-form container-enable" method="POST" action="/lifecare-site/process/create_appointment.php">
            <?php
            $query = "SELECT * FROM clinic";
            $clinic = $DB->query($query);
            ?>
            <div class="vaccine-form-content">
                <h3>Register online for your vaccinitation</h3>
                <p>
                    Fill the form with the required information in order to continue and get
                    your vaccine regis number
                </p>
            </div>
            <div class="vaccine-form-form">
                <div class="component-form">
                    <div class="form-wrap">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo $full_name; ?>" />
                    </div>
                    <div class="form-wrap">
                        <label for="name">Phone Number</label>
                        <input type="text" name="name" value="<?php echo $phone_number; ?>" />
                    </div>
                    <div class="form-wrap">
                        <label for="vaccine">Name Vaccine</label>
<<<<<<< HEAD
                        <select class="dropdown-select" name="vaccine" id="vaccine">
=======
                        <select class="dropdown-select" name="vaccine" id="clinic">
>>>>>>> 6521575100676a14dc69f90e82b8789b320ac73d
                            <?php while ($data = $vaccine->fetch_object()) {
                                echo '<option value="' . $data->id_vaccine . '">' . $data->name_vaccine . '</option>';
                            } ?>
                        </select>
                    </div>
                    <div class="form-wrap">
                        <label for="clinic">Name Clinic</label>
                        <select class="dropdown-select" name="clinic" id="clinic">
                            <?php while ($data = $clinic->fetch_object()) {
                                echo '<option value="' . $data->id_clinic . '">' . $data->name_clinic . '</option>';
                            } ?>
                        </select>
                    </div>

                    <button class="button-primary">Register now</button>
                </div>
            </div>
        </form>

<<<<<<< HEAD
        <form method="POST" action="/lifecare-site/process/create_appointment.php">
            <?php
            $query = "SELECT * FROM clinic";
            $clinic = $DB->query($query);
            ?>
            <div>
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter full_name..." value="<?php echo $full_name; ?>">
            </div>
            <div>
                <label for="clinic">Clinic</label>
                <select name="clinic" id="clinic">
                    <?php while ($data = $clinic->fetch_object()) {
                        echo '<option value="' . $data->id_clinic . '">' . $data->name_clinic . '</option>';
                    } ?>
                </select>
            </div>
            <button type="submit">Save</button>
        </form>

=======
>>>>>>> 6521575100676a14dc69f90e82b8789b320ac73d
        <!-- CONTENT => Reason -->
        <div class="vaccine-reason container-enable">
            <div class="vaccine-reason-content">
                <h2>"Why the vaccine is so important for us"</h2>
            </div>

            <div class="vaccine-reason-wrap">
                <div class="component-res">
                    <img src=".././assets/icons/Reason 01.svg" alt="Icon Reason" />
                    <h4>Stop the spreading</h4>
                    <p>
                        Your 1Earth tokens are your ticket to a decentralized community of
                        people dedicated to finding and funding
                    </p>
                </div>

                <div class="component-res">
                    <img src=".././assets/icons/Reason 03.svg" alt="Icon Reason" />
                    <h4>Protect you and people</h4>
                    <p>
                        Your 1Earth tokens are your ticket to a decentralized community of
                        people dedicated to finding and funding
                    </p>
                </div>

                <div class="component-res">
                    <img src=".././assets/icons/Reason 04.svg" alt="Icon Reason" />
                    <h4>Create immunity body</h4>
                    <p>
                        Your 1Earth tokens are your ticket to a decentralized community of
                        people dedicated to finding and funding
                    </p>
                </div>

                <div class="component-res">
                    <img src=".././assets/icons/Reason 02.svg" alt="Icon Reason" />
                    <h4>It's safe and free</h4>
                    <p>
                        Your 1Earth tokens are your ticket to a decentralized community of
                        people dedicated to finding and funding
                    </p>
                </div>
            </div>
        </div>
        <!-- CONTENT => Testimonials -->
        <div class="landing-testimonial container-enable">
            <div class="landing-testimonial-content">
                <h2>"Great platform to improve our life and health"</h2>
                <div class="single-stars">
                    <img src=".././assets/icons/Star.svg" alt="Stars" />Rated 4.8/5.0 from over
                    400+ reviews
                </div>
            </div>
            <div class="landing-testimonial-session">
                <div class="component-testimonial">
                    <img src=".././assets/images/Content/Testimonial.svg" alt="Happy People" />
                    <div class="testimonial-content">
                        <div class="person">
                            <h4>Annabella Porter</h4>
                            <p>Vaccine Booster @LifeVaccine</p>
                        </div>
                        <div class="quote">
                            “Lifecare has helped our family to overcome what a healthier life
                            means is for us than ever before. We become more active and
                            productive after your consultation with their Doctor.”
                        </div>
                        <div class="multi-stars">
                            <img src=".././assets/icons/Star.svg" alt="Star" />
                            <img src=".././assets/icons/Star.svg" alt="Star" />
                            <img src=".././assets/icons/Star.svg" alt="Star" />
                            <img src=".././assets/icons/Star.svg" alt="Star" />
                            <img src=".././assets/icons/Star.svg" alt="Star" />
                        </div>
                    </div>
                </div>

                <div class="multi-component-testimonial">
                    <div class="component-review">
                        <img src=".././assets/icons/Image-1.svg" alt="Person" />
                        <div class="person">
                            <h4>Ezio Auditore</h4>
                            <p>Consultation @LifeConsult</p>
                        </div>
                    </div>
                    <div class="component-review">
                        <img src=".././assets/icons/Image-2.svg" alt="Person" />
                        <div class="person">
                            <h4>Olivia Grace</h4>
                            <p>Consultation @LifeConsult</p>
                        </div>
                    </div>
                    <div class="component-review">
                        <img src=".././assets/icons/Image.svg" alt="Person" />
                        <div class="person">
                            <h4>Wattson</h4>
                            <p>Vaccine Card @LifeVaccine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT => Blogs -->
        <div class="landing-blog container-enable">
            <div class="landing-blog-content">
                <h2>Discover our latest blog and guides</h2>
                <a href="#">
                    <button class="button-secondary">Explore more </button>
                </a>
            </div>

            <div class="landing-blog-session">
                <div class="component-blog blog-01">
                    <img src=".././assets/images/Content/Blogs Nutrition.svg" alt="" />
                    <div class="label">
                        <span class="label-name purple-label">Health</span><span class="label-time"> 12 min read</span>
                    </div>
                    <h4>How Much Protein We Should Consume Daily</h4>
                    <p>
                        Proteins are large biomolecules and macromolecules that comprise one...
                    </p>
                </div>

                <div class="component-blog blog-01">
                    <img src=".././assets/images/Content/Blogs Cooking.svg" alt="" />
                    <div class="label">
                        <span class="label-name yellow-label">Cooking</span><span class="label-time">12 min read</span>
                    </div>
                    <h4>Early Ascent Morning Breakfast You Should Try</h4>
                    <p>Start your day off right with these quick and easy healthy break...</p>
                </div>

                <div class="component-blog blog-01">
                    <img src=".././assets/images/Content/Blogs Honey.svg" alt="" />
                    <div class="label">
                        <span class="label-name green-label">Did You Know</span><span class="label-time">12 min read</span>
                    </div>
                    <h4>California Honey — Something That Just Feels Different</h4>
                    <p>
                        Honey has been linked to health benefits like improved heart health...
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- COMPONENT / Footer -->
    <footer>
        <!-- CONTENT => CTA -->
        <div class="footer-action container-enable">
            <div class="footer-action-content">
                <h2>Join us and let's build a better life, together</h2>
                <p>No Spam. Only sweet content and updates about a better life.</p>
                <a href="./contact.html">
                    <button class="button-secondary">Explore more </button>
                </a>
            </div>
        </div>

        <!-- CONTENT => Footer -->
        <div class="footer-foot">
            <div class="footer-foot-session container-enable">
                <div class="footer-foot-content">
                    <div class="content-left">
                        <img src=".././assets/icons/Logo New.svg" alt="Logo" />
                        <p>
                            Lifecare, is a non-profit company that provides you tons of features
                            around health and pandemic. Let’s build a better life, together.
                        </p>
                        <button class="button-third"><a href="#">Make a donation</a></button>
                        <div class="social">
                            <img src=".././assets/icons/Social Media/Facebook.svg" alt="Facebook" />
                            <img src=".././assets/icons/Social Media/Instagram.svg" alt="Instagram" />
                            <img src=".././assets/icons/Social Media/Discord.svg" alt="Discord" />
                            <img src=".././assets/icons/Social Media/Reddit.svg" alt="Reddit" />
                            <img src=".././assets/icons/Social Media/YouTube.svg" alt="YouTube" />
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="list list-01">
                            <h4>Explore</h4>
                            <ul>
                                <li><a href=".././index/vaccine.html">Vaccine</a></li>
                                <li><a href=".././index/blog.html">Blog</a></li>
                                <li><a href=".././index/about.html">About</a></li>
                                <li><a href=".././index/contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="list list-02">
                            <h4>Resource</h4>
                            <ul>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Stories</a></li>
                            </ul>
                        </div>
                        <div class="list list-03">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="#">Licence</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Career</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-foot-copyright">
                    <p>
                        © 2022 Lifecare Inc. All rights reserved. Powered by Ministry of Health
                        Indonesia
                    </p>
                    <p>English · Indonesia</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>