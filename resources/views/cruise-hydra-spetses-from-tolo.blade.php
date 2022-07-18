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
                    HYDRA & SPETSES FROM TOLO

                </h1>
                <p style="text-align:right;">
                    Code: YDRASPETSES-GR
                </p>
                </hr>
                <div style="display:grid; grid-template-columns: 1fr 1fr 1fr;">
                    <p>One-day Cruise
                    </p>
                    <p><a href="#">ARGOSARONIKOS</a>, <a href="#">HYDRA</a>, <a href="#">SPETSES</a></p>
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
                            <img src="images/udra.jpg" class="d-block w-100" alt="Slide 1" width="450" height="450">
                        </div>
                        <div class="carousel-item">
                            <img src="images/ydra-cruise-taxi.jpg" class="d-block w-100" alt="Slide 2" width="450" height="450">
                        </div>
                        <div class="carousel-item">
                            <img src="images/fireworks-spetses-cruise-pegasus-820x500.jpg" class="d-block w-100" alt="Slide 3" width="450" height="450">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Spetses-1400-cruise.jpg" class="d-block w-100" alt="Slide 3" width="450" height="450">
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
                        <br><b>HYDRA & SPETSES FROM Tolo</b></br>One day cruise with Pegasus Cruises. Departure from Tolo for the picturesque island of Hydra with its unique singularity: the absence of cars on the island and the beautiful island of Spetses with its many trees, bays and beaches.

                        Escape from the everyday routine and enjoy the islands, the sun and the sea with Pegasus Cruises. You have the opportunity to spend 3 hours in Hydra and 2 hours in Spetses.


                        You will have plenty of time to have a swim, wonder around the stone streets of the islands and enjoy tasty greek food at the various tavernas. While on board you can enjoy the amenities that our ships provide and relax in both our open and closed lounges.</p>
                    </div>
                    <div>
                        <img src=" images/udra.jpg" style="width:100%; height:auto;" />
                    </div>
                </div>
                <div>
                    <h5 style="background:#ffb300; color:#fff;">TRANSPORTATION FROM NAFPLION TO TOLO & BACK FOR CLIENTS WHO WILL GO ON OUR CRUISE</h5>
                    <p>Cruise Price for adults: 38 €</br>
                        Cruise Price for children 5-12 years: 19 €</br>

                        Departure from Nafplion at 08.00 from 3 places:
                    <ul>
                        <li>Outside ZAFIRIS tourist office, SIDIRAS MERARXIAS street
                        </li>
                        <li>at the parking, opposite Filellinon square
                        </li>
                        <li>at the kiosk, at 3 Navarhon square, opposite the statue of Kapodistrias, just before the central bus station.
                        </li>

                    </ul>
                    Return: the bus will be waiting for the passengers at the port of Tolo, departure will be right after the return of the ship at the port</br>
                    <b>Cost of the ticket (bus):</b> 7€ / the transfer reservation is only valid if made by 21.00 on the evening prior to the cruise</br>
                    <a href="#">Here</a> access to open our price list</p>
                    </h4>
                    <hr>
                    <table>
                        <tbody>
                            <tr>
                                <td style="padding-right:20px;">
                                    <h4><strong>Departure/Return</strong></h4>
                                </td>
                                <td style="padding-right:20px;">Tolo</td>
                            </tr>
                            <tr>
                                <td style="padding-right:20px;">
                                    <h4><strong>Departure time</strong>
                                </td>
                                <td style="padding-right:20px;">8:45 (Boarding starts 8:00)</td>
                            </tr>
                            <tr>
                                <td style="padding-right:20px;">
                                    <h4><strong>Ship&rsquo;s facilities</strong></h4>
                                </td>
                                <td style="padding-right:20px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="padding-right:20px;">Snack bar</td>
                                                <td style="padding-right:20px;">Fun (music, dance)</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right:20px;">Air Condition in the closed lounges</td>
                                                <td style="padding-right:20px;">TV set</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right:20px;">Cell phone Network</td>
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
                                                <td style="padding-right:20px;">Food&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right:20px;">Hotel Transfer&nbsp;<em></em></td>
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
                            Food in Spetses – Food in Hydra</br>

                            See our choices for bathing in Hydra and Spetses</p>
                    </div>
                    <p> You will have plenty of time to have a swim, wonder around the stone streets of the islands and enjoy tasty greek food at the various tavernas. While on board you can enjoy the amenities that our ships provide and relax in both our open and closed lounges.</p>

                    <div style="background: #113f82; color:#fff; font-weight:bold;">
                        <p>ROUTE: Tolo – Hydra – Spetses – Tolo</p>

                    </div>
                    <h3><b>Itinerary</b></h3>
                    <div class="itinerary-structure" style="display:grid; grid-template-columns:1fr 10fr;">
                        <div class="itenerary-circles">
                            <p>8:00</p>
                        </div>
                        <div>
                            <h2><strong>Boarding at the port of Tolo</strong></h2>
                            <p>Be early on board because departures are accurate</p>
                        </div>
                        <div class="itenerary-circles">
                            <p>08:45</p>
                        </div>
                        <div>
                            <h2><strong>Departure for Hydra</strong></h2>
                            <p>Saying to Hydra we wander Argolida, the coasts of Porto Heli, the narrow of Spetses and Ermionida.</p>
                        </div>

                        <div class="itenerary-circles">
                            <p>11:30</p>
                        </div>
                        <div>
                            <h2><strong>Arrival in Hydra</strong></h2>
                            <p>3 hours free time on the island.</p>
                            <p>100 meters from the port, on your left as you disembark the ship, you can visit the <strong>museum of Hydra</strong> where you can view exhibits from the greek revolution and the <strong>Balkan wars</strong>.</p>
                            <p>You can visit the cathedral, a large monastery in the centre of the port dedicated to Holy Mary. You will easily spot it by its tall bell tower with the clock. The church museum and the town hall are also situated there.</p>
                            <p>You can wander around the <strong>cobblestone streets</strong>, admire the three story mansions of the captains of the <strong>greek revolution</strong>, enjoy a donkey back riding and take lovely photographs of the 2 bastions at the 2 edges of the port.</p>
                            <p>Near Pavlos Kountouriotis’s house you’ll see a bronze statue: a dolphin with a child on its back. This is to remind the movie filmed on the island in the 50s, “<strong>Boy on a dolphin</strong>”. Starring <strong>Sophia Loren</strong>.</p>
                        </div>
                        <div class="itenerary-circles">
                            <p>14:30</p>
                        </div>
                        <div>
                            <h2><strong>Departure from Hydra</strong></h2>
                            <p>Sailing towards Spetses we admire the wild nature. Not long after our departure we’ll see the island of Spetses, as well as Spetsopoula, the private island owned by Stavros Niarchos.</p>
                        </div>
                        <div class="itenerary-circles">
                            <p>15:30</p>
                        </div>
                        <div>
                            <h2><strong> Arrival in Spetses</strong></h2>
                            <p>2 hours free time on the island.</p>
                            <p>Overlooking the port you will see <strong>Dapia</strong>, the old blockhouse of the island, which hosts most of the cafeterias and is decorated by pebbles from the island’s beaches.</p>
                            <p>You can visit the <strong>Bouboulina museum</strong>, which is 100 meters from the port. Near the mansion you’ll see the neoclassical building of the benefactor of the island, Sotiris Anargyros.</p>
                            <p>At the Poseidon square you can see the first hotel on the island, built in 1897 and the statue of Bouboulina overlooking the sea. 200 meters from the port the sandy beach of Saint Mammas is located, opportunity for a cooling swim.</p>
                            <p>At 600 meters from the port you can visit the monastery of <strong>St Nicholas where the revolution’s flag</strong> was risen and that is where the greek movie “Tzeni Tzeni” was filmed and in particular the wedding scene. The old port, one kilometer away, hosts most of the mansions on the island as well as the old shipyards where many of the ships used in the greek revolution were built. Nearby you can see the big lighthouse and the statue of <strong>Kosmas Barbatsis</strong> who set on fire the Turkish flagship on S<strong>eptember 8th</strong>, 1822, date of the <strong>naval combat of Spetses</strong>.</p>
                            <p>You can visit the town on foot or by renting a horse-drawn carriage which can carry 4-5 persons. Their departure point is near the port.</p>
                        </div>
                        <div class="itenerary-circles">
                            <p>17:30</p>
                        </div>
                        <div>
                            <h2><strong>Departure from Spetses</strong></h2>
                            <p>Return to Tolo</p>
                        </div>
                        <div class="itenerary-circles">
                            <p>19:15</p>
                        </div>
                        <div>
                            <h2><strong>Arrival in Tolo</strong></h2>
                            <p>As the ship approaches the harbor, a unique opportunity for a panoramic photograph of Tolo, Romvi and Koronisi islands</p>
                        </div>

                    </div>
                    <p style="text-align: center;"><span style="font-size: 8pt;">Please note that the timings are approximate. All sailing times from the islands will be confirmed on the day, on the boat. Itinertary can be changed or cancelled without prior notice.</span></p>
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



</body>

</html>