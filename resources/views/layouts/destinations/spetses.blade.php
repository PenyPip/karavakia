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
    .container.position-relative,
    footer .container,
    .fullhorizontal {
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
    <header class="masthead" style="background: url(images/Spetses-1400-cruise.jpg); background-size:cover; width:100%;">
        <div class="container position-relative">

            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="dest-title">
                        <!-- Page heading-->
                        <h1 class="mb-5" style="color:#fff; font-size:55px; border-bottom:3px solid #2ED1FE; text-align:left;">DISCOVER<br>SPETSES</h1>
                        <p style="color:#fff; margin-top:-40px; text-align:left;">Through a one-day cruise</p>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <container>

        <!--Informational Entry Section-->
        <div style="margin-left: 50px; margin-right:50px; margin-top:50px; margin-bottom:50px;">
            <div class="row">
                <div class="col-8" style="margin-right:10px;">
                    <h1 style="color:#113f82; text-align:center">SPETSES</h1>
                    <p>
                        Unforgettable scenes of natural beauty have been formed on this island, with a harmonic combination of clear, crystal waters and tall green pine trees. Countless traditional bays around the island offer visitors tranquility and relaxation. Every part of the island is accessible by land by the traditional horse drawn carriages.<br>
                        A ride towards the green forest makes visitors feel the unique atmosphere of the island. Spetses is an island of long history and it has the privilege of playing a significant role in the revolution of 1821. Visitors feel they’re reliving those heroic moments while surrounded by remarkable historic monuments that have been preserved with love and attention.
                    </p>
                    <center> <button style="background-color:#0b3f82; color:#ffffff; padding:18px 25px 18px 25px; border-radius:5px;"><a href="cruise-hydra-spetses-from-tolo" style="color:#fff; text-decoration:none;"><i class="fa fa-book"></i> Cruise Reservation</a></button></center>
                </div>
                <div class="col" style="margin-left:10px;">
                    <img src="images/spetses.png" style="border:solid 1px #000000; width:100%; height:auto;" />
                </div>
            </div>
        </div>
        <h3 class="fullhorizontal" style="margin-bottom:80px; background:url(/images/skiathos-page-2.jpg); background-position:center center; background-repeat:no-repeat; width:100%; height:380px; position:relative; font-size:46px; font-weight:100; color:#fff; padding-top:175px; padding-left:61.5px; padding-right:61.5px; top:50%;">The island of Captains</h3>
        <div class="row">
            <div class="col-8">
                <div style="margin-left:50px; margin-right:50px; margin-bottom:85px;">
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
                            <p>We arrive in Spetses around 15.30. usually travelers go for a late lunch or for a quick swim.<br><br>

                                Above the port you’ll find DAPIA, the island’s old blockhouse where most of the cafeterias are situated. It’s decorated by pebbles brought from the island’s beaches.<br><br>

                                You can visit the Bouboulina’s Museum, which is located approx. 100 meters from the port. Near the museum there is also the neo-classical building of the island’s benefactor, Sotiris Anargyros.
                            </p>
                        </div>

                        <div id="food" class="tabcontent" style="display:none;">
                            <p>Center-Town<br>
                                <b>Alfi’s</b><br>
                                The sweetest stop that you can make during your time in Spetses is this one, at the pastry shop-gelateria Alfi’s.<br><br>

                                Center-Town<br>
                                <b>Clock</b><br>
                                The favourite casual dining restaurant of Spetses, the island’s hot spot has been renovated and is expecting all of you!<br><br>

                                Old port<br>
                                <b>Mourayo</b><br>
                                This is the first bar-restaurant to open its doors at the old port and since then the area has set in to be the absolute spot for entertainment and not only…
                                <img src="images/ydra-cruises-food-long.jpg" style="width:100%;" />
                                Kounoupitsa<br>
                                <b>Nero tis agapis (water of love)</b><br>
                                It owes its name to a traditional café of Spetses. It is situated at Kounoupitsa area and serves…
                            </p>
                        </div>

                        <div id="beaches" class="tabcontent" style="display:none;">
                            <p>
                                <br>Agios Mammas</br><br>
                                Next to the port, direct access.<br><br>

                                <b>Agios Nikolaos</b><br>
                                Pebble stone beach on the way to the old port.<br><br>

                                <b>Agia Marina</b><br>
                                Organized beach, only 10’ from Dapia. The cosmic beach bar Paradise is located here.<br><br>

                                <b>Kounoupitsa</b><br>
                                A thin line of sandy beach all along the Kounoupitsa area. It’s chosen by many for a quick swim.<br><br>

                                <b>Ligoneri</b><br>
                                Small, not organized beach.<br><br>

                                <b>Vrellos beach</b><br>
                                Organised beach with sunbeds, umbrellas and beach bar. To reach this beach you must take the local bus.<br><br>

                                <b>Zogeria bay</b><br>
                                This Is a beach where you can enjoy your swim right next to the pine tree forest. Just a few minute walk through the trees and you’re at the small bay of Zogeria. Here the water is blue-green, a colour it takes from all the pine trees that literally reach the sea.<br><br>

                                <b>Agia Paraskevi</b><br>
                                A beautiful retreat with clear blue waters<br><br>
                        </div>

                        <div id="sights" class="tabcontent" style="display:none;">
                            <h4 style="width:100%; border-bottom:2px solid #f2ca25;">Mansions</h4>
                            <p>You must visit the museum hosted at Xatzigianni Meksis mansion (one of the wealthiest leaders of the greek revolution) and the Bouboulina museum situated at the heroine’s mansion and exhibits personal belongings and heirlooms of the revolution.
                            </p>
                            <h4 style="width:100%; border-bottom:2px solid #f2ca25;">Monastery</h4>
                            <p>The historical monastery of Agios Nikolaos (Saint Nicholas) where the locals shouted “Freedom or Death” on April 3rd, 1821 and joined the rest of the greeks in the revolution.
                            </p>
                            <h4 style="width:100%; border-bottom:2px solid #f2ca25;">Other sights</h4>
                            <ul>
                                Traditional elements that you can only see in Spetses:
                                <li>The famous shipyards with the traditional wooden hulls,</li>
                                <li>The old mansions of last century’s captains with the distinct architect,</li>
                                <li>The old mansions of last century’s captains with the distinct architect,</li>
                                <li>The squares and alleys decorated with pebbles,</li>
                                <li>The horse-drawn carriages</li>
                            </ul>
                        </div>

                        <div id="journey" class="tabcontent" style="display:none;">
                            <p><img src="images/pegasus-spetses-destination.jpg" style="width:100%; height:auto;" /></p>
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
                </div>
            </div>
            <div class="col" style="margin-right:40px;">
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
                            <img src="images/church-spetses.jpg" class="d-block w-100" alt="Slide 1" width="350" height="350">
                        </div>
                        <div class="carousel-item">
                            <img src="images/spetses-houses-cruise.jpg" class="d-block w-100" alt="Slide 2" width="350" height="350">
                        </div>
                        <div class="carousel-item">
                            <img src="images/spetses-food-cruise.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
                        </div>
                        <div class="carousel-item">
                            <img src="images/spetses-agalma-cruise.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
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
            </div>
            <!-- carousel end -->
        </div>
        </div>
        <br>

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
<!--test-->

</html>