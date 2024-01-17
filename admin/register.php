<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- Browser Logo -->
   <link rel="icon" href="../assets/icons/Logo.svg" />

   <!-- Base Config -->
   <link rel="stylesheet" href="../style/base_font.css" />
   <link rel="stylesheet" href="../style/base_config.css" />
   <link rel="stylesheet" href="../style/base_root.css" />
   <link rel="stylesheet" href="../style/base_component.css" />

   <!-- Initial -->
   <link rel="stylesheet" href="../style/landing_page.css" />
   <link rel="stylesheet" href="../style/landing_responsive.css" />
   <link rel="stylesheet" href="../style/started.css">

   <!-- Google Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

   <!-- CSS IMPORT -->
   <link rel="stylesheet" href="../style/vaccine_page.css" />
   <link rel="stylesheet" href="../style/vaccine_responsive.css" />

   <title>Get Started</title>
</head>

<body>
   <div class="vaccine-form container-enable">
      <div class="vaccine-form-content">
         <h3>Feel free to join us</h3>
         <p>Fill the form with the required information in order to join with us</p>

      </div>

      <form class="vaccine-form-form" method="POST" action="/lifecare-site/process/process_register.php">
         <div class="component-form">
            <div class="form-wrap">
               <label for="full_name">Full Name</label>
               <input type="text" name="full_name" placeholder="Enter your Fullname." />
            </div>
            <div class="form-wrap">
               <label for="phone_number">Phone Number</label>
               <input type="text" name="phone_number" placeholder="Enter your Phone Number" />
            </div>
            <div class="form-wrap">
               <label for="password">Password</label>
               <input type="password" name="password" placeholder="Enter your Password" />
            </div>
            <button type="submit" class="button-primary">Register Now</button>
         </div>
      </form>


   </div>
</body>

</html>