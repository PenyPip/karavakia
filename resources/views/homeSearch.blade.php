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
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-custom static-top">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="images/pegasusLogo.png" alt="Girl in a jacket" width="190" height="60">

            </a>
            <a class="btn btn-primary" href="#signup">Sign Up</a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">

        <div class="container">
            <h1 class="text-center text-custom">Αναζήτηση ημερήσιας κρουαζιέρας</h2>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card border-0">
                        <div class="card-body p-0">

                            <!-- AUTO COMPLETE DROPDOWN -->
                            <select class="selectpicker form-control border-2 mb-1 px-4 py-4 rounded shadow">
                                <option value="ΥΔΡΑ">ΣΚΙΑΘΟΣ</option>
                                <option value="ΣΠΕΤΣΕΣ">ΣΠΕΤΣΕΣ</option>
                                <option value="ΞΑΝΑ ΣΠΕΤΣΕΣ">ΞΑΝΑ ΣΠΕΤΣΕΣ</option>
                                <option value="Los Angeles">ΣΚΙΑΘΟΣ</option>
                                <option value="Chicago">ΣΚΙΑΘΟΣ</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <div class="card-body p-0">

                            <!-- AUTO COMPLETE DROPDOWN -->
                            <select class="selectpicker form-control border-2 mb-1 px-4 py-4 rounded shadow">
                                <option value="ΥΔΡΑ">ΣΚΙΑΘΟΣ</option>
                                <option value="ΣΠΕΤΣΕΣ">ΣΠΕΤΣΕΣ</option>
                                <option value="ΞΑΝΑ ΣΠΕΤΣΕΣ">ΞΑΝΑ ΣΠΕΤΣΕΣ</option>
                                <option value="Los Angeles">ΣΚΙΑΘΟΣ</option>
                                <option value="Chicago">ΣΚΙΑΘΟΣ</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

         
        </div>

    </header>
    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                        <h3>Fully Responsive</h3>
                        <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                        <h3>Bootstrap 5 Ready</h3>
                        <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>Easy to Use</h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Showcases-->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/bg-showcase-1.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Fully Responsive Design</h2>
                    <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/bg-showcase-2.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Updated For Bootstrap 5</h2>
                    <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/bg-showcase-3.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Easy to Use & Customize</h2>
                    <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('images/testimonials-1.jpg') }}" alt="..." />
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="images/testimonials-2.jpg" alt="..." />
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="images/testimonials-3.jpg" alt="..." />
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action-->
    <section class="call-to-action text-white text-center" id="signup">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                    <!-- Signup form-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row">
                            <div class="col">

                                <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                            </div>
                            <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <p>To activate this form, sign up at</p>
                                <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
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
    </section>
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

    <!-- Include Choices JavaScript (latest) -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script>
        /* ==============================================
    CUSTOM SELECT
  ============================================== */
        const sorting = document.querySelector('.selectpicker');
        const commentSorting = document.querySelector('.selectpicker');
        const sortingchoices = new Choices(sorting, {
            placeholder: false,
            itemSelectText: ''
        });


        // Trick to apply your custom classes to generated dropdown menu
        let sortingClass = sorting.getAttribute('class');
        window.onload = function() {
            sorting.parentElement.setAttribute('class', sortingClass);
        }
    </script>

    <script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
</body>

</html>