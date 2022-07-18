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
    }

    .itenerary-circles:hover {
        background: none;
    }

    .itinerary-structure {
        display: grid;
        grid-template-columns: 1fr 10fr;
    }
</style>


<body>
    <!--Product Content-->
    <img src="/images/bg-cruises-top.jpg" style="background-repeat:no-repeat; background-size:cover; width:100%; height:140px;">
    <div class="container">
        <div class="tour" style="display:grid; grid-template-columns: 2fr 1fr;">
            <div class="tour-content" style="margin-top:50px; background-color:#F2F2F2; border-radius:8px; padding:15px;">
                <h1 style="font-weight:bold; font-size:24px;">
                    SKIATHOS & KOUKOUNARIES BEACH FROM GLYFA
                </h1>
                <p style="text-align:right;">
                    Code: LMJUYH
                </p>
                </hr>
                <div style="display:grid; grid-template-columns: 1fr 1fr 1fr">
                    <p>One day cruise
                    </p>
                    <p><a href="#">GREECE</a>, <a href="#">CRUISE</a>, <a href="#">SPORADES</a></p>
                    <p>(Social media icons)</p>
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

                <h3><b>Description</b></h3>
                <div style="display:grid; grid-template-columns: 1fr 1fr;">
                    <div>

                        <p>One-day cruise with PEGASUS CRUISES departing from Glyfa for the enchanting island of Skiathos and the lovely beach of Koukounaries.

                            During the cruise you’ll have the opportunity to see the island of Argyronisos with the traditional lighthouse, as well as the Artemisio where the naval combat took place between the greeks and the persians in 480 b.c. You’ll stop and swim at the most famous beach of Skiathos, Koukounaries and visit the venetian fortress that hosts the folklore museum and the house of Al. Papadiamantis, famous greek author.


                            There is plenty of time for a swim in Koukounaries and lunch at the beautiful tavernas in Skiathos. The rest of the time you can enjoy the comforts of our ships: the closed air conditioned lounges and our open air decks</p>
                        </p>
                    </div>
                    <div>
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
                    <div style="background:#ffb300; color:#fff; font-size:18px; font-weight:bold; text-align:center;">
                        <p>Choose the Tavern – Restaurant of your choice</br>
                            Food in Skiathos – Food in Koukounaries</br>

                            See our choices for bathing in Skiatho and Koukounaries</p>
                    </div>
                    <p> You will have plenty of time to swim in the beautiful beach of Koukounaries and eat in the beautiful taverns of Skiathos. For the rest of the day enjoy the comforts of our ships our indoor air-conditioned lounges and our deck.</p>

                    <div style="background: #113f82; color:#fff; font-weight:bold;">
                        <p>ROUTE: Glyfa – Skiathos – Koukounaries – Glyfa</p>
                        <img src="images/pegasus-glifa-koukounaries-skiathos.jpg" style="width:683px; height:377px;" />
                    </div>
                    <h3><b>Itinerary</b></h3>
                    <div class="itinerary-structure" style="display:grid; grid-template-columns:1fr 10fr;">
                        <div class="itenerary-circles">
                            <p>8:30</p>
                        </div>
                        <div>
                            <h2><strong>Boarding</strong></h2>
                            <p>Please be at the port on time since departures are right on time.</p>
                        </div>
                        <div class="itenerary-circles">
                            <p>09:05</p>
                        </div>
                        <div>
                            <h2><strong>Departure from Glyfa
                                </strong></h2>
                            <p>On our right we can see Agiokampos, from where North Evoia connects with Northern Greece. A little while later we’ll see Oreoi, a small village which hosts a big fishing fleet.
                                <br>On our left we’ll see Argyronisos island with its traditional lighthouse on the top of the hill. The villages Trikeri and Agia Kyriaki just at the south end of Pilion.
                                <br>We’ll pass by near Pefki, a village literally inside a pine forest, a tourist resort in the summer.
                                <br>On our right we’ll see the Artemisio where the naval combat took place between the greeks and the persians in 480 b.c.
                                <br>Before we reach Skiathos a party will take place on board with dancers in traditional costumes dancing greek and foreign dances.
                            </p>
                        </div>

                        <div class="itenerary-circles">
                            <p>11:15</p>
                        </div>
                        <div>
                            <h2><strong>Arrival in Koukounaries, the most famous beach in Skiathos
                                </strong></h2>
                            <p>A wonderful sandy beach with the trees reaching the edge of the beach. There sits “Skiathos Palace”, the largest hotel in <b>Skiathos</b>. Behind the first lines of trees ther is a laggon with ducks and swans.</p>
                        </div>
                        <div class="itenerary-circles">
                            <p>13:45</p>
                        </div>
                        <div>
                            <h2><strong>Departure sailing near the island’s beaches, going towards Skiathos, the town</strong></h2>
                            <p>We’ll see the islands of Small and Large Tsougria and in the background the island of Skopelos.

                            </p>
                        </div>
                        <div class="itenerary-circles">
                            <p>14:15</p>
                        </div>
                        <div>
                            <h2><strong> Arrival at the town of Skiathos</strong></h2>
                            <p>Free time to visit Mpourtzi, which is connected to the town with a bridge, the old venetian fortress which hosts the folklore museum, the house of the greek author Papadiamantis, the island’s narrow graphic alleys and the smallest airport of Europe – you can feel the heat form the airplanes’s engines as they take off.</p>
                        </div>
                        <div class="itenerary-circles">
                            <p>16:45</p>
                        </div>
                        <div>
                            <h2><strong>Departure</strong></h2>
                            <p>The party begins again on board with dances and treats.

                            </p>
                        </div>
                        <div class="itenerary-circles">
                            <p>19:00</p>
                        </div>
                        <div>
                            <h2><strong>Arrival in Glyfa
                                </strong></h2>
                            <p>A journey full of happy memories comes to an end.

                            </p>
                        </div>

                    </div>
                    <p style="text-align: center;"><span style="font-size: 8pt;">Please note that the timings are approximate. All sailing times from the islands will be confirmed on the day, on the boat. Itinerary can be changed or cancelled without prior notice.

                        </span></p>
                    <!-- CONTINUE FROM HERE -->
                    <h3><b>HOW TO REACH US</b></h3>
                    <p>From Athens -> Nafplion -> Tolo</p>
                    <p><b>By car:</b> Go along expressway Athens – Corinth (E94) or ΑΤΤΙΚΙ ODOS, continue on expressway Corinth-Tripoli-Kalamata (E65). Leave the expressway 7 klms after the tolls at Spathovouni, towards Mycenae, Nafplio. Continue on the district road Corinth – Argos for a few klms and then turn left on the new road towards Nafplion. Go straight ahead for a few klms and then you’ll see a sign which will tell you to turn left towards Epidavros. Continue on this road, signs will lead you to Tolo without having to go through Nafplion.</p>
                    <p></b>By bus:</b>(www.ktel.org) You can get a bus from Athens straight to Nafplion at the Interurban Bus Station on Kifisos street. Departures every hour from early in the morning until late in the evening. When you arrive in Nafplion get the local bus for Tolo (almost every hour from morning until the evening)
                        </br> Contact bus stations: in Nafplion: 2752027323 – in Athens: 2105124910</p>
                    <p><b>By taxi from Nafplion:</b> approx. €18</p>
                    <p><b>From Patra</b></p>
                    <p><b>By car:</b> Go along the expressway Patras – Corinth, then follow the expressway Corinth-Tripoli-Kalamata (E65). ). Leave the expressway 7 klms after the tolls at Spathovouni, towards Mycenae, Nafplio. Continue on the district road Corinth – Argos for a few klms and then turn left on the new road towards Nafplion. Go straight ahead for a few klms and then you’ll see a sign which will tell you to turn left towards Epidavros. Continue on this road, signs will lead you to Tolo without having to go through Nafplion.
                        <br>Contact bus stations: in Nafplion: 2752027323 – in Athens: 2105124910 – in Patras: 2610623886 – Corinth Canal: 2741048444
                    </p>
                    <p><b>By bus:</b> (www.ktel.org) You can get a bus at the Interurban Bus Station in Patras to the Corinth Canal. Switch buses, get the Nafplion one (every hour from early in the morning until the evening). When you arrive in Nafplion get the local bus for Tolo (almost every hour from morning until the evening)
                        <br>Contact bus stations: in Nafplion: 2752027323 – in Athens: 2105124910 – in Patras: 2610623886 – Corinth Canal: 2741048444
                    </p>
                    <p><b>By taxi from Nafplion:</b> approx. €18</p>
                    <h3><b>MAP</b></h3>
                    <img src="images/pegasus-tolo-ydra-spetses-2.jpg" style="width:513px; height:284px;">
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