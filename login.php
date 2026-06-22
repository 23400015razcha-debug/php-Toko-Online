<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Format email tidak valid");
    }

    echo "Login berhasil";
}
?>

<form method="POST">
    <input type="text" name="email" placeholder="Email">
    <button type="submit">Login</button>
</form>
