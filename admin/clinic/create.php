<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic</title>
</head>

<body>
    <form method="POST" action="/lifecare-site-main/process/create_clinic.php">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Name...">
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="Enter Address...">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter Email...">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>