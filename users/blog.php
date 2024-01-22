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
    <title>🥗 Lifecare.io — Register blog</title>

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
    <link rel="stylesheet" href=".././style/blog_page.css" />
    <link rel="stylesheet" href=".././style/blog_responsive.css" />

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
      <div class="blog-header container-enable">
        <div class="blog-header-content">
          <h1>Read articles and guide about health(s)</h1>
          <h5>
            Read articles or guides that we hope can help you to build a better
            health for your life.
          </h5>
        </div>

        <div class="blog-header-call">
          <button class="button-primary">
            <a href=".././index/blog_detail.html">Explore more</a>
          </button>
          <div class="small-text">
            <img src=".././assets/icons/Health Company.svg" alt="" /><span
              >Verified and supported by
              <u>Ministry of Health Indonesia</u></span
            >
          </div>
        </div>
      </div>

      <!-- CONTENT => Blogs -->
      <div class="landing-blog container-enable">
        <div class="landing-blog-session">
          <div class="component-blog blog-01">
            <img src=".././assets/images/Content/Blogs Nutrition.svg" alt="" />
            <div class="label">
              <span class="label-name purple-label">Health</span
              ><span class="label-time"> 12 min read</span>
            </div>
            <h4>How Much Protein We Should Consume Daily</h4>
            <p>
              Proteins are large biomolecules and macromolecules that comprise
              one...
            </p>
          </div>

          <div class="component-blog blog-01">
            <img src=".././assets/images/Content/Blogs Cooking.svg" alt="" />
            <div class="label">
              <span class="label-name yellow-label">Cooking</span
              ><span class="label-time">12 min read</span>
            </div>
            <h4>Early Ascent Morning Breakfast You Should Try</h4>
            <p>
              Start your day off right with these quick and easy healthy
              break...
            </p>
          </div>

          <div class="component-blog blog-01">
            <img src=".././assets/images/Content/Blogs Honey.svg" alt="" />
            <div class="label">
              <span class="label-name green-label">Did You Know</span
              ><span class="label-time">12 min read</span>
            </div>
            <h4>California Honey — Something That Just Feels Different</h4>
            <p>
              Honey has been linked to health benefits like improved heart
              health...
            </p>
          </div>
        </div>
      </div>

      <!-- CONTENT => Blogs -->
      <div class="landing-blog container-enable">
        <div class="landing-blog-session">
          <div class="component-blog blog-01">
            <img src=".././assets/images/Content/Blogs Berries.png" alt="" />
            <div class="label">
              <span class="label-name purple-label">Health</span
              ><span class="label-time"> 12 min read</span>
            </div>
            <h4>The 8 Healthiest Berries You Can Eat</h4>
            <p>
              Berries tend to have a good nutritional profile. They’re
              typically..
            </p>
          </div>

          <div class="component-blog blog-01">
            <img src=".././assets/images/Content/Blogs Sleeping.png" alt="" />
            <div class="label">
              <span class="label-name green-label">Did You Know</span
              ><span class="label-time">12 min read</span>
            </div>
            <h4>How Do You Improving Your Health While You Sleep</h4>
            <p>
              During sleeping, what is happening in the brain? — Have you ever
              wondered...
            </p>
          </div>

          <div class="component-blog blog-01">
            <img src=".././assets/images/Content/Blogs Covid.png" alt="" />
            <div class="label">
              <span class="label-name purple-label">Health</span
              ><span class="label-time">12 min read</span>
            </div>
            <h4>Is Getting COVID Shots in the Same Arm Better?</h4>
            <p>
              A new study suggests you may get better protection if your
              vaccinations...
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
