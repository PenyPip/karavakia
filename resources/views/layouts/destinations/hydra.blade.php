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
    <header class="masthead" style="background: url(images/slider-ydra.jpg); background-size:cover; width:100%;">
        <div class="container position-relative">

            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="dest-title">
                        <!-- Page heading-->
                        <h1 class="mb-5" style="color:#fff; font-size:55px; border-bottom:3px solid #2ED1FE; text-align:left;">DISCOVER<br>HYDRA</h1>
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
                    <h1 style="color:#113f82; text-align:center">HYDRA</h1>
                    <p>
                        Hydra today appears like a painting all in grey, white and blue colours over the blue colour of
                        the sea, a model example of architecture and beauty.

                        Hydra is situated in the center of the island, in a closed bay and is built amphitheatrically on the bedrock side creating a unique harmony between architecture and the surrounding environment.

                        As soon as a visitor arrives in Hydra, he goes back in time impressed by the view of the tall and imposing mansions that dominate at the port of the town, while being surrounded by a magical sentiment. It could be the unique architecture and scenic of the island, it could also be the long lasting cultural legacy it carries, or all these together.

                        The main characteristic of the island is the absence of cars or other wheeled vehicles and all transportation is been accomplished by the donkeys, a fact that makes Hydra even more picturesque.
                        The island is famous for its natural beauty, the calm daylife it offers to all guests, but also for an intense cosmopolitan nightlife.
                    </p>
                    <center> <button style="background-color:#0b3f82; color:#ffffff; padding:18px 25px 18px 25px; border-radius:5px;"><a href="cruise-hydra-spetses-from-tolo" style="color:#fff; text-decoration:none;"><i class="fa fa-book"></i> Cruise Reservation</a></button></center>
                </div>

                <div class="col" style="margin-left:10px;">
                    <img src="images/hydra-maps.jpg" style="border:solid 1px #000000; width:100%; height:auto;" />
                </div>
            </div>
        </div>
        <h3 class="fullhorizontal" style="margin-bottom:80px; background:url(/images/hydra_2-1.jpg); background-repeat:no-repeat; width:100%; height:380px; position:relative; font-size:46px; font-weight:100; color:#fff; padding-top:175px; padding-left:61.5px; padding-right:61.5px; top:50%;">More about the island</h3>
        <div class="row">
            <div class="col-8">
                <div style="margin-left:50px; margin-right:50px; margin-bottom:85px;">
                    <!-- Tabs -->
                    <div>
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'at-a-glance')" id="defaultOpen">At a glance</button>
                            <button class="tablinks" onclick="openCity(event, 'food')">Food</button>
                            <button class="tablinks" onclick="openCity(event, 'beaches')">Beaches</button>
                            <button class="tablinks" onclick="openCity(event, 'sights')">Sights</button>
                            <button class="tablinks" onclick="openCity(event, 'journey')">Journey</button>
                        </div>

                        <div id="at-a-glance" class="tabcontent">
                            <p>We arrive in Hydra at 11.30 and you can go for a swim. As you disembark the ship, you’ll find the Museum of Hydra 100 meters on your left, where exhibits are displayed from the greek revolution and the Balkan wars.</p>
                            <p>You can also visit the bastions with the cannons or the church of Saint Constantinos.</p>
                        </div>

                        <div id="food" class="tabcontent" style="display:none;">
                            <p>At the port<br>
                                <b>Hydraiki Gonia</b><br>
                                A good suggestion for all hours of the day<br>

                                At the beach of Vlyxos<br>
                                <b>Bar-restaurant Enalion</b><br>
                                Ideal choice for a filling breakfast, coffee or meal in a typical island environment.<br>

                                At the Cannons<br>
                                <b>Bar-restaurant Sunset</b><br>
                                This restaurant’s advantage is the location which in combination with good food offers the most idyllic view.<br>

                                In the town of Hydra<br>
                                <b>To Paradosiakon</b><br>
                                Here, authentic traditional flavors of the greek cuisine are the menu’s stars.
                            </p>
                        </div>

                        <div id="beaches" class="tabcontent" style="display:none;">
                            <p>
                                <b>Bisti</b><br>
                                Organised beach on the south-west end of the island.<br>

                                <b>Agios Nikolaos – Saint Nicholas</b><br>
                                This beach is on the south-west side of the island, situated in a creek, surrounded by pine trees.<br>

                                <b>Kaoumithi & Nisiza</b><br>
                                Beaches with pebbles and sand which can be approached by sea taxis.<br>

                                <b>Spilia Pigi</b><br>
                                One of the most famous beaches of hydra, it is only a 5 minute walk distance from the center of the settlement and it’s major characteristic are the big stone plates.<br>

                                <b>Limnioniza</b><br>
                                This beach is gifted by lovely pebbles and crystal-clear wates, which makes it ideal for swimming and diving away from nosey glances.<br>

                                <b>Hydroneta</b><br>
                                This beach is almost next to the beach of Spilia, under the cannons of Hydra’s castle and is defined by it’s stone plates.<br>

                                <b>Mandraki</b><br>
                                One of the most approachable beaches on the island, only 15 minutes from the port of Hydra.
                            </p>
                        </div>

                        <div id="sights" class="tabcontent" style="display:none;">
                            <h4>The bastions with the cannons</h4><br>
                            <p>
                                As soon as the ship reaches the port of Hydra, the eye catches the impressive bastions that protect its entrance. The island, wealthy and with great contribution in the struggle for Independence, had to be protected from pirates and possible attacks of the Ottoman fleet.<br>

                                This is why, in the 18th century, the period of the island’s great prosperity, the bastions were risen on the 2 edges of the port and were strengthened with cannons to discourage any aspiring intruders. Today this kind of danger is only part of the island’s history, but the bastions are probably the most magical site of Hydra. The clear view of the sea and the settlement, especially at sunset, makes a walk there mandatory.
                            </p>
                        </div>

                        <div id="journey" class="tabcontent" style="display:none;">
                            <p><img src="images/pegasus-ydra-destination.jpg" style="width:100%; height:auto;" /></p>
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
                            <img src="images/hydra_2-1.jpg" class="d-block w-100" alt="Slide 1" width="350" height="350">
                        </div>
                        <div class="carousel-item">
                            <img src="images/hydra-page2-360x360.jpg" class="d-block w-100" alt="Slide 2" width="350" height="350">
                        </div>
                        <div class="carousel-item">
                            <img src="images/hydra-page4-360x360.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
                        </div>
                        <div class="carousel-item">
                            <img src="images/hydra4-360x360.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
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

</html>