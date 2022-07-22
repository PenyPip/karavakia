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
    footer .container {
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
    <header class="masthead" style="background: url(images/skopelos4.jpg); background-size:cover; width:100%;">
        <div class="container position-relative">

            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="dest-title">
                        <!-- Page heading-->
                        <h1 class="mb-5" style="color:#fff; font-size:55px; border-bottom:3px solid #2ED1FE; text-align:left;">DISCOVER<br>SKOPELOS</h1>
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
                    <h1 style="color:#113f82; text-align:center">SKOPELOS</h1>
                    <p>
                        Skopelos is the greenest island of Greece. Here, the green trees join the deep blue waters of the sea and the sky creating an image of natural beauty that is beyond comparison. Most of the island is covered by virgin pine forest.
                        <br><br>
                        The town of Skopelos has been characterized by a presidential decree in 1978 as a traditional settlement mostly because of its architecture which is a mixture of various architectural styles and it gives the town a royal aspect. Getting to know Skopelos is a joy for each visitor. History is alive and the combination of nature and history makes this island much more than a tourist attraction.
                    </p>
                    <center> <button style="background-color:#0b3f82; color:#ffffff; padding:18px 25px 18px 25px; border-radius:5px;"><a href="cruise-hydra-spetses-from-tolo" style="color:#fff; text-decoration:none;"><i class="fa fa-book"></i> Cruise Reservation</a></button></center>
                </div>
                <div class="col" style="margin-left:10px;">
                    <img src="images/skopelosxartis.jpg" style="border:solid 1px #000000; width:100%; height:auto;" />
                </div>
            </div>
        </div>
        <h3 style="margin-bottom:80px; background:url(images/skopelos-island.jpg); background-position:center center; background-repeat:no-repeat; width:100%; height:380px; position:relative; font-size:46px; font-weight:100; color:#fff; padding-top:175px; padding-left:61.5px; padding-right:61.5px; top:50%;">More about the island</h3>
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
                            <p>When we arrive in Skopelos you will have free time to enjoy breakfast or lunch and visit the most beautiful beaches of the island, or the incredible sights Skopelos has to show.
                            </p>
                        </div>

                        <div id="food" class="tabcontent" style="display:none;">
                            <p><b>Perivoli restaurant</b><br>
                                A restaurant where served dishes are light and outstanding in taste.<br><br>

                                <b>The dolphin of Skopelos</b><br>
                                Food in a peaceful environment with amazing view and great atmosphere.<br><br>

                                <b>Anatoli</b><br>
                                Delicious meze for ouzo. Nice music that travels visitors to other times! The view from the restaurant is unique.<br><br>

                                <b>Rodi restaurant</b><br>
                                A restaurant with soft music and nice atmosphere. The food choices are remarkable and the menu emormous.


                            </p>
                        </div>

                        <div id="beaches" class="tabcontent" style="display:none;">
                            <p>
                                <b>Kastani</b><br>
                                A beach that combines green-blue waters, sandy beach, a green background with all the modern amenities someone could wish for.<br><br>

                                <b>Stafylou</b><br>
                                Just next to the town of Skopelos you’ll find this beach, a pretty pebble stoned beach which you must visit before leaving the island.<br><br>

                                <b>Milias</b><br>
                                A sandy organized beach with green background and crystal clear sea waters with a view to the island of Dasia.<br><br>

                                <b>Panormos</b><br>
                                This is a beach which offers a lot of choices and will impress you. From this beach you have the perfect setting for a lovely sunset.<br><br>

                                <b>Limnonari</b><br>
                                This beach stands out for its waters and natural beauty.<br><br>

                                <b>Agnonta</b><br>
                                It is located in a scenic bay surrounded by pine trees. It has pebble stones and the water is deep and crystal clear.<br><br>

                                <b>Glyfoneri</b><br>
                                This beach is also called Agios Konstantinos and is one of the closest beaches to the town of Skopelos. The beach is organized, with clean waters and the beach is partly sandy – partly rocky.<br><br>
                        </div>

                        <div id="sights" class="tabcontent" style="display:none;">
                            <h4 style="width:100%; border-bottom:2px solid #f2ca25;">Agios Ioannis (Kastri)</h4>
                            <p>This famous little church hangs of a rock on the northern part of the island and has become famous from the movie “Mamma Mia”. When you climb the 100 steps you will feel the sea breeze and the view will be engraved in your mind forever. The church is plain & simple and in combination with the location it provides tranquility and peacefulness to all visitors.
                            </p>
                        </div>

                        <div id="journey" class="tabcontent" style="display:none;">
                            <p><img src="images/pegasus-skopelos-destination.jpg" style="width:100%; height:auto;" /></p>
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