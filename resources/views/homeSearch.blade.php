<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')

<style>
    .zoom-hov-img {
        display: inline-flex;
        width: 550px;
        height: auto;
        overflow: hidden;
    }

    .zoom-hov-img img {
        transition: transform .5s ease;
    }

    .zoom-hov-img:hover img {
        transform: scale(1.5);
    }
</style>

<body>
    <!-- Masthead-->
    <header class="searchbox">

        <div class="container ">
            <h1 class="text-center text-custom">Αναζήτηση ημερήσιας κρουαζιέρας</h2>
                <div class="row mb-2">
                    <div class="col-md-6 offset-md-3">
                        <div class="card border-0">
                            <div class="card-body p-0">

                                <!-- AUTO COMPLETE DROPDOWN -->
                                <select class="selectpicker form-control-lg border-2  px-4 py-4 rounded shadow">
                                    <option hidden value="Επιλογή κατηγορίας επιβάτη">Επιλογή ημερήσιας εκδρομής</option>
                                    <option value="ΥΔΡΑ">ΥΔΡΑ ΣΠΕΤΣΕΣ ΑΠΟ ΤΟΛΟ</option>
                                    <option value="ΣΠΕΤΣΕΣ">ΠΟΡΤΟ ΧΕΛΙ ΥΔΡΑ ΣΠΕΤΣΕΣ ΑΠΟ ΤΟΛΟ</option>
                                    <option value="Los Angeles">ΣΚΙΑΘΟΣ ΚΟΥΚΟΥΝΑΡΙΕΣ ΑΠΟ ΓΛΥΦΑ</option>
                                    <option value="Chicago">ΣΚΟΠΕΛΟΣ ΑΛΟΝΝΗΣΟΣ ΑΠΟ ΓΛΥΦΑ</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mb-2 ">
                    <!-- <div class="col-lg-8">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                    <option selected>Επιλογή κατηγορίας επιβάτη</option>
                                    <option value="1">Ενήλικος  25$</option>
                                    <option value="2">Ανήλικος  15$</option>
                                    <option value="3">Φοιτητής  18$</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-6 offset-md-3 mb-2">
                        <div class="d-grid gap-2">
                            <button class="btn-lg btn-light" type="button" disabled><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Επιλέξτε ημερομηνία"></button>

                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <div class="d-grid gap-2">
                                    
                                    <button class="btn-lg btn-light" type="button" onClick="passDet()"><i class="fa fa-search"></i> Αναζήτηση</button>
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- <div class="row">
                    <div class="col-lg-4">
                        <div class="d-grid gap-2">
                            <button class="btn-lg btn-light" type="button" disabled>Προσθήκη εισητηρίου</button>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="row">
                            <button type="button" class="btn btn-custom btn-circle btn-xl px-2" onClick="onClickAdd()"><i class="fa fa-plus"></i> </button>
                            <button class="btn btn-custom btn-circle btn-xl"><a id="clicks">0</a></button>
                            <button type="button" class="btn btn-custom btn-circle btn-xl px-2" onClick="onClickRemove()"><i class="fa fa-minus"></i> </button>

                        </div>
                    </div>



                </div> -->


        </div>

    </header>

    <!--Memorable cruises-->
    <div style="margin-left:25px; margin-right:25px; margin-top:50px; margin-bottom:50px; text-align:center; align-items:center;">
        <h5 style="text-align:center; color:#000000;">Pegasus Cruises</h5>
        <div style="width:100%; text-align:-webkit-center;">
            <div style="width:45px; text-align:center;">
                <hr style="border: 1.5px solid #ffc107; opacity: 1; width: 100%;" />
            </div>
        </div>
        <h3>ΑΞΕΧΑΣΤΕΣ ΜΟΝΟΗΜΕΡΕΣ ΚΡΟΥΑΖΙΕΡΕΣ</h3>

        <div style="width:100%; text-align:center;">
            <div class="zoom-hov-img"><img src="images/Map-pegasus-cruises-spetses-hydra-tyro.jpg" style="width:550px; max-width:100%; height:auto;" /></div>
            <div class="zoom-hov-img"><img src="images/Map-pegasus-cruises-skiathos-tours.jpg" style="width:550px; max-width:100%; height:auto;" /></div>
        </div>
    </div>
    <!-- Icons Grid-->
    <div class="container-counter">

        <div class="row">

            <div class="four col-md-3">
                <div class="counter-box colored" style="height:300px;">
                    <i class="fa fa-anchor"></i>
                    <!--<span class="counter">1563</span>-->
                    <p>Μονοήμερες Κρουαζιέρες</p>
                    <p style="font-weight:200;">Ύδρα, Σπέτσες, Σκιάθος Κουκουναριές και άλλοι ιδιαίτεροι μονοήμεροι προορισμοί.</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box" style="height:300px;">
                    <i class="fa fa-ship"></i>
                    <!--<span class="counter">1563</span>-->
                    <p>Τα πλοία μας</p>
                    <p style="font-weight:200;">Τα πλοία λόγω της ταχύτητάς τους, δίνουν την ευκαιρία στους επιβάτες τους να παραμείνουν στα νησιά για περισσότερη ώρα.</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box" style="height:300px;">
                    <i class="fa  fa-map"></i>
                    <!--<span class="counter">1563</span>-->
                    <p>Προορισμοί</p>
                    <p style="font-weight:200;">Ζήστε ιδιαίτερες στιγμές και χαρείτε πλούσιες ανέσεις σχεδιάζοντας τη δική σας αξέχαστη κρουαζιέρα.</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box" style="height:300px;">
                    <i class="fa  fa-calendar"></i>
                    <!--<span class="counter">1563</span>-->
                    <p>Εκδηλώσεις</p>
                    <p style="font-weight:200;">Διοργανώστε το γάμο ή τις δεξιώσεις σας ώστε να σας δημιουργήσουμε υπέροχες αναμνήσεις.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonials-->
    <section class="testimonials text-center bg-light" style="background: url(images/bg-sight-cruise.jpg); background-repeat:no-repeat; background-size:cover;">
        <div class=" container">
            <h2 class="mb-5" style="text-decoration: underline #245ed6; color:#fff;">Τι λένε για εμάς...!</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0" style="background: #ffffffa8; height: 200px; padding: 15px; border: 3px solid #0d6efd; border-radius: 5px;">
                        <h5 style="color:#245ed6;"><i class="fa fa-user fa-lg" aria-hidden="true"><b>
                                    <font style="font-size:18px;"> Σταύρος Φωτίου</font>
                                </b></i></h5>
                        <p class="font-weight-light mb-0">"Μπράβο τέλειες κρουαζιέρες.</br>Όλα πεντακάθαρα.</br>Συγχαρητήρια."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0" style="background: #ffffffa8; height: 200px; padding: 15px; border: 3px solid #0d6efd; border-radius: 5px;">
                        <h5 style="color:#245ed6;"><i class="fa fa-user fa-lg" aria-hidden="true"><b>
                                    <font style="font-size:18px;"> Σταύρος Ριζόπουλος</font>
                                </b></i></h5>
                        <p class="font-weight-light mb-0">"Μπράβο. Συγχαρητήρια στο καπτενΓιώργη.</br>Πολύ καλή οργάνωση,</br> διασκέδαση, εξυπηρέτηση.</br>Ευχαριστούμε."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0" style="background: #ffffffa8; height: 200px; padding: 15px; border: 3px solid #0d6efd; border-radius: 5px;">
                        <h5 style="color:#245ed6;"><i class="fa fa-user fa-lg" aria-hidden="true"><b>
                                    <font style="font-size:18px;"> THEBAULT Gwen</font>
                                </b></i></h5>
                        <p class="font-weight-light mb-0">"Great cruise with my family !</br> Chidren and fathers loved the day :</br> the team is friendly, the boat</br> is really comfortable</br> and the sunny roof top</br>gives a great view"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations-->

    <div style="margin-left:25px; margin-top:50px; margin-bottom:50px; margin-right:25px; text-align:center; align-items:center;">
        <h5 style="text-align:center; color:#000000;">Pegasus Cruises</h5>
        <div style="width:100%; text-align:-webkit-center;">
            <div style="width:45px; text-align:center;">
                <hr style="border: 1.5px solid #ffc107; opacity: 1; width: 100%;" />
            </div>
        </div>
        <h3>ΠΡΟΟΡΙΣΜΟΙ</h3>
    </div>
    <div class="container" style="margin-bottom:80px;">
        <div style="display:grid; grid-template-columns: 1fr 1fr 1fr">
            <div style="margin:20px;">
                <div style="margin-left: 67.5px; margin-bottom:20px; background:url(images/cropped-for-home-hydra-pegasus-cruise4-370x370.jpg); border-radius:100%; text-align:center; color:#fff; background-position:center; width:270px; height:270px; background-repeat:no-repeat;">
                    <p style="padding-top:50%;"><a href="/hydra" style="color:#fff; font-weight:500;">ΥΔΡΑ</a></br></p>
                </div>
                <div style="margin-left: 67.5px; background:url(images/cropped-for-home-spetses-pegasus-cruises-370x370.jpg); border-radius:100%; text-align:center; color:#fff; background-position:center; width:270px; height:270px; background-repeat:no-repeat;">
                    <p style="padding-top:50%;"><a href="/spetses" style="color:#fff; font-weight:500;">ΣΠΕΤΣΕΣ</a></p>
                </div>
            </div>
            <div style="margin:20px;">
                <div style="margin-left: 67.5px; margin-bottom:20px; background:url(images/cropped-for-home-skiathos-page-4-370x370.jpg); border-radius:100%; text-align:center; color:#fff; background-position:center; width:270px; height:270px; background-repeat:no-repeat;">
                    <p style="padding-top:50%;"><a href="/skiathos" style="color:#fff; font-weight:500;">ΣΚΙΑΘΟΣ</a></br></p>
                </div>
                <div style="margin-left: 67.5px; background:url(images/cropped-for-home-nauplio-370x370.jpg); border-radius:100%; text-align:center; color:#fff; background-position:center; width:270px; height:270px; background-repeat:no-repeat;">
                    <p style="padding-top:50%;"><a href="/skopelos" style="color:#fff; font-weight:500;">ΝΑΥΠΛΙΟ</a></p>
                </div>
            </div>
            <div style="margin:20px;">
                <div style="margin-left: 67.5px; margin-bottom:20px; background:url(images/cropped-for-home-alonissos-370x370.jpg); border-radius:100%; text-align:center; color:#fff; background-position:center; width:270px; height:270px; background-repeat:no-repeat;">
                    <p style="padding-top:50%;"><a href="/alonissos" style="color:#fff; font-weight:500;">ΑΛΟΝΗΣΣΟΣ</a></br></p>
                </div>
                <div style="margin-left: 67.5px; background:url(images/cropped-for-home-monemvasia-cruise-pegasus-370x370.jpg); border-radius:100%; text-align:center; color:#fff; background-position:center; width:270px; height:270px; background-repeat:no-repeat;">
                    <p style="padding-top:50%;"><a href="/monemvasia" style="color:#fff; font-weight:500;">ΜΟΝΕΜΒΑΣΙΑ</a>
                </div>
            </div>
        </div>
    </div>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




    <!-- Include Choices JavaScript (latest) -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>

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

    <script>
        var clicks = 0;

        function onClickAdd() {
            clicks += 1;
            document.getElementById("clicks").innerHTML = clicks;
        };

        function onClickRemove() {
            if (document.getElementById("clicks").innerHTML > 0) {
                clicks -= 1;
                document.getElementById("clicks").innerHTML = clicks;
            }

        };

        function reload() {
            reload = location.reload();
        }

        $(document).ready(function() {

            $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>


    <script>
        $(".datepicker").datepicker({
            minDate: ('+1d'),
            dateFormat: 'dd/mm/yy',
            beforeShowDay: function(date) {
                var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                var isEnabled = (EnableDates.indexOf(string) != -1); // used to enable if its a route
                return [isEnabled];
            },
            changeMonth: true,
            changeYear: true
        });


        var EnableDates = new Array(); // this array will store the routes dates after being extracted form the JSON
        $.ajax({
            url: 'js/routes-daysoff.json', //example jason
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // now the data is loaded and we will traverse over the "athens-aigina" 's route and create an array to of dates of routes
                var listOfRoutes = data['athens-aigina'].routes; //here will be the var that comes from the destination inputs exp"athens-aigina" or "athens-thasos"
                for (var i in listOfRoutes) {
                    EnableDates.push(listOfRoutes[i].date); // push the date to our array for checking afterwards
                }

            }
        });

        function passDet(){
            window.location.assign("/passengerDetails")
        }
    </script>


</body>

</html>