<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')

<body>
    <header class="masthead" style="background: url(http://127.0.0.1:8000/images/spetses-pegasus-cruises.jpg); background-repeat:norepeat; background-size:cover;">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Contact us!</h1>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div style="padding-left:80px; padding-right:80px;">
        <h3 style="margin-top:50px;">Address</h3>
        <p>Σέκερη 37, Τολό 210 56 Ελλάδα</p>
        <h3>Telephone</h3>
        <p>+30 27520 59430</p>
        <h3>Email</h3>
        <p>sales@pegasus-cruises.gr</p>
    </div>
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