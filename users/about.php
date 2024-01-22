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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>🥗 Lifecare.io — Better Life</title>

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
    <link rel="stylesheet" href=".././style/blog_page.css" />
    <link rel="stylesheet" href=".././style/blog_responsive.css" />
    <link rel="stylesheet" href=".././style/landing_page.css" />
    <link rel="stylesheet" href=".././style/about_page.css" />
    <link rel="stylesheet" href=".././style/about_responsive.css" />

    <!-- Responsive -->
    <link rel="stylesheet" href="" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- New Header V2 -->
    <link rel="stylesheet" href="../style/components/headerv2.css" />
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
            
            <!-- Action Button -->
            <div class="user-profile">
                <img src=".././assets/default/Pfp-1.png" alt="Profile" />
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

    <!-- COMPONENT / Landing Page -->
    <main>
      <!-- CONTENT => Header -->
      <div class="about-header container-enable">
        <div class="about-header-content">
          <h1>Stay safe and healthy with Lifecare</h1>
          <h5>
            Lifecare, is a non-profit company that provides you tons of features
            around health and pandemic. Let’s build a better life, together.
          </h5>
        </div>

        <div class="about-header-call">
          <div class="small-text">
            <img src=".././assets/icons/Health Company.svg" alt="" /><span
              >Verified and supported by
              <u>Ministry of Health Indonesia</u></span
            >
          </div>
        </div>

        <img
          src=".././assets/images/Content/About.svg"
          alt=""
          class="img-about"
        />
      </div>

      <!-- CONTENT => Reason -->
      <div class="about-reason container-enable">
        <div class="about-reason-wrap">
          <div class="component-res">
            <img src=".././assets/icons/Reason 01.svg" alt="Icon Reason" />
            <h4>Ready for anything</h4>
            <p>
              Lifecare gets you ready for health challenges. We teach, detect
              early, and reach out to keep you and your loved ones safe.
            </p>
          </div>

          <div class="component-res">
            <img src=".././assets/icons/Reason 04.svg" alt="Icon Reason" />
            <h4>Feel good, all-around</h4>
            <p>
              Lifecare cares about more than just sickness. We help with mental
              health, good food, and staying active, so you can feel great every
              day.
            </p>
          </div>

          <div class="component-res">
            <img src=".././assets/icons/Reason 02.svg" alt="Icon Reason" />
            <h4>Together for health</h4>
            <p>
              Lifecare believes health is a team effort. Join us to make strong
              and caring communities that support each other's health.
            </p>
          </div>
        </div>
      </div>

      <!-- CONTENT => Teams -->
      <div class="team-header container-enable">
        <div class="team-header-content">
          <h1>Meet our team</h1>
          <h5>
            Our team is a group of passionate people who want to make a better
            life for everyone.
          </h5>
        </div>

        <div class="team-header-member">
          <a href="https://github.com/adityaptraaa" target="_blank">
            <img src=".././assets/images/Teams/Team-1.svg" alt="Adit" />
          </a>
          <a href="https://github.com/satrianytmaa" target="_blank">
            <img src=".././assets/images/Teams/Team-2.svg" alt="Nayottama" />
          </a>
          <a href="https://github.com/Noihara12" target="_blank">
            <img src=".././assets/images/Teams/Team-3.svg" alt="Bombom" />
          </a>
          <a href="https://github.com/Angelina-a11y" target="_blank">
            <img src=".././assets/images/Teams/Team-4.svg" alt="Angel" />
          </a>
          <a href="https://github.com/tuattia" target="_blank">
            <img src=".././assets/images/Teams/Team-5.svg" alt="Attia" />
          </a>
          <a href="#">
            <img src=".././assets/images/Teams/Team-6.svg" alt="_" />
          </a>
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
            <button class="button-secondary">Explore more</button>
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
                Lifecare, is a non-profit company that provides you tons of
                features around health and pandemic. Let’s build a better life,
                together.
              </p>
              <button class="button-third">
                <a href="#">Make a donation</a>
              </button>
              <div class="social">
                <img
                  src=".././assets/icons/Social Media/Facebook.svg"
                  alt="Facebook"
                />
                <img
                  src=".././assets/icons/Social Media/Instagram.svg"
                  alt="Instagram"
                />
                <img
                  src=".././assets/icons/Social Media/Discord.svg"
                  alt="Discord"
                />
                <img
                  src=".././assets/icons/Social Media/Reddit.svg"
                  alt="Reddit"
                />
                <img
                  src=".././assets/icons/Social Media/YouTube.svg"
                  alt="YouTube"
                />
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
              © 2022 Lifecare Inc. All rights reserved. Powered by Ministry of
              Health Indonesia
            </p>
            <p>English · Indonesia</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
