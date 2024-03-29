<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndoCano</title>
    <script src="https://kit.fontawesome.com/804c059b40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/changeUsername.css">
</head>
<body>
    <nav>
        <div class="greetings">
            <img src="../../images/logo indocano 2.png" alt="">
        </div>

        <div class="navigation">
            <div class="nav-logo">
                <a href="quizPage.php"><i class="fa-solid fa-person-chalkboard"></i></a>
                <span class="text">Quiz</span>
            </div>

            <div class="nav-logo">
                <a href=""><i class="fa-solid fa-book"></i></a>
                <span class="text">Learn</span>
            </div>

            <div class="nav-logo">
                <a href="account/changeUsername.php"><i class="fa-solid fa-user"></i></a>
                <span class="text">Account</span>
            </div>  
        </div>

        <div class="logout-button">
            <a href="../landingPage.html">Log Out</a>
        </div>
    </nav>
    <div>
        Quiz Page
    </div>
</body>
</html>