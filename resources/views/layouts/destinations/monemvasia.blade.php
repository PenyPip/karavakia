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
    <header class="masthead" style="background: url(images/monemvasia-poli.jpg); background-size:cover; width:100%;">
        <div class="container position-relative">

            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="dest-title">
                        <!-- Page heading-->
                        <h1 class="mb-5" style="color:#fff; font-size:55px; border-bottom:3px solid #2ED1FE; text-align:left;">DISCOVER<br>MONEMVASIA</h1>
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
                <h1 style="color:#113f82; text-align:center">MONEMVASIA</h1>
                <p>
                    Monemvasia is carved into the rock like a sculpture. It’s also know as “Givraltar of the East” and as the greek poet’s Giannis Ritsos’ “rock ship”. Ritsos was born here. Monemvasia invites you into a journey through time, to wonder through the uniquely preserved medieval settlement with its arched alleys, the churches and the mansions. Swim in the dreamy sea, enjoy the beaches and the modern facilities, and don’t forget to taste the local wine.
                </p>
                <center> <button style="background-color:#0b3f82; color:#ffffff; padding:18px 25px 18px 25px; border-radius:5px;"><a href="cruise-hydra-spetses-from-tolo" style="color:#fff; text-decoration:none;"><i class="fa fa-book"></i> Cruise Reservation</a></button></center>
            </div>
            <div style="margin-left:10px;">
                <img src="images/monemvasia-maps.jpg" style="border:solid 1px #000000; width:100%; height:auto;" />
            </div>
        </div>
        <h3 style="margin-bottom:80px; background:url(/images/monemvasia-nea-poli.jpg); background-position:center center; background-repeat:no-repeat; width:100%; height:380px; position:relative; font-size:46px; font-weight:100; color:#fff; padding-top:175px; padding-left:61.5px; padding-right:61.5px; top:50%;">More about the island</h3>

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
                    <p>As we reach Monemvasia you’ll have the opportunity to admire its beauty.<br><br>

                        You can enjoy a nice breakfast or lunch at one of the traditional tavernas or go for a refreshing swim.<br><br>

                        We recommend you visit the Castle of Monemvasia.
                    </p>
                </div>

                <div id="food" class="tabcontent" style="display:none;">
                    <p>
                        Castle of Monemvasia<br>
                        <b>Matoula</b><br>
                        This is the first choice with a tradition that goes back to 1950 and serves greek traditional dishes made with pure local products.<br><br>

                        Castle of Monemvasia<br>
                        <b>Kanoni</b><br>
                        Ideal choice for tasty traditional dishes.<br><br>

                        New Monemvasia<br>
                        <b>Matthaios</b><br>
                        An all day hot spot where you can enjoy your coffee, ouzo and all meals of the day.<br><br>

                        Bridge<br>
                        <b>To Votsalo</b><br>
                        In front of the sea with a view to the castle.


                    </p>
                </div>

                <div id="beaches" class="tabcontent" style="display:none;">
                    <p>
                        <b> Vlyxada</b><br>
                        Clean waters that blend with the green mountains and the red coloured rocks that are all around.<br><br>

                        <b>Portelo</b><br>
                        This beach offers a unique view and is an ideal solution to those who don’t want to distance themselves.<br><br>

                        <b>Megali Ammos (Big Sand)</b><br>
                        This is the largest beach in Kyparissi which combines almost everything. It’s recognized for its white pebbles and clear waters.<br><br>

                        <b>Ammitsa</b><br>
                        This is a beautiful sandy beach with shallow waters which is near Neapoli.<br><br>

                        <b>Neratzionas</b><br>
                        Another beautiful beach in Vatika which stands out for its golden sand and shallow turquoise waters.<br><br>

                        <b>Pori</b><br>
                        One of the largest and most impressive beaches in the area since it offers visitors a great view of the castle of Monemvasia, as well as the old Monemvasia.
                </div>

                <div id="sights" class="tabcontent" style="display:none;">
                    <h4 style="width:100%; border-bottom:2px solid #f2ca25;">Castle of Monemvasia</h4>
                    <p>From the moment you arrive outside the impressive gate of the castle, which is only minutes away from the city of outer Monemvasia, you will enter in a world of magic.<br><br>

                        The main cobbled street of the castle will show you the way to discover every aspect of this lively and well preserved castle which is surrounded by medieval walls and is located on a big rock making it invisible from one side to conquerors over the years.<br><br>

                        Monemvasia’s name means One Entrance which implies the one and only entrance there was and still is, and made the castle an unconquerable fort during times of war.<br>
                        As you enter the castle, a small alley to the left leads you to Giannis Ritsos’s house, a greek famous poet who was born here and who named Monemvasia “rock ship”, a name that only an artist could conceptualize.
                    </p>
                    <h4 style="width:100%; border-bottom:2px solid #f2ca25;">Agia Sophia (Saint Sophia’s church)</h4>
                    <p>The impressive byzantine church of Holy Mary which was renamed to Agia Sophia after the revolution of 1821 is built on top of the castle of Monemvasia, at the edge of a rock, right above the sea.<br><br>

                        Tradition connects the church with the emperor Andronikos B’ Palaiologos, but sources indicate that the church is actually much older. The church continued to operate during the Venetian Period as Madonna del Castello OR Nostra Donna in Castello for the catholic’s needs. During the Ottoman period it was converted into a Muslim mosque with the extension of a mihrab which is still preserved on the south wall. During the second Venetian period the church was dedicated to Madonna del Carmine. At this period another extension was added. Then, the church operated again as a Muslim mosque during 1715-1821 and returned to its Christian mass after the liberation of the city and was dedicated to the wisdom of God and was considered the very image of Saint Sophia in Constantinople.
                    </p>
                </div>

                <div id="journey" class="tabcontent" style="display:none;">
                    <p><img src="images/pegasus-monemvasia-destination.jpg" style="width:100%; height:auto;" /></p>
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
                        <img src="images/monemvasia-pegasus.jpg" class="d-block w-100" alt="Slide 1" width="350" height="350">
                    </div>
                    <div class="carousel-item">
                        <img src="images/monemvasia.jpg" class="d-block w-100" alt="Slide 2" width="350" height="350">
                    </div>
                    <div class="carousel-item">
                        <img src="images/monemvasia1-1024x1024.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
                    </div>
                    <div class="carousel-item">
                        <img src="images/monemvasia2-1024x1024.jpg" class="d-block w-100" alt="Slide 3" width="350" height="350">
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