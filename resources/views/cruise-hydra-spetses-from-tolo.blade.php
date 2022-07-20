<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

@include('layouts.navbar')
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

    .itinerary-structure {
        display: grid;
        grid-template-columns: 1fr 10fr;
    }
</style>

<body>


    <!--Product Content-->
    <img src="/images/bg-cruises-top.jpg" style="background-repeat:no-repeat; background-size:cover; width:100%; height:140px;">
    <div class="row ">
        <div class="col-8 ml-2">

            <div class="tour-content" style="margin-top:50px; background-color:#F2F2F2; border-radius:8px; padding:15px; margin-left:100px;">
                <h1 style="font-weight:bold; font-size:24px;">
                    HYDRA & SPETSES FROM TOLO

                </h1>
                <p style="text-align:right; margin-top:-40px;">
                    Code: YDRASPETSES-GR
                </p>
                </hr>
                <div style="display:grid; grid-template-columns: 1fr 1fr 1fr;">
                    <div style="text-align:left;">
                        <p>One-day Cruise
                        </p>
                    </div>
                    <div style="text-align:center;">
                        <p><a href="#">ARGOSARONIKOS</a>, <a href="/hydra">HYDRA</a>, <a href="/spetses">SPETSES</a>
                        </p>
                    </div>
                    <div style="text-align:right;"><a href="https://www.facebook.com/PegasusCruises/" style="font-size:20px;"><i class="fa fa-facebook" style="padding-right:10px;"></i></a><a href="https://www.tripadvisor.com.gr/Attraction_Review-g1007321-d11150092-Reviews-Pegasus_Cruises-Tolon_Argolis_Region_Peloponnese.html" style="font-size:20px;"><i class="fa fa-tripadvisor"></i></a>
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
                <h3 style="margin-top:20px;"><b>Description</b></h3>
                <div style="display:grid; grid-template-columns: 1fr 1fr;">

                    <div style="margin-right:20px;">
                        <br><b>HYDRA & SPETSES FROM Tolo</b></br>One day cruise with Pegasus Cruises. Departure from Tolo for the picturesque island of Hydra with its unique singularity: the absence of cars on the island and the beautiful island of Spetses with its many trees, bays and beaches.

                        Escape from the everyday routine and enjoy the islands, the sun and the sea with Pegasus Cruises. You have the opportunity to spend 3 hours in Hydra and 2 hours in Spetses.


                        You will have plenty of time to have a swim, wonder around the stone streets of the islands and enjoy tasty greek food at the various tavernas. While on board you can enjoy the amenities that our ships provide and relax in both our open and closed lounges.</p>
                    </div>
                    <div>
                        <img src=" images/udra.jpg" style="width:100%; height:auto;" />
                    </div>
                </div>
                <div>
                    <h5 style="background:#ffb300; color:#fff; border-radius:5px; padding: 5px 10px">TRANSPORTATION FROM NAFPLION TO TOLO & BACK FOR CLIENTS WHO WILL GO ON OUR CRUISE</h5>
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
                    <div style="background:#ffb300; color:#fff; font-size:18px; font-weight:bold; text-align:center; border-radius:5px;">
                        <p>Choose the Tavern – Restaurant of your choice</br>
                            Food in Spetses – Food in Hydra</br>

                            See our choices for bathing in Hydra and Spetses</p>
                    </div>
                    <p> You will have plenty of time to have a swim, wonder around the stone streets of the islands and enjoy tasty greek food at the various tavernas. While on board you can enjoy the amenities that our ships provide and relax in both our open and closed lounges.</p>

                    <div style="background: #113f82; color:#fff; font-weight:bold; padding-top: 5px; padding-bottom:5px; padding-left:5px; padding-right:5px; border-radius:5px;">
                        <p style="margin-bottom:0;">ROUTE: Tolo – Hydra – Spetses – Tolo</p>
                    </div>
                    <h3 style="margin-top:15px;"><b>Itinerary</b></h3>
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
                    <img src="images/pegasus-tolo-ydra-spetses-2.jpg" style="width:100%; height:auto;">
                </div>
                <!--
                    <div class=" tour-booking-panel" margin-top: -25px>
                        <p style="padding:10px; background-color: #FDB200; height: 50px; width: 280px; text-align: center; margin-top: -25px; color: #fff; font-size: 20px;">Price: <font style="font-weight:bold;">28€</font>
                        </p>
                    </div>
                    -->
            </div>

        </div>

        <!-- component 2 -->
        <div class="col-4 ml-2">
            <header class="sidebox  ">

                <div class="container mt-1 ">
                    <div class="d-flex justify-content-center">
                        <button class="btn-lg btn-light" type="button" disabled>
                            <select class="selectpicker form-control-lg border-2 px-4 py-4 rounded shadow">
                                <option hidden value="placeholder">Επιλογή ημερήσιας διαδρομής</option>


                            </select>
                        </button>
                    </div>
                    <!-- AUTO COMPLETE DROPDOWN -->
                    <!-- <select class="selectpicker form-control-lg border-2 px-4 py-4 rounded shadow">
                                        <option hidden value="placeholder">Επιλογή ημερήσιας διαδρομής</option>


                                    </select> -->

                    <div class="d-grid gap-2 mb-2">
                        <button class="btn-lg btn-light" type="button" disabled><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Επιλέξτε ημερομηνία"></button>

                    </div>
                    <div class="card border-0 mb-2">
                        <div class="card-body p-0">
                            <div class="d-grid gap-2">

                                <button class="btn-lg btn-light" type="button" onClick="passDet()"><i class="fa fa-search"></i> Αναζήτηση</button>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- total cost card -->

                <div class="card mt-4">
                    <h2 class="text-center mb-4">Υπολογισμός Ταξιδίου</h2>

                    <div class="paddingDiv">



                        <div class="card-body">





                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex w-100 justify-content-between">
                                    <p class="mt-1">Εισιτήρια ενηλίκων</p>
                                    <div class="row">
                                        <button type="button" class="btn btn-custom btn-circle btn-sm px-2" onClick="onClickAdd()"><i class="fa fa-plus"></i> </button>
                                        <button class="btn btn-custom btn-circle btn-sm"><a id="clicks"><span id="clicks"></span></a></button>
                                        <button type="button" class="btn btn-custom btn-circle btn-sm px-2" onClick="onClickRemove()"><i class="fa fa-minus"></i> </button>

                                    </div><button type="button" class="btn btn-success btn-sm">50$</button>
                                </li>
                                <li class="list-group-item d-flex w-100 justify-content-between">
                                    <p class="mt-1">Εισιτήρια ανηλίκων</p>
                                    <div class="row">
                                        <button type="button" class="btn btn-custom btn-circle btn-sm px-2" onClick="onClickAdd2()"><i class="fa fa-plus"></i> </button>
                                        <button class="btn btn-custom btn-circle btn-sm"><a id="clicks2">0</a></button>
                                        <button type="button" class="btn btn-custom btn-circle btn-sm px-2" onClick="onClickRemove2()"><i class="fa fa-minus"></i> </button>

                                    </div><button type="button" class="btn btn-success btn-sm">50$</button>
                                </li>
                                <li class="list-group-item d-flex w-100 justify-content-between">
                                    <p class="mt-1">Εισιτήρια φοιτητών</p>
                                    <div class="row">
                                        <button type="button" class="btn btn-custom btn-circle btn-sm px-2" onClick="onClickAdd3()"><i class="fa fa-plus"></i> </button>
                                        <button class="btn btn-custom btn-circle btn-sm"><a id="clicks3">0</a></button>
                                        <button type="button" class="btn btn-custom btn-circle btn-sm px-2" onClick="onClickRemove3()"><i class="fa fa-minus"></i> </button>

                                    </div><button type="button" class="btn btn-success btn-sm">50$</button>
                                </li>
                            </ul>
                            <a href="/booking-payment" class="list-group-item list-group-item-action flex-column align-items-start mt-4 ">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mt-2">Συνολικό κόστος:</h5>
                                    <div>
                                        <button type="button" class="btn btn-success btn-sm">105$</button>
                                        <!-- <a href="/booking-payment" class="btn btn-danger btn-sm">Πληρωμή</a> -->

                                        <button type="button" class="btn btn-danger btn-sm">Πληρωμή</button>
                                    </div>


                                </div>
                                <div class="d-flex w-100 justify-content-between">

                                    <p class="mb-1"></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- display card passengers -->
                <div class=" ml-4 d-none" id="displayCardLeader">
                    <div class="accordion" id="accordionExampleLeader">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="headingOne">
                                <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneLeader" aria-expanded="true" aria-controls="collapseOneLeader">
                                    <h3 class="text-center">Επιβάτης 1(Leader) </h3>
                                </button>
                            </h2>
                            <div id="collapseOneLeader" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExampleLeader">
                                <div class="accordion-body">
                                    <div class="card card-body  ">


                                        <fieldset>
                                            <div class="form-group has-error mb-4">
                                                <input class="form-control input-lg" placeholder="Eπώνυμο" name="lastname" value="" type="text" required>
                                            </div>
                                            <div class="form-group has-success mb-4">
                                                <input class="form-control input-lg" placeholder="'Ονομα" name="name" value="" type="text" required>
                                            </div>

                                            <div class="form-group mb-4">
                                                <select class="form-control input-lg">
                                                    <option selected="">--Εθνικότητα</option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
                                                    <option value="american">American</option>
                                                    <option value="andorran">Andorran</option>
                                                    <option value="angolan">Angolan</option>
                                                    <option value="antiguans">Antiguans</option>
                                                    <option value="argentinean">Argentinean</option>
                                                    <option value="armenian">Armenian</option>
                                                    <option value="australian">Australian</option>
                                                    <option value="austrian">Austrian</option>
                                                    <option value="azerbaijani">Azerbaijani</option>
                                                    <option value="bahamian">Bahamian</option>
                                                    <option value="bahraini">Bahraini</option>
                                                    <option value="bangladeshi">Bangladeshi</option>
                                                    <option value="barbadian">Barbadian</option>
                                                </select>
                                            </div>

                                            <div class="form-group has-success mb-4">
                                                <p class="form-control  datepicker " placeholder="'Ονομα" name="name" value="" type="text" required>

                                                    <button class="btn btn-transparent" type="button"><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Ημερομηνία γέννησης"></button>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- dis card -->
                <div class=" ml-4 d-none" id="displayCard">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="headingOne">
                                <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h3 class="text-center">Επιβάτης 2 </h3>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card card-body  ">


                                        <fieldset>
                                            <div class="form-group has-error mb-4">
                                                <input class="form-control input-lg" placeholder="Eπώνυμο" name="lastname" value="" type="text" required>
                                            </div>
                                            <div class="form-group has-success mb-4">
                                                <input class="form-control input-lg" placeholder="'Ονομα" name="name" value="" type="text" required>
                                            </div>

                                            <div class="form-group mb-4">
                                                <select class="form-control input-lg">
                                                    <option selected="">--Εθνικότητα</option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
                                                    <option value="american">American</option>
                                                    <option value="andorran">Andorran</option>
                                                    <option value="angolan">Angolan</option>
                                                    <option value="antiguans">Antiguans</option>
                                                    <option value="argentinean">Argentinean</option>
                                                    <option value="armenian">Armenian</option>
                                                    <option value="australian">Australian</option>
                                                    <option value="austrian">Austrian</option>
                                                    <option value="azerbaijani">Azerbaijani</option>
                                                    <option value="bahamian">Bahamian</option>
                                                    <option value="bahraini">Bahraini</option>
                                                    <option value="bangladeshi">Bangladeshi</option>
                                                    <option value="barbadian">Barbadian</option>
                                                </select>
                                            </div>

                                            <div class="form-group has-success mb-4">
                                                <p class="form-control  datepicker " placeholder="'Ονομα" name="name" value="" type="text" required>

                                                    <button class="btn btn-transparent" type="button"><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Ημερομηνία γέννησης"></button>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" ml-4 d-none" id="displayCard2">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="headingOne">
                                <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                    <h3 class="text-center">Επιβάτης 3 </h3>
                                </button>
                            </h2>
                            <div id="collapseOne2" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <div class="card card-body  ">


                                        <fieldset>
                                            <div class="form-group has-error mb-4">
                                                <input class="form-control input-lg" placeholder="Eπώνυμο" name="lastname" value="" type="text" required>
                                            </div>
                                            <div class="form-group has-success mb-4">
                                                <input class="form-control input-lg" placeholder="'Ονομα" name="name" value="" type="text" required>
                                            </div>

                                            <div class="form-group mb-4">
                                                <select class="form-control input-lg">
                                                    <option selected="">--Εθνικότητα</option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
                                                    <option value="american">American</option>
                                                    <option value="andorran">Andorran</option>
                                                    <option value="angolan">Angolan</option>
                                                    <option value="antiguans">Antiguans</option>
                                                    <option value="argentinean">Argentinean</option>
                                                    <option value="armenian">Armenian</option>
                                                    <option value="australian">Australian</option>
                                                    <option value="austrian">Austrian</option>
                                                    <option value="azerbaijani">Azerbaijani</option>
                                                    <option value="bahamian">Bahamian</option>
                                                    <option value="bahraini">Bahraini</option>
                                                    <option value="bangladeshi">Bangladeshi</option>
                                                    <option value="barbadian">Barbadian</option>
                                                </select>
                                            </div>

                                            <div class="form-group has-success mb-4">
                                                <p class="form-control  datepicker " placeholder="'Ονομα" name="name" value="" type="text" required>

                                                    <button class="btn btn-transparent" type="button"><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Ημερομηνία γέννησης"></button>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3rd card -->
                <div class=" ml-4 d-none" id="displayCard3">
                    <div class="accordion" id="accordionExample3">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="headingOne">
                                <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                    <h3 class="text-center">Επιβάτης 4 </h3>
                                </button>
                            </h2>
                            <div id="collapseOne3" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    <div class="card card-body  ">


                                        <fieldset>
                                            <div class="form-group has-error mb-4">
                                                <input class="form-control input-lg" placeholder="Eπώνυμο" name="lastname" value="" type="text" required>
                                            </div>
                                            <div class="form-group has-success mb-4">
                                                <input class="form-control input-lg" placeholder="'Ονομα" name="name" value="" type="text" required>
                                            </div>

                                            <div class="form-group mb-4">
                                                <select class="form-control input-lg">
                                                    <option selected="">--Εθνικότητα</option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
                                                    <option value="american">American</option>
                                                    <option value="andorran">Andorran</option>
                                                    <option value="angolan">Angolan</option>
                                                    <option value="antiguans">Antiguans</option>
                                                    <option value="argentinean">Argentinean</option>
                                                    <option value="armenian">Armenian</option>
                                                    <option value="australian">Australian</option>
                                                    <option value="austrian">Austrian</option>
                                                    <option value="azerbaijani">Azerbaijani</option>
                                                    <option value="bahamian">Bahamian</option>
                                                    <option value="bahraini">Bahraini</option>
                                                    <option value="bangladeshi">Bangladeshi</option>
                                                    <option value="barbadian">Barbadian</option>
                                                </select>
                                            </div>

                                            <div class="form-group has-success mb-4">
                                                <p class="form-control  datepicker " placeholder="'Ονομα" name="name" value="" type="text" required>

                                                    <button class="btn btn-transparent" type="button"><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Ημερομηνία γέννησης"></button>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4th card -->
                <div class=" ml-4 d-none" id="displayCard4">
                    <div class="accordion" id="accordionExample4">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="headingOne">
                                <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                    <h3 class="text-center">Επιβάτης 5 </h3>
                                </button>
                            </h2>
                            <div id="collapseOne4" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    <div class="card card-body  ">


                                        <fieldset>
                                            <div class="form-group has-error mb-4">
                                                <input class="form-control input-lg" placeholder="Eπώνυμο" name="lastname" value="" type="text" required>
                                            </div>
                                            <div class="form-group has-success mb-4">
                                                <input class="form-control input-lg" placeholder="'Ονομα" name="name" value="" type="text" required>
                                            </div>

                                            <div class="form-group mb-4">
                                                <select class="form-control input-lg">
                                                    <option selected="">--Εθνικότητα</option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
                                                    <option value="american">American</option>
                                                    <option value="andorran">Andorran</option>
                                                    <option value="angolan">Angolan</option>
                                                    <option value="antiguans">Antiguans</option>
                                                    <option value="argentinean">Argentinean</option>
                                                    <option value="armenian">Armenian</option>
                                                    <option value="australian">Australian</option>
                                                    <option value="austrian">Austrian</option>
                                                    <option value="azerbaijani">Azerbaijani</option>
                                                    <option value="bahamian">Bahamian</option>
                                                    <option value="bahraini">Bahraini</option>
                                                    <option value="bangladeshi">Bangladeshi</option>
                                                    <option value="barbadian">Barbadian</option>
                                                </select>
                                            </div>

                                            <div class="form-group has-success mb-4">
                                                <p class="form-control  datepicker " placeholder="'Ονομα" name="name" value="" type="text" required>

                                                    <button class="btn btn-transparent" type="button"><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Ημερομηνία γέννησης"></button>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 5th card -->
                <div class=" ml-4 d-none" id="displayCard5">
                    <div class="accordion" id="accordionExample5">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="headingOne">
                                <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                                    <h3 class="text-center">Επιβάτης 6 </h3>
                                </button>
                            </h2>
                            <div id="collapseOne5" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample5">
                                <div class="accordion-body">
                                    <div class="card card-body  ">


                                        <fieldset>
                                            <div class="form-group has-error mb-4">
                                                <input class="form-control input-lg" placeholder="Eπώνυμο" name="lastname" value="" type="text" required>
                                            </div>
                                            <div class="form-group has-success mb-4">
                                                <input class="form-control input-lg" placeholder="'Ονομα" name="name" value="" type="text" required>
                                            </div>

                                            <div class="form-group mb-4">
                                                <select class="form-control input-lg">
                                                    <option selected="">--Εθνικότητα</option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
                                                    <option value="american">American</option>
                                                    <option value="andorran">Andorran</option>
                                                    <option value="angolan">Angolan</option>
                                                    <option value="antiguans">Antiguans</option>
                                                    <option value="argentinean">Argentinean</option>
                                                    <option value="armenian">Armenian</option>
                                                    <option value="australian">Australian</option>
                                                    <option value="austrian">Austrian</option>
                                                    <option value="azerbaijani">Azerbaijani</option>
                                                    <option value="bahamian">Bahamian</option>
                                                    <option value="bahraini">Bahraini</option>
                                                    <option value="bangladeshi">Bangladeshi</option>
                                                    <option value="barbadian">Barbadian</option>
                                                </select>
                                            </div>

                                            <div class="form-group has-success mb-4">
                                                <p class="form-control  datepicker " placeholder="'Ονομα" name="name" value="" type="text" required>

                                                    <button class="btn btn-transparent" type="button"><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Ημερομηνία γέννησης"></button>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 6th card -->
                <div class=" ml-4 d-none" id="displayCard6">
                    <div class="accordion" id="accordionExample6">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="headingOne">
                                <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                                    <h3 class="text-center">Επιβάτης 7 </h3>
                                </button>
                            </h2>
                            <div id="collapseOne6" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample6">
                                <div class="accordion-body">
                                    <div class="card card-body  ">


                                        <fieldset>
                                            <div class="form-group has-error mb-4">
                                                <input class="form-control input-lg" placeholder="Eπώνυμο" name="lastname" value="" type="text" required>
                                            </div>
                                            <div class="form-group has-success mb-4">
                                                <input class="form-control input-lg" placeholder="'Ονομα" name="name" value="" type="text" required>
                                            </div>

                                            <div class="form-group mb-4">
                                                <select class="form-control input-lg">
                                                    <option selected="">--Εθνικότητα</option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
                                                    <option value="american">American</option>
                                                    <option value="andorran">Andorran</option>
                                                    <option value="angolan">Angolan</option>
                                                    <option value="antiguans">Antiguans</option>
                                                    <option value="argentinean">Argentinean</option>
                                                    <option value="armenian">Armenian</option>
                                                    <option value="australian">Australian</option>
                                                    <option value="austrian">Austrian</option>
                                                    <option value="azerbaijani">Azerbaijani</option>
                                                    <option value="bahamian">Bahamian</option>
                                                    <option value="bahraini">Bahraini</option>
                                                    <option value="bangladeshi">Bangladeshi</option>
                                                    <option value="barbadian">Barbadian</option>
                                                </select>
                                            </div>

                                            <div class="form-group has-success mb-4">
                                                <p class="form-control  datepicker " placeholder="'Ονομα" name="name" value="" type="text" required>

                                                    <button class="btn btn-transparent" type="button"><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Ημερομηνία γέννησης"></button>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    </header>

    </div>
    <!-- Footer-->
    @include('layouts.footer')



