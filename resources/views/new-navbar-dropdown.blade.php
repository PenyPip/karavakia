<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

    <link rel="stylesheet" href="js/jquery-ui.css">

    <style>
        .btn-circle.btn-xl {
            width: 70px;
            height: 70px;
            padding: 13px 18px;
            border-radius: 60px;
            font-size: 15px;
            text-align: center;
            margin-right: 10px;
        }

        .container-counter {
            margin-top: 100px;
            margin-bottom: 100px;
            padding-left: 25px;
            padding-right: 25px;
        }

        .counter-box {
            display: block;
            background: #0b3f82;
            padding: 40px 20px 37px;
            text-align: center;
            color: #fff;
        }

        .counter-box p {
            margin: 5px 0 0;
            padding: 0;
            color: #fff;
            font-size: 18px;
            font-weight: 500
        }

        .counter-box i {
            font-size: 60px;
            margin: 0 0 15px;
            color: #fff;

        }

        .counter {
            display: block;
            font-size: 32px;
            font-weight: 700;
            color: #fff;
            line-height: 28px
        }

        .counter-box.colored {
            background: #0b3f82;
        }

        .counter-box.colored p,
        .counter-box.colored i,
        .counter-box.colored .counter {
            color: #fff
        }

        .dropbtn {
            background-color: transparent;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            padding-top: 15px;
            background-color: #0b3f82;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
            color: #0b3f82;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: transparent;
        }
    </style>
</head>

<body>
    <!-- Navigation-->

    <nav class="navbar navbar-light bg-custom static-top">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="images/pegasusLogo.png" alt="Girl in a jacket" width="190" height="60">
            </a>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="/homesearch" style="color: #fff; font-size: 15px;">HOME</a>
            </nav>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="/passengerDetails" style="color: #fff; font-size: 15px;">CRUISES</a>
            </nav>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#" style="color: #fff; font-size: 15px;">DESTINATIONS</a>
            </nav>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#" style="color: #fff; font-size: 15px;">INFORMATION</a>
            </nav>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#" style="color: #fff; font-size: 15px;">SHIPS</a>
            </nav>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#" style="color: #fff; font-size: 15px;">NEWS</a>
            </nav>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#" style="color: #fff; font-size: 15px;">CONTACT</a>
            </nav>

            <div class="dropdown">
                <button class="dropbtn">
                    LANGUAGES
                </button>

                <div class="dropdown-content">
                    <a href="#">
                        <img src="images/flag-en.png" width="20" height="15"> ENGLISH</a>

                    <a href="#">
                        <img src="images/flag-fr.png" width="20" height="15"> FRENCH</a>
                    <a href="#">
                        <img src="images/flag-sr.png" width="20" height="15"> SERBIAN</a>
                    <a href="#">
                        <img src="images/flag-ru.png" width="20" height="15"> RUSSIAN</a>
                    <a href="#">
                        <img src="images/flag-ro.png" width="20" height="15"> ROMANIAN</a>
                    <a href="#">
                        <img src="images/flag-pl.png" width="20" height="15"> POLISH</a>
                    <a href="#">
                        <img src="images/flag-cs.png" width="20" height="15"> CZECH</a>
                    <a href="#">
                        <img src="images/flag-hu.png" width="20" height="15"> HUNGARIAN</a>
                </div>
            </div>
            <a class="btn btn-primary" href="#signup">Sign Up</a>
        </div>
    </nav>


</body>

</html>