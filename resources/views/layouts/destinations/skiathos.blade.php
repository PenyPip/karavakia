<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')
<style>
    /* Custom style to prevent carousel from being distorted 
   if for some reason image doesn't load */
    .carousel-item {
        min-height: 280px;
    }

    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }

    .navbar.navbar-light.bg-custom.static-top .container,
    .container.position-relative {
        width: 100% !important;
    }

    header.masthead h1 {
        margin-left: 10px;
        margin-bottom: 30px;
        width: min-content;
    }

    header.masthead p {
        margin-left: 10px;
    }

    header.masthead {
        padding-bottom: 15px;
    }

    .justify-content-center {
        justify-content: unset !important;
    }



    /* Style the buttons inside the tab */
    .tab button {
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        background-color: #0b3f82;
        color: #fff;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    /* Create an active/current tablink class */
    .tab button.active,
    #defaultOpen:active {
        background-color: #F0F0F0 !important;
        color: #555;
    }

    /* Style the tab content */
    .tabcontent {
        padding-top: 25px;
        padding-bottom: 25px;
        padding-left: 20px;
        padding-right: 20px;
        margin-right: 20px;
        border-bottom-right-radius: 7px;
        border-bottom-left-radius: 7px;
        border-top-right-radius: 7px;
        background-color: #F0F0F0;
        color: #555;
    }
</style>

