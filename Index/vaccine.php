<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>🥗 Lifecare.io — Register Vaccine</title>

    <!-- Browser Logo -->
    <link rel="icon" href="../Assets/Icons/Logo.svg" />

    <!-- Components -->
    <link rel="stylesheet" href="../Style/Components/header.css" />
    <link rel="stylesheet" href="../Style/Components/support.css" />
    <link rel="stylesheet" href="../Style/Components/blog.css" />
    <link rel="stylesheet" href="../Style/Components/footer.css" />

    <!-- Base Config -->
    <link rel="stylesheet" href="../Style/base_font.css" />
    <link rel="stylesheet" href="../Style/base_config.css" />
    <link rel="stylesheet" href="../Style/base_root.css" />
    <link rel="stylesheet" href="../Style/base_component.css" />

    <!-- Initial -->
    <link rel="stylesheet" href="../Style/landing_page.css" />
    <link rel="stylesheet" href="../Style/landing_responsive.css" />
    <link rel="stylesheet" href="../Style/vaccine_page.css" />
    <link rel="stylesheet" href="../Style/vaccine_responsive.css" />

    <!-- Responsive -->
    <link rel="stylesheet" href="" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- COMPONENT / Header -->
    <header>
        <!-- HEADER / Navigation -->
        <nav>
            <!-- NAV-Logo -->
            <div class="nav-logo">
                <a href="../index.html">
                    <img src="../Assets/Icons/Logo Typeface.svg" alt="" />
                </a>
            </div>

            <!-- NAV-Items -->
            <ul class="nav-list">
                <li class="nav-item"><a href="../Index/vaccine.html">Vaccine</a></li>
                <li class="nav-item"><a href="../Index/blog.html">Blog</a></li>
                <li class="nav-item"><a href="../Index/about.html">About</a></li>
                <li class="nav-item"><a href="../Index/contact.html">Contact</a></li>
                <a href="../Index/started.html">
                    <button class="button-nav">Get started</button>
                </a>
            </ul>

            <!-- NAV-Toggle | Pending -->
            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- COMPONENT / Landing Page -->
    <main>
        <!-- CONTENT => Header -->
        <div class="vaccine-header container-enable">
            <div class="vaccine-header-content">
                <h1>Get vaccinated for a better tomorrow</h1>
                <h5>Fill the necessary form and you are good to go.</h5>
            </div>

            <img class="component-pattern-vaccine" src="../Assets/Images/Items/Pattern.svg" alt="" />
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
                    <img src="../Assets/Icons/Health Company.svg" alt="" /><span>Verified and supported by <u>Ministry of Health Indonesia</u></span>
                </div>
            </div>
        </div>

        <!-- CONTENT => Form -->
        <form class="vaccine-form container-enable" method="POST" action="/lifecare-site-main/process/process_vaccine.php">
            <div class="vaccine-form-content">
                <h3>Register online for your vaccinitation</h3>
                <p>
                    Fill the form with the required information in order to continue and get
                    your vaccine regis number
                </p>
            </div>
            <div class="vaccine-form-form">
                <div class="component-form">
                    <!-- <div class="form-wrap">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" placeholder="Enter your fullname..." />
                    </div> -->
                    <div class="form-wrap">
                        <label for="app">Appointment Number</label>
                        <input type="text" name="app" placeholder="Enter your fullname..." />
                    </div>
                    <div class="form-wrap">
                        <label for="id_card">ID Card</label>
                        <input type="text" name="id_card" placeholder="Enter your id card..." />
                    </div>
                    <div class="form-wrap">
                        <label for="number">Mobile Number</label>
                        <input type="number" name="number" placeholder="Enter your number..." />
                    </div>
                    <button class="button-primary"><a href="#">Register now</a></button>
                </div>
            </div>
        </form>

        <!-- CONTENT => Reason -->
        <div class="vaccine-reason container-enable">
            <div class="vaccine-reason-content">
                <h2>"Why the vaccine is so important for us"</h2>
            </div>

            <div class="vaccine-reason-wrap">
                <div class="component-res">
                    <img src="../Assets/Icons/Reason 01.svg" alt="Icon Reason" />
                    <h4>Stop the spreading</h4>
                    <p>
                        Your 1Earth tokens are your ticket to a decentralized community of
                        people dedicated to finding and funding
                    </p>
                </div>

                <div class="component-res">
                    <img src="../Assets/Icons/Reason 03.svg" alt="Icon Reason" />
                    <h4>Protect you and people</h4>
                    <p>
                        Your 1Earth tokens are your ticket to a decentralized community of
                        people dedicated to finding and funding
                    </p>
                </div>

                <div class="component-res">
                    <img src="../Assets/Icons/Reason 04.svg" alt="Icon Reason" />
                    <h4>Create immunity body</h4>
                    <p>
                        Your 1Earth tokens are your ticket to a decentralized community of
                        people dedicated to finding and funding
                    </p>
                </div>

                <div class="component-res">
                    <img src="../Assets/Icons/Reason 02.svg" alt="Icon Reason" />
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
                    <img src="../Assets/Icons/Star.svg" alt="Stars" />Rated 4.8/5.0 from over
                    400+ reviews
                </div>
            </div>
            <div class="landing-testimonial-session">
                <div class="component-testimonial">
                    <img src="../Assets/Images/Content/Testimonial.svg" alt="Happy People" />
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
                            <img src="../Assets/Icons/Star.svg" alt="Star" />
                            <img src="../Assets/Icons/Star.svg" alt="Star" />
                            <img src="../Assets/Icons/Star.svg" alt="Star" />
                            <img src="../Assets/Icons/Star.svg" alt="Star" />
                            <img src="../Assets/Icons/Star.svg" alt="Star" />
                        </div>
                    </div>
                </div>

                <div class="multi-component-testimonial">
                    <div class="component-review">
                        <img src="../Assets/Icons/Image-1.svg" alt="Person" />
                        <div class="person">
                            <h4>Ezio Auditore</h4>
                            <p>Consultation @LifeConsult</p>
                        </div>
                    </div>
                    <div class="component-review">
                        <img src="../Assets/Icons/Image-2.svg" alt="Person" />
                        <div class="person">
                            <h4>Olivia Grace</h4>
                            <p>Consultation @LifeConsult</p>
                        </div>
                    </div>
                    <div class="component-review">
                        <img src="../Assets/Icons/Image.svg" alt="Person" />
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
                    <img src="../Assets/Images/Content/Blogs Nutrition.svg" alt="" />
                    <div class="label">
                        <span class="label-name purple-label">Health</span><span class="label-time"> 12 min read</span>
                    </div>
                    <h4>How Much Protein We Should Consume Daily</h4>
                    <p>
                        Proteins are large biomolecules and macromolecules that comprise one...
                    </p>
                </div>

                <div class="component-blog blog-01">
                    <img src="../Assets/Images/Content/Blogs Cooking.svg" alt="" />
                    <div class="label">
                        <span class="label-name yellow-label">Cooking</span><span class="label-time">12 min read</span>
                    </div>
                    <h4>Early Ascent Morning Breakfast You Should Try</h4>
                    <p>Start your day off right with these quick and easy healthy break...</p>
                </div>

                <div class="component-blog blog-01">
                    <img src="../Assets/Images/Content/Blogs Honey.svg" alt="" />
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
                        <img src="../Assets/Icons/Logo New.svg" alt="Logo" />
                        <p>
                            Lifecare, is a non-profit company that provides you tons of features
                            around health and pandemic. Let’s build a better life, together.
                        </p>
                        <button class="button-third"><a href="#">Make a donation</a></button>
                        <div class="social">
                            <img src="../Assets/Icons/Social Media/Facebook.svg" alt="Facebook" />
                            <img src="../Assets/Icons/Social Media/Instagram.svg" alt="Instagram" />
                            <img src="../Assets/Icons/Social Media/Discord.svg" alt="Discord" />
                            <img src="../Assets/Icons/Social Media/Reddit.svg" alt="Reddit" />
                            <img src="../Assets/Icons/Social Media/YouTube.svg" alt="YouTube" />
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="list list-01">
                            <h4>Explore</h4>
                            <ul>
                                <li><a href="../Index/vaccine.html">Vaccine</a></li>
                                <li><a href="../Index/blog.html">Blog</a></li>
                                <li><a href="../Index/about.html">About</a></li>
                                <li><a href="../Index/contact.html">Contact</a></li>
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