</body>

<script>
    /**
     * The function onClickAdd() adds 1 to the variable clicks and displays the result in the HTML element
     * with the id of clicks
     */
    var clicks = 0;
    document.getElementById("clicks").innerHTML = clicks

    function onClickAdd() {
        if (clicks + clicks2 + clicks3 <= 6) {
            clicks += 1;
            document.getElementById("clicks").innerHTML = clicks;
        }
        if (clicks + clicks2 + clicks3 == 1) {
            var l = document.getElementById("displayCardLeader");

            l.classList.remove("ml-4", "d-none");
            l.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 2) {
            var x = document.getElementById("displayCard");

            x.classList.remove("ml-4", "d-none");
            x.classList.add("ml-4", "mb-4");



        } else if (clicks + clicks2 + clicks3 == 3) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("ml-4", "d-none");
            y.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 4) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("ml-4", "d-none");
            t.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 5) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("ml-4", "d-none");
            z.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 6) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("ml-4", "d-none");
            k.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 7) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("ml-4", "d-none");
            g.classList.add("ml-4", "mb-4");
        }
    }



    ;

    function onClickRemove() {
        if (document.getElementById("clicks").innerHTML > 0) {
            clicks -= 1;
            document.getElementById("clicks").innerHTML = clicks;

        }

        if (clicks + clicks2 + clicks3 <= 0) {
            var x = document.getElementById("displayCardLeader");

            x.classList.remove("ml-4");
            x.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 1) {
            var x = document.getElementById("displayCard");

            x.classList.remove("ml-4");
            x.classList.add("ml-4", "d-none");



        } else if (clicks + clicks2 + clicks3 <= 2) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("ml-4");
            y.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 3) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("ml-4");
            t.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 4) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("ml-4");
            z.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 5) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("ml-4");
            k.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 6) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("ml-4");
            g.classList.add("ml-4", "d-none");
        }

    };
    /**
     * It adds and removes clicks from the HTML element with the id of "clicks2".
     */
    var clicks2 = 0;

    function onClickAdd2() {
        if (clicks + clicks2 + clicks3 <= 6) {
            clicks2 += 1;
            document.getElementById("clicks2").innerHTML = clicks2;
        }
        if (clicks + clicks2 + clicks3 == 2) {
            var x = document.getElementById("displayCard");

            x.classList.remove("ml-4", "d-none");
            x.classList.add("ml-4", "mb-4");



        } else if (clicks + clicks2 + clicks3 == 3) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("ml-4", "d-none");
            y.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 4) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("ml-4", "d-none");
            t.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 5) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("ml-4", "d-none");
            z.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 6) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("ml-4", "d-none");
            k.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 7) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("ml-4", "d-none");
            g.classList.add("ml-4", "mb-4");
        }
    };

    function onClickRemove2() {
        if (document.getElementById("clicks2").innerHTML > 0) {
            clicks2 -= 1;
            document.getElementById("clicks2").innerHTML = clicks2;
        }

        if (clicks + clicks2 + clicks3 <= 1) {
            var x = document.getElementById("displayCard");

            x.classList.remove("ml-4");
            x.classList.add("ml-4", "d-none");



        } else if (clicks + clicks2 + clicks3 <= 2) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("ml-4");
            y.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 3) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("ml-4");
            t.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 4) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("ml-4");
            z.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 5) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("ml-4");
            k.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 6) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("ml-4");
            g.classList.add("ml-4", "d-none");
        }

    };

    /**
     * It adds and removes clicks from the HTML element with the id of "clicks3".
     */
    var clicks3 = 0;

    function onClickAdd3() {
        if (clicks + clicks2 + clicks3 <= 6) {
            clicks3 += 1;
            document.getElementById("clicks3").innerHTML = clicks3;
        }
        if (clicks + clicks2 + clicks3 == 2) {
            var x = document.getElementById("displayCard");

            x.classList.remove("ml-4", "d-none");
            x.classList.add("ml-4", "mb-4");



        } else if (clicks + clicks2 + clicks3 == 3) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("ml-4", "d-none");
            y.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 4) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("ml-4", "d-none");
            t.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 5) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("ml-4", "d-none");
            z.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 6) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("ml-4", "d-none");
            k.classList.add("ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 7) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("ml-4", "d-none");
            g.classList.add("ml-4", "mb-4");
        }
    };

    function onClickRemove3() {
        if (document.getElementById("clicks3").innerHTML > 0) {
            clicks3 -= 1;
            document.getElementById("clicks3").innerHTML = clicks3;
        }
        if (clicks + clicks2 + clicks3 <= 1) {
            var x = document.getElementById("displayCard");

            x.classList.remove("ml-4");
            x.classList.add("ml-4", "d-none");



        } else if (clicks + clicks2 + clicks3 <= 2) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("ml-4");
            y.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 3) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("ml-4");
            t.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 4) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("ml-4");
            z.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 5) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("ml-4");
            k.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 6) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("ml-4");
            g.classList.add("ml-4", "d-none");
        }

    };
</script>

<script>
    /**
     * If the element with the id of "clicks" is not displayed, display it. If it is displayed, hide it
     */
    function displayCardFunction() {
        if (clicks + clicks2 + clicks3 == 1) {
            var x = document.getElementById("displayCard");

            x.classList.remove("ml-4", "d-none");
            x.classList.add("col-lg-6", "ml-4");
            console.log(x);



        }
        if (clicks + clicks2 + clicks3 <= 1) {
            var x = document.getElementById("displayCard");

            x.classList.remove("ml-4");
            x.classList.add("ml-4", "d-none");



        } else if (clicks + clicks2 + clicks3 <= 2) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("ml-4");
            y.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 3) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("ml-4");
            t.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 4) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("ml-4");
            z.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 5) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("ml-4");
            k.classList.add("ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 6) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("ml-4");
            g.classList.add("ml-4", "d-none");
        }
    }
</script>

</html>