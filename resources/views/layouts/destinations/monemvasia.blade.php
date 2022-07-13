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
            <a class="btn btn-primary" href="#signup">Sign Up</a>
        </div>
    </nav>
    <header class="masthead" style="background: url(http://127.0.0.1:8000/images/spetses-pegasus-cruises.jpg); background-size:cover;">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Monemvasia</h1>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col">
                                    <!-- <select class="form-select form-select-lg" aria-label="Default select example">
                                        <option selected>Επιλογή ημερήσιας κρουαζιέρας</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select> -->

                                    <input class="form-control form-control-lg" list="datalistOptions" id="exampleDataList" placeholder="Επιλογή ημερήσιας κρουαζιέρας" data-sb-can-submit="yes">
                                    <datalist id="datalistOptions">
                                        <option value="ΥΔΡΑ">
                                        </option>
                                        <option value="ΣΠΕΤΣΕΣ">
                                        </option>
                                        <option value="ΞΑΝΑ ΣΠΕΤΣΕΣ">
                                        </option>
                                        <option value="Los Angeles">
                                        </option>
                                        <option value="Chicago">
                                        </option>
                                    </datalist>



                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>

                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <p style="margin:250px; margin-top:50px; margin-bottom:50px;">Monemvasia is carved into the rock like a sculpture. It’s also know as “Givraltar of the East” and as the greek poet’s Giannis Ritsos’ “rock ship”. Ritsos was born here. Monemvasia invites you into a journey through time, to wonder through the uniquely preserved medieval settlement with its arched alleys, the churches and the mansions. Swim in the dreamy sea, enjoy the beaches and the modern facilities, and don’t forget to taste the local wine.</p>


    <!-- Footer-->
    <footer class="footer bg-custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 h-100 text-center text-white text-lg-start my-auto">
                    <h4>PEGASUS</h4>
                    <p class="text-muted small mb-4 mb-lg-0">
                        Η εταιρεία PEGASUS CRUISES είναι μια καθιερωμένη, φιλική, οικογενειακή εταιρεία που εδρεύει στο ΤΟΛΟ προσφέροντας άνετες μονοήμερες κρουαζιέρες στα παραδοσιακά νησιά του Αργοσαρωνικού και στις Σποράδες (Ύδρα, Σπέτσες, Σκιάθος, Σκόπελος και άλλα).</p>

                    <!-- <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2022. All Rights Reserved.</p> -->
                </div>


                <div class="col-lg-3 h-100 text-center text-white my-auto">
                    <h4>ΜΕΝΟΥ</h4>
                    <ul class="list-inline mb-0">
                        <li>
                            Πλοία
                        </li>
                        <li>
                            Νέα
                        </li>
                        <li>
                            Εταιρεία
                        </li>
                        <li>
                            Τρόποι Πληρωμής
                        </li>
                        <li>
                            Πολιτική επιστροφών & ακυρώσεων
                        </li>
                    </ul>
                </div>


                <div class="col-lg-3 h-100 text-center text-white my-auto">
                    <h4>ΠΡΟΟΡΙΣΜΟΙ</h4>
                    <ul class="list-inline mb-0">
                        <li>
                            Σπέτσες
                        </li>
                        <li>
                            Ύδρα
                        </li>
                        <li>
                            Σκίαθος
                        </li>
                        <li>
                            Αλόννησος
                        </li>
                        <li>
                            Σκόπελος
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 h-100 text-center text-white text-lg-start my-auto">
                    <a class="navbar-brand" href="#">
                        <img src="images/pegasusLogo.png" alt="Girl in a jacket" width="190" height="60">
                    </a>
                    <p class="text-muted small mb-4 mb-lg-0">Μονοήμερες Κρουαζιέρες Pegasus Cruises</p><br>
                    <p class="text-muted small mb-4 mb-lg-0"> Διεύθυνση: Σέκερη 37, Τολό</p><br>
                    <p class="text-muted small mb-4 mb-lg-0">Τηλέφωνο: +30 27520 59430, 59145, 58310 | +30 27520 59661</p><br>
                    <p class="text-muted small mb-4 mb-lg-0">Email: sales@pegasus-cruises.gr</p>





                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>