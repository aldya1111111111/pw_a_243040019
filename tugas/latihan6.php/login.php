<?php
session_start();

if (isset($_SESSION['username'])) {
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'] ?? "";
    $password = $_POST['password'] ?? "";

    if ($username === "admin" && $password === "admin") {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Something went wrong Sorry, something went wrong there. Try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Login Admin
    </title>
    <style>
        body {
            background-color: lightgray;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 20rem;
        }

        .title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-align: center;
        }

        .logo {
            display: block;
            margin: 0 auto 1rem;
            height: 100px;
            width: 100px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            color: black;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 92%;
            padding: 0.75rem;
            border: 1px solid #D1D5DB;
            border-radius: 0.5rem;
            outline: none;
        }

        .form-group input:focus {
            border-color: #3B82F6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
        }

        .submit-btn {
            width: 100%;
            background-color: #3B82F6;
            color: #FFFFFF;
            padding: 0.75rem;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: skyblue;
        }

        .error-message {
            color: red;
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="title">
            Login Admin
        </h2>
        <!-- <img alt="Placeholder logo image" class="logo" height="100" src="https://fiss.unpas.ac.id/wp-content/uploads/2024/04/cropped-cropped-Logo-Unpas-New.png" width="100" /> -->
        <form method="post">
            <div class="form-group">
                <label for="username">
                    Username:
                </label>
                <input id="username" name="username" required="" type="text" />
            </div>
            <div class="form-group">
                <label for="password">
                    Password:
                </label>
                <input id="password" name="password" required="" type="password" />
            </div>
            <button class="submit-btn" type="submit">
                Login
            </button>
        </form>
        <?php if (isset($error)): ?>
            <p class="text-danger mb-4"><?= $error; ?></p>
        <?php endif; ?>
    </div>
</body>

</html>