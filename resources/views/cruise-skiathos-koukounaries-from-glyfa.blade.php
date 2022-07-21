<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    /* Custom style to prevent carousel from being distorted 
   if for some reason image doesn't load */
    .carousel-item {
        min-height: 280px;
    }

    .itenerary-circles {
        font-weight: 22px;
        border: 2px dashed #26bdf7;
        background: #26bdf7;
        border-radius: 100%;
        width: 70px;
        height: 70px;
        padding-top: 17.5px;
        text-align: center;
        margin-right: 20px;
        color: #fff;
    }

    .itenerary-circles:hover {
        background: none;
        color: #26bdf7;
    }
</style>


<body>
    <!--Product Content-->
    <img src="/images/bg-cruises-top.jpg" style="background-repeat:no-repeat; background-size:cover; width:100%; height:140px;">
    <div class="container">
        <div class="row">
            <div class="col-8" style="margin-top:50px; background-color:#F2F2F2; border-radius:8px; padding:15px;">
                <h1 style="font-weight:bold; font-size:24px;">
                    SKIATHOS & KOUKOUNARIES BEACH FROM GLYFA
                </h1>
                <p style="text-align:right; margin-top:-40px;">
                    Code: LMJUYH
                </p>
                </hr>
                <div class="row">
                    <div class="col" style="text-align:left;">
                        <p>One day cruise
                        </p>
                    </div>
                    <div class="col" style="text-align:center;">
                        <p><a href="#">GREECE</a>, <a href="#">CRUISE</a>, <a href="#">SPORADES</a></p>
                    </div>
                    <div class="col" style="text-align:right;">
                        <p><a href="https://www.facebook.com/PegasusCruises/" style="font-size:20px;"><i class="fa fa-facebook" style="padding-right:10px;"></i></a><a href="https://www.tripadvisor.com.gr/Attraction_Review-g1007321-d11150092-Reviews-Pegasus_Cruises-Tolon_Argolis_Region_Peloponnese.html" style="font-size:20px;"><i class="fa fa-tripadvisor"></i></a></p>
                    </div>
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
                            <img src="images/skiathos-krouaziera1-1.jpg" class="d-block w-100" alt="Slide 1" width="450" height="450">
                        </div>
                        <div class="carousel-item">
                            <img src="images/skiathos-krouaziera2.jpg" class="d-block w-100" alt="Slide 2" width="450" height="450">
                        </div>
                        <div class="carousel-item">
                            <img src="images/skiathos-krouaziera3.jpg" class="d-block w-100" alt="Slide 3" width="450" height="450">
                        </div>
                        <div class="carousel-item">
                            <img src="images/skiathos-krouaziera4.jpg" class="d-block w-100" alt="Slide 3" width="450" height="450">
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

                <h3 style="margin-top:20px;"><b>Description</b></h3>
                <div class="row">
                    <div class="col" style="margin-right:20px;">

                        <p>One-day cruise with PEGASUS CRUISES departing from Glyfa for the enchanting island of Skiathos and the lovely beach of Koukounaries.

                            During the cruise you’ll have the opportunity to see the island of Argyronisos with the traditional lighthouse, as well as the Artemisio where the naval combat took place between the greeks and the persians in 480 b.c. You’ll stop and swim at the most famous beach of Skiathos, Koukounaries and visit the venetian fortress that hosts the folklore museum and the house of Al. Papadiamantis, famous greek author.


                            There is plenty of time for a swim in Koukounaries and lunch at the beautiful tavernas in Skiathos. The rest of the time you can enjoy the comforts of our ships: the closed air conditioned lounges and our open air decks</p>
                        </p>
                    </div>
                    <div class="col">
                        <img src="images/skiathos-krouaziera1-1.jpg" style="width:100%; height:auto;" />
                    </div>
                </div>
                <p>There is plenty of time for a swim in Koukounaries and lunch at the beautiful tavernas in Skiathos. The rest of the time you can enjoy the comforts of our ships: the closed air conditioned lounges and our open air decks.</p>
                <iframe width="813" height="515" src="https://www.youtube.com/embed/JQcDgkawP1A">
                </iframe>
                <div>
                    <hr>
                    <table>
                        <tbody>
                            <tr>
                                <td style="padding-right:20px;">
                                    <h4><strong>Departure/Return</strong></h4>
                                </td>
                                <td style="padding-right:20px;">Glyfa</td>
                            </tr>
                            <tr>
                                <td style="padding-right:20px;">
                                    <h4><strong>Departure time</strong>
                                </td>
                                <td style="padding-right:20px;">9:00 (Boarding starts 8:30)</td>
                            </tr>
                            <tr>
                                <td style="padding-right:20px;">
                                    <h4><strong>Ship&rsquo;s facilities</strong></h4>
                                </td>
                                <td style="padding-right:20px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="padding-right:20px;"><i class="fa fa-check" style="color:green; padding-right:5px;"></i>Snack bar</td>
                                                <td style="padding-right:20px;"><i class="fa fa-check" style="color:green; padding-right:5px;"></i>Fun (music, dance)</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right:20px;"><i class="fa fa-check" style="color:green; padding-right:5px;"></i>Air Condition in the closed lounges</td>
                                                <td style="padding-right:20px;"><i class="fa fa-check" style="color:green; padding-right:5px;"></i>TV set</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right:20px;"><i class="fa fa-check" style="color:green; padding-right:5px;"></i>Cell phone Network</td>
                                                <td style="padding-right:20px;"><br></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-right:20px;">
                                    <h4><strong>Not included</strong></h4>
                                </td>
                                <td style="padding-right:20px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="padding-right:20px;">Food&nbsp;<i class="fa fa-times" style="color:red; padding-left:5px;"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right:20px;">Hotel Transfer&nbsp;<i class="fa fa-times" style="color:red; padding-right:5px;"></i><em></em></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div style="background:#ffb300; color:#fff; font-size:18px; font-weight:bold; text-align:center; border-radius:5px;">
                        <p>Choose the Tavern – Restaurant of your choice</br>
                            Food in Skiathos – Food in Koukounaries</br>

                            See our choices for bathing in Skiatho and Koukounaries</p>
                    </div>
                    <p> You will have plenty of time to swim in the beautiful beach of Koukounaries and eat in the beautiful taverns of Skiathos. For the rest of the day enjoy the comforts of our ships our indoor air-conditioned lounges and our deck.</p>

                    <div style="background: #113f82; color:#fff; font-weight:bold; border-radius:5px;">
                        <p style="padding-left:10px; padding-right:10px; padding-top:5px; padding-bottom:5px;">ROUTE: Glyfa – Skiathos – Koukounaries – Glyfa</p>
                    </div>
                    <img src="images/pegasus-glifa-koukounaries-skiathos.jpg" style="width:100%; height:auto;" />
                    <h3><b>Itinerary</b></h3>
                    <div class="row">
                        <div class="col-1" style="margin-right:16px;">
                            <div class="itenerary-circles">
                                <p>8:30</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div>
                                <h2 style="font-size:20px;"><strong>Boarding</strong></h2>
                                <p>Please be at the port on time since departures are right on time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="margin-right:16px;">
                            <div class="itenerary-circles">
                                <p>09:05</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div>
                                <h2 style="font-size:20px;"><strong>Departure from Glyfa
                                    </strong></h2>
                                <p>On our right we can see Agiokampos, from where North Evoia connects with Northern Greece. A little while later we’ll see Oreoi, a small village which hosts a big fishing fleet.
                                    <br>On our left we’ll see Argyronisos island with its traditional lighthouse on the top of the hill. The villages Trikeri and Agia Kyriaki just at the south end of Pilion.
                                    <br>We’ll pass by near Pefki, a village literally inside a pine forest, a tourist resort in the summer.
                                    <br>On our right we’ll see the Artemisio where the naval combat took place between the greeks and the persians in 480 b.c.
                                    <br>Before we reach Skiathos a party will take place on board with dancers in traditional costumes dancing greek and foreign dances.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1" style="margin-right:16px;">
                            <div class="itenerary-circles">
                                <p>11:15</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div>
                                <h2 style="font-size:20px;"><strong>Arrival in Koukounaries, the most famous beach in Skiathos
                                    </strong></h2>
                                <p>A wonderful sandy beach with the trees reaching the edge of the beach. There sits “Skiathos Palace”, the largest hotel in <b>Skiathos</b>. Behind the first lines of trees ther is a laggon with ducks and swans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="margin-right:16px;">
                            <div class="itenerary-circles">
                                <p>13:45</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div>
                                <h2 style="font-size:20px;"><strong>Departure sailing near the island’s beaches, going towards Skiathos, the town</strong></h2>
                                <p>We’ll see the islands of Small and Large Tsougria and in the background the island of Skopelos.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="margin-right:16px;">
                            <div class="itenerary-circles">
                                <p>14:15</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div>
                                <h2 style="font-size:20px;"><strong> Arrival at the town of Skiathos</strong></h2>
                                <p>Free time to visit Mpourtzi, which is connected to the town with a bridge, the old venetian fortress which hosts the folklore museum, the house of the greek author Papadiamantis, the island’s narrow graphic alleys and the smallest airport of Europe – you can feel the heat form the airplanes’s engines as they take off.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="margin-right:16px;">
                            <div class="itenerary-circles">
                                <p>16:45</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div>
                                <h2 style="font-size:20px;"><strong>Departure</strong></h2>
                                <p>The party begins again on board with dances and treats.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="margin-right:16px;">
                            <div class="itenerary-circles">
                                <p>19:00</p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div>
                                <h2 style="font-size:20px;"><strong>Arrival in Glyfa
                                    </strong></h2>
                                <p>A journey full of happy memories comes to an end.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <p style="text-align: center;"><span style="font-size: 8pt;">Please note that the timings are approximate. All sailing times from the islands will be confirmed on the day, on the boat. Itinerary can be changed or cancelled without prior notice.

                    </span></p>

                <h3><b>HOW TO REACH US</b></h3>
                <p><b>From Athens</b></p>
                <p>Bus: Take the bus at KTEL FTHIOTIDAS to Lamia. (2.5 hours journey) There you change for KTEL STYLIDAS and you reach your destination, glyfa.</p>
                <p>Train: You get the train at Larissis Station in Athens towards Thessaloniki. You get off at Lainokladi station, near Lamia and from there you continue using the bus from KTEL Lamias to KTEL STYLIDAS to reach your destination, Glyfa.</p>
                <p>Car: You take the highway Athens-Thessaloniki (distance 270 klms) and after passing by the tolls in Pelasgia there is a sign right towards Glyfa. Estimated travelling time 2,5 hours.</p>
                <p>Ferry boat: If you want to come through the island of Evoia, you can leave the highway near Chalkida and continue towards northern Evoia OR at Arkitsa you can cross over by ferry boat to Edipsos and then continue using the ferry from Agiokampos to Glyfa.</p>
                <p>If you wish to come through Evoia there are ferry boats that connect Fthiotida with Evoia, Arkitsa and Glyfa. There are 8 itineraries daily from Agiokampos to Glyfa and 12 from Arkitsa to Edipsos.</p>
                <br>
                <p><b>From Thessaloniki</b></p>
                <p>Bus: there are several itineraries daily towards Athens. You’ll get off at the tolls of Pelasgia and wait for the connection of KTEL STYLIDAS to Glyfa.</p>
                <p><b>From Lamia</b></p>
                <p>Bus: there is a bus 2 times a day for Glyfa with KTEL STYLIDAS.</p>
                <p>Car: The distance is 59 klms and the average estimated travelling time is 30 minutes.</p>
                <h3><b>MAP</b></h3>
                <img src="images/pegasus-glifa-koukounaries-skiathos.jpg" style="width:100%; height:auto;">
            </div>
            <!--
                    <div class=" tour-booking-panel" margin-top: -25px>
                        <p style="padding:10px; background-color: #FDB200; height: 50px; width: 280px; text-align: center; margin-top: -25px; color: #fff; font-size: 20px;">Price: <font style="font-weight:bold;">28€</font>
                        </p>
                    </div>
                    -->
        </div>

    </div>

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