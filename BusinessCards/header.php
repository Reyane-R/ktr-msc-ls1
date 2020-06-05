<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta username="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Business cards</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <ul>
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                </ul>
            </div>
            <div>
                <?php
                if (isset($_SESSION['userId'])) {
                    echo '
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" username="logout-submit">Logout</button>
                    </form>
                    ';
                }
                else {
                    echo '
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" username="mailuserusername" placeholder="username/E-mail...">
                        <input type="password" username="password" placeholder="Password...">
                        <buttontype="submit" username="login-submit">Login</button>
                    </form>
                    <a class="btn btn-light" href="signup.php">Signup</a>
                    ';
                }
                ?>
            </div>
        </nav>
    </header>