<body>
    <header class="masthead" style="background: url(images/skiathos-page-1.jpg); background-size:cover; width:100%;">
        <div class="container position-relative">

            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="dest-title">
                        <!-- Page heading-->
                        <h1 class="mb-5" style="color:#fff; font-size:55px; border-bottom:3px solid #2ED1FE; text-align:left;">DISCOVER<br>SKIATHOS</h1>
                        <p style="color:#fff; margin-top:-40px; text-align:left;">Through a one-day cruise</p>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <container>

        <!--Informational Entry Section-->
        <div style="margin-left: 50px; margin-right:50px; margin-top:50px; margin-bottom:50px; display:grid; grid-template-columns:2fr 1fr;">
            <div style="margin-right:10px;">
                <h1 style="color:#113f82; text-align:center">SKIATHOS</h1>
                <p>
                    Skiathos is part of “Sporades islands” and is the closest one to the main land. Its distance is 41 nautical miles from Volos and 2.4 miles from the coasts of south Pilion. East of Skiathos is Skopelos island, in a distance of approx. 6 nautical miles.<br><br>

                    Skiathos has rich plantation and many beaches, most popular are Koukounaries, Banana beach and many more. In front of the entrance of the port there are various small islands. In the town of Skiathos you can visit the house of greek author Alexandros Papadiamantis who was born and raised on the island.<br><br>

                    At the town’s port there is Bourtzi, a small peninsula that splits the port in 2. There are 2 lakes, Agios Georgios and Stofylia, near Koukounaries beach.
                </p>
                <center> <button style="background-color:#0b3f82; color:#ffffff; padding:18px 25px 18px 25px; border-radius:5px;"><a href="/cruise-skiathos-koukounaries-from-glyfa" style="color:#fff; text-decoration:none;"><i class="fa fa-book"></i> Cruise Reservation</a></button></center>
            </div>
            <div style="margin-left:10px;">
                <img src="images/skiathos-2.jpg" style="border:solid 1px #000000; width:100%; height:auto;" />
            </div>
        </div>
        <h3 style="margin-bottom:80px; background:url(images/skiathos-pegasus1.jpg); background-repeat:no-repeat; background-position:center center; width:100%; height:380px; position:relative; font-size:46px; font-weight:100; color:#fff; padding-top:175px; padding-left:61.5px; padding-right:61.5px; top:50%;">More about the island</h3>

        <div style="display:grid; grid-template-columns: 2fr 1fr; margin-left:50px; margin-right:50px; margin-bottom:85px;">

            <!-- Tabs -->
            <div>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'at-a-glance')" id="defaultOpen">Briefly</button>
                    <button class="tablinks" onclick="openCity(event, 'food')">Food</button>
                    <button class="tablinks" onclick="openCity(event, 'beaches')">Beaches</button>
                    <button class="tablinks" onclick="openCity(event, 'sights')">Sights</button>
                    <button class="tablinks" onclick="openCity(event, 'journey')">Journey</button>
                </div>

                <div id="at-a-glance" class="tabcontent">
                    <p>In Skiathos you will have free time to explore the beauties of the town. You could enjoy a nice breakfast or lunch at one of the traditional tavernas or restaurants, or drink your coffee overlooking the port.
                    </p>
                    <p>
                        One of the museums everybody should visit is the house of Alexandros Papadiamantis, who was one of the greatest authors and poets of greek history.</p>
                </div>

                <div id="food" class="tabcontent" style="display:none;">
                    <p><b>En plo (Εν πλω)</b><br></p>
                    <p>Right at the sea, with a variety of tasty dishes.

                    </p>
                    <p><b>Amfiliki (Αμφιλύκη)
                        </b></p>
                    <p>Astonishing view and the nicest sea food on the island – this restaurant serves many local specialties you won’t find anywhere else.

                    </p>
                    <p><b>Marmita</b></p>
                    <p>Located in a garden of a traditional house of Skiathos in the center of the town. It serves traditional greek cuisine.

                    </p>
                    <p><b>Cookoonari</b></p>
                    <p>A place that will impress you by its view and romantic atmosphere. The food will be rewarding.

                    </p>

                </div>

                <div id="beaches" class="tabcontent" style="display:none;">
                    <p>
                        <b>Κουκουναριές</b><br>
                        Η διασημότερη παραλία της Σκιάθου με μοναδικής ομορφιάς τοπίο, με το δάσος των Κουκουναριών να καταλήγει τη θάλασσα και να συνιστά μαζί με τη λιμνοθάλασσα της Στροφυλιάς ένα μοναδικό υδροβιότοπο.<br>

                        <br><b>Μπανάνα</b><br>
                        Η πιο «ζωντανή» παραλία της ΣκιάθουΧωρίζεται σε δύο παραλίες, τη Μικρή και τη Μεγάλη Μπανάνα.Στη Μεγάλη Μπανάνα εκτυλίσσεται το καλοκαίρι ένα ατελείωτο πάρτυ ενώ η πιο απομονωμένη Μικρή Μπανάνα είναι φιλική για γυμνιστές.<br>

                        <br><b>Βρωμόλιμνος</b><br>
                        Βρίσκεται κατά μήκος της νότιας ακτογραμμής της Σκιάθου.Η παραλια είναι απάνεμη με λευκή άμμο και τα γαλαζοπράσινα νερά που θα σας μαγέψουν.<br>

                        <br><b>Αγία Ελένη</b><br>
                        Μια παραλία ήσυχη και χαλαρωτική με χρυσαφένια αμμουδιά και θέα στο Πήλιο, κατάλληλη για όσους δεν θέλουν τηνξ πολλή ένταση αλλά ούτε και την πλήρη ηρεμία.<br>

                        <br><b>Αχλαδιές</b><br>
                        Παραλία με ψιλή άμμο μπροστά από τον ομώνυμο οικισμό, πλήρως οργανωμένη αλλά χωρίς πολλή «φασαρία».<br>

                        <br><b>Ελιά</b><br>
                        Μια τεράστια αμμουδερή παραλία που θα συναντήσετε 15χλμ δυτικά της πόλης της Σκιάθου πολύ κοντά στις δημοφιλείς Κουκουναριές.<br>

                        <br><b>Λαλάρια</b><br>
                        Βρίσκεται στο βορειοανατολικό άκρο του νησιού και είναι μια από τις πιο διάσημες και χαρακτηριστικές παραλίες της Σκιάθου.<br>

                        <br><b>Ασέληνος</b><br>
                        Ένας όρμος στο βορρά του νησιού. Τα καταγάλανα, βαθιά κρυστάλλινα νερά σβήνουν σε μια αμμουδιά με χοντρή άμμο και βότσαλα.
                    </p>
                </div>

                <div id="sights" class="tabcontent" style="display:none;">
                    <h4 style="width:100%; border-bottom:2px solid #f2ca25;">Σπίτι Παπαδιαμάντη</h4>
                </div>

                <div id="journey" class="tabcontent" style="display:none;">
                    <p><img src="images/pegasus-skiathos-destination.jpg" style="width:100%; height:auto;" /></p>
                </div>

                <script>
                    function openCity(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }

                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                    }
                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                </script>
            </div>

            <!-- carousel2 -->
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>

                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/skiathos-page-3-1024x1024.jpg" class="d-block w-100" alt="Slide 1" width="350" height="350">
                    </div>
                    <div class="carousel-item">
                        <img src="images/skiathos-page-4-1024x1024.jpg" class="d-block w-100" alt="Slide 2" width="350" height="350">
                    </div>
                    <div class="carousel-item">
                        <img src="images/skiathos-pegasus-1024x853.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
                    </div>
                    <div class="carousel-item">
                        <img src="images/skiathos-pegasus-1024x853.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
                    </div>
                </div>


                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <!-- carousel end -->

        </div>

    </container>

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