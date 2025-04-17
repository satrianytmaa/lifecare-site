<?php
require '../../process/db.php'; 
session_start();
$_SESSION['id_appointment'] = $id;
$id = $_GET['id'];

$query = "SELECT * FROM appointment WHERE id_appointment = $id";
$res = $DB->query($query);
$data = $res->fetch_object();

$query = "SELECT * FROM vaccine WHERE id_vaccine = $data->id_vaccine";
$res = $DB->query($query);
$vaccine = $res->fetch_object();

$query = "SELECT * FROM user WHERE id_user = $data->id_user ";
$res = $DB->query($query);
$patient = $res->fetch_object();

$query = "SELECT * FROM clinic WHERE id_clinic= $data->id_clinic ";
$res = $DB->query($query);
$clinic = $res->fetch_object();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Browser Logo -->

    <!-- Browser Logo -->
    <link rel="icon" href="../../assets/icons/Logo.svg" />

    <!-- components -->
    <link rel="stylesheet" href="../../style/components/header.css" />
    <link rel="stylesheet" href="../../style/components/support.css" />
    <link rel="stylesheet" href="../../style/components/blog.css" />
    <link rel="stylesheet" href="../../style/components/footer.css" />

    <!-- Base Config -->
    <link rel="stylesheet" href="../../style/base_font.css" />
    <link rel="stylesheet" href="../../style/base_config.css" />
    <link rel="stylesheet" href="../../style/base_root.css" />
    <link rel="stylesheet" href="../../style/base_component.css" />

    <!-- Initial -->
    <link rel="stylesheet" href="../../style/contact_page.css" />
    <link rel="stylesheet" href="../../style/contact_responsive.css" />

    <!-- Responsive -->
    <link rel="stylesheet" href="../../style/admin/admin_default.css" />
    <link rel="stylesheet" href="../../style/admin/create.css">
    <link rel="stylesheet" href="../../style/admin/index.css">
    <link rel="stylesheet" href="../../style/admin/show.css">



    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Payment</title>

    <style>

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        /* A centered card style */
        .payment-card {
            width: 60%;
            max-width: 640px;
            margin: 0 auto;
            padding: 2em;
            border-radius: 1.2em;
            background-color: #fff;
            text-align: center;
            outline: 1px solid #E9E9E9;
        }

        .payment-header {
            font-size: 2em;
            color: #1D354F;
        }

        .payment-header-label {
            font-size: 1.5em;
            font-weight: 400;
            color: #1D354F;
            opacity: 0.4;
        }



        .payment-card p {
            font-size: 1.2em;
            margin-bottom: 0.5em;
        }

        .payment-card h2 {
            font-size: 3.2em;
            font-weight: 800;
            color: #6A55EA;
            margin-bottom: 0.5em;
        }

        .payment-flex {
            display: flex;
            justify-content: space-between;
            margin: 1em 0;
        }

        .payment-flex p {
            font-size: 1em;
            color: #6E7191;
        }

        .payment-card button {
            padding: 1em 2em;
            border: none;
            background-color: #6A55EA;
            color: #FFFFFF;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-card button:hover {
            background-color: #5a4bcf;
        }

        .payment-card hr {
            border: 1px solid #E9E9E9;
            margin: 1em 0;
        }

        .total-label {
            font-size: 2em;
            font-weight: 600;
            color: #1D354F;
        }

        .total-price {
            font-size: 2em;
            font-weight: 600;
            color: #1D354F;
        }
    </style>
</head>

<body>
    

<div class="payment-card">

    <p class="payment-header-label">Total Amount</p>
    <h2>$<?php echo number_format($vaccine->price, 2); ?></h2>

    <!-- Line -->
    <hr>
    <div class="payment-flex">
        <p>Patient Name</p>
        <p><?php echo $patient->full_name; ?></p>
    </div>
    <div class="payment-flex">
        <p>Clinic</p>
        <p><?php echo $clinic->name_clinic; ?></p>
    </div>
    <div class="payment-flex">
        <p>Vaccine</p>
        <p><?php echo $vaccine->name_vaccine; ?></p>
    </div>
    <div class="payment-flex">
        <p>Appointment Number</p>
        <p><?php echo $data->number; ?></p>
    </div>

    <!-- Line -->
    <hr>

    <div class="payment-flex">
        <p class="total-label">Total</p>
        <p class="total-price">$<?php echo number_format($vaccine->price, 2); ?></p>
    </div>

    <!-- Line -->
    <hr>

    <form method="POST" action="/lifecare-site/process/process_payment.php">
        <input type="hidden" name="id_appointment" value="<?php echo $id; ?>">
        <button type="submit" name="pay">Pay Now</button>
    </form>
</div>

</body>
</html>
