<?php
include 'funksionet.php'; 
$conn = lidhu_me_DB();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["Emri"])) {
    $data = array(
        "Emri" => $_GET["Emri"],
        "Mbiemri" => $_GET["Mbiemri"],
        "Ditelindja" => $_GET["Ditelindja"],
        "Adresa" => $_GET["Adresa"],
        "Emajli" => $_GET["Emajli"],
        "Pasi" => $_GET["Pasi"]        
    );

    $sql=shto_ne_DB($conn,"antaret",$data); 
    
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php"); // Redirect to login page after registration
        exit;
    } else {
        echo "Vlerat nuk u futen ne tabel: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        * { box-sizing: border-box; }
        html, body { background: radial-gradient(ellipse at center, rgba(81, 112, 173, 1) 0%, rgba(53, 84, 147, 1) 100%); margin: 0; padding: 0; font-family: "Lato", sans-serif; }
        .login-form-wrap { background: #741414; width: 360px; margin: 60px auto; padding: 50px 30px; text-align: center; border-radius: 5px; }
        .login-form-wrap h1 img { width: 150px; height: auto; }
        .login-form input { width: 100%; padding: 12px; margin-bottom: 10px; border: 1px solid #314d89; border-radius: 4px; }
        .login-form input[type="submit"] { background: linear-gradient(to bottom, rgba(224, 224, 224, 1) 0%, rgba(206, 206, 206, 1) 100%); font-weight: 700; cursor: pointer; }
        .login-form-wrap h5 a { color: #fff; text-decoration: none; }
    </style>
</head>
<body>

<section class="login-form-wrap">
    <h1><img src="Untitled.png" alt="Alexia Logo"></h1>
    <form class="login-form" method="GET" action="">
        <label><input type="text" name="Emri" required placeholder="Name"></label>
        <label><input type="text" name="Mbiemri" required placeholder="Surname"></label>
        <label><input type="date" name="Ditelindja" required></label>
        <label><input type="text" name="Adresa" required placeholder="Address"></label>
        <label><input type="email" name="Emajli" required placeholder="Email"></label>
        <label><input type="password" name="Pasi" required placeholder="Password"></label>
        <input type="submit" value="Sign up">
    </form>
    <h5>Do you already have an account? <a href="login.php">Sign in</a></h5>
</section>

</body>
</html>
