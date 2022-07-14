<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')

<body>
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
    @include('layouts.footer')

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