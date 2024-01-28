<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id_user'])) {
    header("location: http://localhost/lifecare-site/index/login.php");
    exit();
}

// Access user information from the session
$full_name = $_SESSION['full_name'];
$email = $_SESSION['email'];

// Now you can use $full_name in your page
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- Browser Logo -->

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
   <link rel="stylesheet" href=".././style/contact_page.css" />
   <link rel="stylesheet" href=".././style/contact_responsive.css" />

   <!-- Responsive -->
   <link rel="stylesheet" href="" />


   <!-- Google Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

   <!-- New Header V2 -->
   <link rel="stylesheet" href="../style/components/headerv2.css" />

   <title>Contact</title>

   <style>
      .dropdown-select{
            width: 100%;
            border-radius: 8px;
            border: 1px solid #f2f2f2;
            background-color: #f9f9f9;
            padding: 16px 16px;
            font-family: "Inter", sans-serif;
            font-size: 16px;
            font-weight: 400;
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

<div class="vaccine-form container-enable">
      <div class="vaccine-form-content">
         <img src="../assets/images/Content/Badge Data.svg" alt="" />
         <h3>Let's chat. <br> Tell us about your problem</h3>
         <p>Holaa! Feel free to use the contact form to the right to reach out to us </p>
      </div>

      <form class="component-form" method="POST" action="../process/create_contact.php" target="hidden_iframe">
         <div class="from-wrap">
            <h4>Send us a message 🚀</h4>
         </div>
         <div class="form-wrap">
            <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name." required value="<?php echo $full_name ?>"/>
         </div>
         <div class="form-wrap">
            <input type="email" id="email" name="email" placeholder="Enter your Email" required value="<?php echo $email ?>" />
         </div>
         <div class="form-wrap">
            <select class="dropdown-select" name="subject" id="subject">
               <option value="healthcare">Healthcare</option>
               <option value="consultation">Consultation</option>
               <option value="other">Others</option>
            </select>
         </div>
         <div class="form-wrap">
            <label for="message">Tell us about your problem!</label>
            <textarea id="message" name="problem" cols="30" rows="10" required></textarea>
         </div>
         <button id="buttonAlert" class="button-primary" disabled>Send</button>
      </form>
   </div>
   <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"></iframe>
   <!-- CONTENT => Modal Pop-Up -->
   <div id="myModal" class="modal">
      <div class="modal-content">
         <span class="close">&times;</span>
         <div id="contact_name"></div>
         <p>Thank you for your message. Our team is working to address your concern and will respond shortly. We appreciate your patience.</p>
         <div id="contact_issue"></div>
         <button id="buttonAlertModal" class="button-primary"><a href="/lifecare-site/index.html">Gotcha!</a> </button>
      </div>
   </div>

   <!-- CONTENT => Footer -->
   <div class="footer-foot">
      <div class="footer-foot-session container-enable">
         <div class="footer-foot-content">
            <div class="content-left">
               <img src=".././assets/icons/Logo New.svg" alt="Logo" />
               <p>Lifecare, is a non-profit company that provides you tons of features around health and pandemic. Let’s build a better life, together.</p>
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
            <p>© 2022 Lifecare Inc. All rights reserved. Powered by Ministry of Health Indonesia</p>
            <p>English · Indonesia</p>
         </div>
      </div>
   </div>
   </footer>


   <!-- JavaScript -->
   <script src=".././JavaScript/alert.js"></script>
</body>

</html>