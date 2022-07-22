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
    <header class="masthead" style="background: url(images/Alonissos.jpg); background-size:cover; width:100%;">
        <div class="container position-relative">

            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="dest-title">
                        <!-- Page heading-->
                        <h1 class="mb-5" style="color:#fff; font-size:55px; border-bottom:3px solid #2ED1FE; text-align:left;">DISCOVER<br>ALONISSOS</h1>
                        <p style="color:#fff; margin-top:-40px; text-align:left;">Through a one-day cruise</p>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <container>
        <!--test-->
        <!--Informational Entry Section-->
        <div style="margin-left: 50px; margin-right:50px; margin-top:50px; margin-bottom:50px;">
            <div class="row">
                <div class="col-8" style="margin-right:10px;">
                    <h1 style="color:#113f82; text-align:center">ALONISSOS</h1>
                    <p>
                        Alonnisos is truly a place of relaxation where all the sensations become one with nature. On this island you will definitely become a naturalist, you will crave to become a walker and enjoy your holidays surrounded by lovely nature. The south part of the island is full of beaches, picturesque bays with crystal clear water and areas full of pine trees. The central and northern part of the island is full of changes. The traditional settlement of Alonnisos, the rich net of walking paths, the peaceful environment… all create a unique combination.
                    </p>
                    <center> <button style="background-color:#0b3f82; color:#ffffff; padding:18px 25px 18px 25px; border-radius:5px;"><a href="cruise-hydra-spetses-from-tolo" style="color:#fff; text-decoration:none;"><i class="fa fa-book"></i> Cruise Reservation</a></button></center>
                </div>

                <div class="col" style="margin-left:10px;">
                    <img src="images/alonissos-xartis.jpg" style="border:solid 1px #000000; width:100%; height:auto;" />
                </div>
            </div>
        </div>
        <h3 class="fullhorizontal" style="margin-bottom:80px; background:url(/images/Alonnisos5.jpg); background-position:center center; background-repeat:no-repeat; width:100%; height:380px; position:relative; font-size:46px; font-weight:100; color:#fff; padding-top:175px; padding-left:61.5px; padding-right:61.5px; top:50%;">More about the island</h3>
        <div class="row">
            <div class="col-8">
                <div style="margin-left:50px; margin-right:50px; margin-bottom:85px;">
                    <!-- Tabs -->

                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'at-a-glance')" id="defaultOpen">Briefly</button>
                        <button class="tablinks" onclick="openCity(event, 'food')">Food</button>
                        <button class="tablinks" onclick="openCity(event, 'beaches')">Beaches</button>
                        <button class="tablinks" onclick="openCity(event, 'sights')">Sights</button>
                        <button class="tablinks" onclick="openCity(event, 'journey')">Journey</button>
                    </div>

                    <div id="at-a-glance" class="tabcontent">
                        <p>As we reach Alonnisos you will have the opportunity to enjoy your meal and afterwards enjoy the sights or the lovely beaches the island has to offer.
                        </p>
                    </div>

                    <div id="food" class="tabcontent" style="display:none;">
                        <p>
                            <b>Tasia</b><br>
                            A lovely place to sit outside in the garden and enjoy both environment and food.<br><br>

                            <b>Mavros Gatos (Black cat)</b><br>
                            Berger house where dishes are prepared by fine greek products.<br><br>

                            <b>Theodora’s Meze bar</b><br>
                            Traditional, made of stone and wood. Enjoy your meze with wine, tsipouro, beer or whatever your heart desires.<br><br>

                            <b>Ilios (sun)</b><br>
                            Amazing view to accompany your food and drinks.
                        </p>
                    </div>

                    <div id="beaches" class="tabcontent" style="display:none;">
                        <p>
                            <b>Lefkos Gialos</b><br>
                            White pebbles, olive trees and green hills, crystal clear sea water, all of these compose a magical scenery for a relaxed day out.<br><br>

                            <b>Agios Dimitrios</b><br>
                            This beach is located 14 kilometers from Patitiri and is easily reachable by car.<br><br>

                            <b>Xrisi Milia</b><br>
                            The only sandy beach of this island surrounded by a large pine tree forest and dark blue sea waters.<br><br>

                            <b>Rousoum Gialos</b><br>
                            One of the closest beaches to Patitiri, only 2 kilometers away, this beach is a unique bay ideal for families.<br><br>

                            <b>Votsi</b><br>
                            This small bay is one of the most picturesque beaches of the island.<br><br>

                            <b>Agios Petros</b><br>
                            The beach has both sand and small pebbles and in the afternoon the surrounding trees make natural shadows.<br><br>

                            <b>Gialia</b><br>
                            This graphic bay is located on the north part of the island, 10 minutes from the port.<br><br>

                            <b>Kokkinokastro</b><br>
                            One of the most famous and impressive beaches of the island with a lovely view to the red rock and the little island across from the shore.<br><br>

                            <b>Lakakia</b><br>
                            Blue-green waters in a ideal scenery, only 2 kilometers from the port.
                    </div>

                    <div id="sights" class="tabcontent" style="display:none;">
                        <h4 style="width:100%; border-bottom:2px solid #f2ca25;">Palio xorio (old village)</h4>
                        <p>The old village – Palio Xorio is the old capital of Alonissos. It is built on the top of a hill with an amazing 360⁰ view, 3 kilometers from Patitiri. As all other islands in the Aegean sea, Alonissos was threatened by pirates all through history, so the residents built a fort inside of which they built their houses.<br>
                            There aren’t enough information of when this fort was built, we know though that from 1735 onwards the town started expanding outside the fort’s walls until the earthquake of 1965 made all residents abandon the area and move to Patitiri. During the 1980s most of the houses were bought by foreigners and were renovated to be used as rentals.<br>
                            The characteristic of the village is how narrow it is. All the houses are built one next to the other. Visitors can distinguish 4 types of houses: two-storey houses with venetian influence, two-storey farm houses, houses which are influenced by the architecture in Pilion and a few neoclassical.<br>
                            The most important sights of the old Village are: the church of Christ, built in the 17th century, the folklore museum and the building that used to be the governor’s office during the Venetian domination. There are various gift shops and greek tavernas that serve their famous and popular kontosouvli, type of meat. The most important cultural event is the reenactment of the threshing which takes place in July and is accompanied by food, dancing and greek songs.
                        </p>
                        <h4 style="width:100%; border-bottom:2px solid #f2ca25;">Pirate – Historical Museum</h4>
                        <p>
                            In Patitiri, the main port of Alonnisos you’ll find the museum of Alonnisos which was founded in 2000 by Kostas & Angela Mavriki. It is hosted in a 4-storey stone building and it includes various historical heirlooms, weapons and artifacts used in the past by the Aegean pirates.<br><br>

                            Alonnisos, because of all the tiny islands that surround her, was an ideal spot for the pirates’ ambushes. Until 1910 Psathoura was the border for the greek nation and that was something very convenient for the pirates who could attack Thessaloniki during the Ottoman period and then find shelter right here. In 1538 the famous corsair of the Mediterranean and later Turkish admiral Barbarossa destroyed every village and settlement on the island and as a result of this, Alonnisos was uninhabited for almost 100 years. The piracy still existed even after the greek revolution of 1821 and the area was named Thieve’s nest or Demon’s island. The great greek admiral Miaoulis had to go to Alonnisos himself to confine the pirates’s action.<br><br>

                            At the pirate’s museum you will find a unique collection of items related to that period. The most original article is an anchor which was used to capture enemy ships.
                        </p>
                    </div>

                    <div id="journey" class="tabcontent" style="display:none;">
                        <p><img src="images/pegasus-alonnisos-destination.jpg" style="width:100%; height:auto;" /></p>
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
                            <img src="images/Alonissos.jpg" class="d-block w-100" alt="Slide 1" width="350" height="350">
                        </div>
                        <div class="carousel-item">
                            <img src="images/alonnisos-pegasus-1024x948.jpg" class="d-block w-100" alt="Slide 2" width="350" height="350">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Alonnisos-pegasus-cruises.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Alonnisos6-1024x680.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
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