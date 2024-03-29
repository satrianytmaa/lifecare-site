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

  <!-- Users Styling -->
  <link rel="stylesheet" href="../style/users/header.css">

  <!-- Base Config -->
  <link rel="stylesheet" href=".././style/base_font.css" />
  <link rel="stylesheet" href=".././style/base_config.css" />
  <link rel="stylesheet" href=".././style/base_root.css" />
  <link rel="stylesheet" href=".././style/base_component.css" />

  <!-- Initial -->
  <link rel="stylesheet" href=".././style/landing_page.css" />
  <link rel="stylesheet" href=".././style/landing_responsive.css" />

  <!-- Responsive -->
  <link rel="stylesheet" href="" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- New Header V2 -->
  <link rel="stylesheet" href="../style/components/headerv2.css" />

  <style>

    .landing-subscribe {
      background-color: #F8F6FF;
      padding: 2px;
    }

    .landing-support{
      background-color: #F8F6FF;
      padding: 3em 0;
    }

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
                
                <!-- Action Button -->
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
    <div class="landing-header container-enable">
      <div class="landing-header-content">
        <h1>
          Everything you need for a
          <span class="gradient-text">healthier life.</span>
        </h1>
        <!-- <img src=".././assets/icons/Line.svg" alt="Line" class="component-line"> -->
        <h5>
          Join the Lifecare community, we help you to manage and achieve a
          healtier and meaningful life.
        </h5>
        <button class="button-primary">
          <a href=".././index/started.php">Explore more</a>
        </button>
        <div class="small-text">
          <img src=".././assets/icons/Health Company.svg" alt="" /><span>Verified and supported by
            <u>Ministry of Health Indonesia</u></span>
        </div>
      </div>
      <div class="landing-header-image">
        <img src=".././assets/images/Content/Header.png" alt="" />
      </div>
    </div>

    <!-- CONTENT => Support -->
    <div class="landing-support">
      <div class="landing-support-company">
        <img src=".././assets/icons/Support/support _ explo.svg" alt="" class="support support-01" />
        <img src=".././assets/icons/Support/support _ manter.svg" alt="" class="support support-02" />
        <img src=".././assets/icons/Support/support _ rigid 1.svg" alt="" class="support support-03" />
        <img src=".././assets/icons/Support/support _ stamp.svg" alt="" class="support support-04" />
        <img src=".././assets/icons/Support/support _ towa.svg" alt="" class="support support-05" />
        <img src=".././assets/icons/Support/support _ wetransfer.svg" alt="" class="support support-06" />
      </div>
    </div>

    <!-- CONTENT => Why Choose Us -->
    <div class="landing-us container-enable">
      <!-- <img class="landing-us-floating-item" src=".././assets/images/Items/Line.svg" alt=""> -->
      <div class="landing-us-content">
        <h2>"A place where you can rely on about health"</h2>
        <h5>
          We are Lifecare, a non-profit community that provide and help you to
          become healtier and better than before.
        </h5>
      </div>

      <img class="component-pattern" src=".././assets/images/Items/Pattern.svg" alt="" />
      <div class="landing-us-wrapper">
        <div class="component-benefit active">
          <img src=".././assets/images/Content/Pin.svg" alt="Benefits" class="benefit-icon" />
          <h4>Amazing Features</h4>
          <p>
            Tons of features that will be coming very soon. Where you can
            register for your next vaccination or just want to read some
            sweets articles about health.
          </p>
          <p class="link">Learn more</p>
        </div>

        <div class="component-benefit">
          <img src=".././assets/images/Content/Support.svg" alt="Benefits" class="benefit-icon" />
          <h4>24/7 Support</h4>
          <p>
            We are here for you, don't hesitate to rely on us. Our doctor and
            specialist is always ready to help you with your condition,
            desease, or anything else that related to human health.
          </p>
          <p class="link">Learn more</p>
        </div>

        <div class="component-benefit">
          <img src=".././assets/images/Content/Community.svg" alt="Benefits" class="benefit-icon" />
          <h4>Community Based</h4>
          <p>
            As we said before, we are non-profit based community with a
            mission on making this world even better, with a better human
            being and people. Stay healthy and happy.
          </p>
          <p class="link">Learn more</p>
        </div>
      </div>
    </div>

    <!-- CONTENT => Features -->
    <div class="landing-features container-enable">
      <div class="landing-features-content">
        <h2>Let's build a better life, together</h2>
      </div>
      <div class="landing-features-session">
        <div class="component-features features-01">
          <div class="features-hero">
            <img src=".././assets/images/Content/Vaccine.png" alt="" />
          </div>
          <div class="features-content">
            <img src=".././assets/images/Content/Badge Vaccine.svg" alt="" />
            <h3>Register and get your vaccine now</h3>
            <h6>
              Get your online registeration number for your future
              vaccinitation in your town.
            </h6>
            <div class="steps">
              <div class="step">
                <img src=".././assets/icons/Number.svg" alt="01" />Fill all the
                required information. Then submit.
              </div>
              <div class="step">
                <img src=".././assets/icons/Number-1.svg" alt="02" />Get the
                vaccine register number and dates.
              </div>
              <div class="step">
                <img src=".././assets/icons/Number-2.svg" alt="03" />Go to the
                nearby hospital and get vaccinated.
              </div>
            </div>
            <a href=".././index/vaccine.html">
              <button class="button-secondary">Get vaccinated</button>
            </a>
          </div>
        </div>

        <div class="component-features features-02">
          <div class="features-content">
            <img src=".././assets/images/Content/Badge Data.svg" alt="" />
            <h3>Data is presented in a better way</h3>
            <h6>
              An easy and straighforward way to present the data. We've been
              having tons of research and interview about how we can present a
              large amount of data and information to every age of people.
              Everyone wants to be healthy
            </h6>
            <a href=".././index/about.html">
              <button class="button-secondary">Learn more</button>
            </a>
          </div>
          <div class="features-hero">
            <img src=".././assets/images/Content/Community Content.svg" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- CONTENT => Subscribe => Break Content -->
    <div class="landing-subscribe">
      <div class="component-subscribe container-enable">
        <div class="landing-subscribe-content">
          <h3>Subscribe to our newsletter</h3>
          <p>No Spam. Only sweet content and updates about health.</p>
        </div>
        <!-- <div class="landing-subscribe-form">
					<input type="text" placeholder="yourmail@gmail.com">
					<span>Submit</span>
				</div> -->
        <button class="button-primary">
          <a href=".././index/started.php">Subscribe now</a>
        </button>
      </div>
    </div>

    <!-- CONTENT => Features After -->
    <div class="landing-features container-enable">
      <div class="component-features features-03">
        <div class="features-hero">
          <img src=".././assets/images/Content/Blogs.svg" alt="" />
        </div>
        <div class="features-content">
          <img src=".././assets/images/Content/Badge Blog.svg" alt="" />
          <h3>Read our blogs and guides around health</h3>
          <h6>
            Tons of articles and guide around the health and pandemic, not
            just the negative side of it but also positive side of it.
          </h6>
          <h6>
            Curated and written by professionals in journaling and
            documenting, because we don't want people to misunderstand
            anything related to health
          </h6>
          <a href=".././index/blog.html">
            <button class="button-secondary">Explore more</button>
          </a>
        </div>
      </div>
    </div>

    <!-- CONTENT => Testimonials -->
    <div class="landing-testimonial container-enable">
      <div class="landing-testimonial-content">
        <h2>"Great platform to improve our life and health"</h2>
        <div class="single-stars">
          <img src=".././assets/icons/Star.svg" alt="Stars" />Rated 4.8/5.0 from
          over 400+ reviews
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
              “Lifecare has helped our family to overcome what a healthier
              life means is for us than ever before. We become more active and
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
        <a href=".././index/blog.html">
          <button class="button-secondary">Explore more</button>
        </a>
      </div>

      <div class="landing-blog-session">
        <div class="component-blog blog-01">
          <img src=".././assets/images/Content/Blogs Nutrition.svg" alt="" />
          <div class="label">
            <span class="label-name purple-label">Health</span><span class="label-time">6 min read</span>
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
            <span class="label-name yellow-label">Cooking</span><span class="label-time">12 min read</span>
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
            <span class="label-name green-label">Did You Know</span><span class="label-time">12 min read</span>
          </div>
          <h4>California Honey — Something That Just Feels Different</h4>
          <p>
            Honey has been linked to health benefits like improved heart
            health...
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
        <a href=".././index/contact.html">
          <button class="button-secondary-white">Explore more</button>
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
                <li><a href="..././index/vaccine.html">Vaccine</a></li>
                <li><a href="..././index/blog.html">Blog</a></li>
                <li><a href="..././index/about.html">About</a></li>
                <li><a href="..././index/contact.html">Contact</a></li>
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
            © 2023 Lifecare Inc. All rights reserved. Powered by Ministry of
            Health Indonesia
          </p>
          <p>English · Indonesia</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>