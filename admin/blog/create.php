<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic</title>
</head>

<body>
    <form method="POST" action="/lifecare-site/process/create_blog.php">
        <div>
            <label for="content">content</label>
            <input type="textarea" name="content" id="content" placeholder="Enter content...">
        </div>
        <div>
            <label for="category">category</label>
            <input type="text" name="category" id="category" placeholder="Enter category...">
        </div>
        <div>
            <label for="date">date</label>
            <input type="text" name="date" id="date" placeholder="Enter date...">
        </div>
        <div>
            <label for="user_id">user</label>
            <input type="text" name="user_id" id="user_id" placeholder="Enter user...">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>