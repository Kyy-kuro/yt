<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $password = $_POST["password"];

    if ($password === "yt") {
        header("Location: https://www.youtube.com");
        exit();
    } else {
        $error = "Password salah. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Masih belajar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            max-width: 90%;
            width: 350px;
            text-align: center;
        }

        .login-container img {
            width: 80px;
            margin-bottom: 15px;
        }

        .login-container h2 {
            margin-bottom: 5px;
        }

        .login-container p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #ff0000;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background: #cc0000;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" alt="Logo">
        <h2>Selamat Datang</h2>
        <p>Silakan login untuk masuk ke YouTube</p>

        <?php if (!empty($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form method="post">
            <input type="text" name="nama" placeholder="Nama Anda" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
