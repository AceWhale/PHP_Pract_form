<?php
session_start();

include_once('pages/functions.php');

if (isset($_POST['login_submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    login($login, $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <header class="col-sm-12 col-md-12 col-lg-12">

        </header>
    </div>

    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php
            include_once('pages/menu.php');
            if (!isset($_SESSION['registered_user'])) {
                ?>
                <form action="index.php?page=5" method="post">
                    <input type="text" name="login" placeholder="Login" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="login_submit">Login</button>
                </form>
                <?php
            } else {
                echo "<p>Welcome, " . $_SESSION['registered_user'] . "!</p>";
            }
            ?>
        </nav>
    </div>

    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-12">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page == 1) include_once('pages/home.php');
                if ($page == 2) include_once('pages/upload.php');
                if ($page == 3) include_once('pages/gallery.php');
                if ($page == 4) include_once('pages/registration.php');
            }
            ?>
        </section>
    </div>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
