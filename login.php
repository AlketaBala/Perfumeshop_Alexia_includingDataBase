<?php 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["emri"], $_GET["pasi"])) {
    $identiteti = $_GET["emri"]; 
    $pasi = $_GET["pasi"]; 

    if ($identiteti === "Alketa@gmail.com" && $pasi === "123") { 
        require('admin.php');
        exit;
    } else { 
        include 'funksionet.php'; 
        $conn = lidhu_me_DB();


        $result=lexo_ne_DB ($conn,"antaret"); 

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (isset($row["Emajli"], $row["Pasi"]) && $identiteti == $row["Emajli"] && $pasi == $row["Pasi"]) {
                    header('Location: index.php?emri='.$row["Emri"].'&id='.$row["ID_A"]);
                    exit;
                }
            }
        } 
        echo "Të dhënat nuk janë të sakta!";
        $conn->close();  
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            background: radial-gradient(ellipse at center, rgba(81, 112, 173, 1) 0%, rgba(53, 84, 147, 1) 100%);
            margin: 0;
            padding: 0;
            font-family: "Lato", sans-serif;
        }

        .login-form-wrap {
            background: #741414;
            box-shadow: 0 1px #5670a4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            height: 500px;
            width: 360px;
            margin: 60px auto;
            padding: 50px 30px 0 30px;
            text-align: center;
        }

        .login-form-wrap h1 img {
            width: 150px;
            height: auto;
        }

        .login-form-wrap h5 {
            margin-top: 40px;
        }

        .login-form-wrap h5 > a {
            font-size: 14px;
            color: #fff;
            text-decoration: none;
            font-weight: 400;
        }

        .login-form input[type="email"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: 100%;
            border: 1px solid #314d89;
            outline: none;
            padding: 12px 20px;
            font-family: "Lato", sans-serif;
            cursor: pointer;
        }

        .login-form input[type="submit"] {
            background: linear-gradient(to bottom, rgba(224, 224, 224, 1) 0%, rgba(206, 206, 206, 1) 100%);
            border-radius: 3px;
            padding: 8px;
            font-size: 17px;
            color: #636363;
            font-weight: 700;
            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17);
        }

        .login-form input[type="submit"]:hover {
            background: #ddd;
        }
    </style>
</head>
<body>

<section class="login-form-wrap">
    <h1><img src="Untitled.png" alt="Alexia Logo"></h1>
    <form class="login-form" method="GET" action="login.php">
        <label>
            <input type="email" name="emri" required placeholder="Email">
        </label>
        <label>
            <input type="password" name="pasi" required placeholder="Password">
        </label>
        <input type="submit" value="Sign in">
    </form>
    <h5>Not signed up?
        <br>
        Please <a href="regjistrimi.php">Sign up</a>
    </h5>
</section>

</body>
</html>
