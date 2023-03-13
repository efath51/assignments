<?php

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile_pic'])) {
    die("Please fill out all fields");
}

$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

$target_dir = "uploads/";
$filename = uniqid() . "-" . basename($_FILES['profile_pic']['name']);
$target_file = $target_dir . $filename;

if (!move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file)) {
    die("Error uploading profile picture");
}

$user_data = [
    $_POST['name'],
    $email,
    $filename
];
$file = fopen('users.csv', 'a');
fputcsv($file, $user_data);
fclose($file);

session_start();
$_SESSION['name'] = $_POST['name'];

header("Location: success.php");
exit();
?>
