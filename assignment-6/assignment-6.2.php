<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <label>Profile Picture:</label>
        <input type="file" name="profile_pic" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>