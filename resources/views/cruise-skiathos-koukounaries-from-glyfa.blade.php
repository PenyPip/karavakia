<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')

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
                <div>
                    <img src="/images/product-skiathos-koukounaries.jpg" style="width: 100%; height: auto;">
                </div>
                <div>
                    <h3 style="margin-top:20px;">Description</h3>
                    </hr>
                    <p>One-day cruise with PEGASUS CRUISES departing from Glyfa for the enchanting island of Skiathos and the lovely beach of Koukounaries.

                        During the cruise you’ll have the opportunity to see the island of Argyronisos with the traditional lighthouse, as well as the Artemisio where the naval combat took place between the greeks and the persians in 480 b.c. You’ll stop and swim at the most famous beach of Skiathos, Koukounaries and visit the venetian fortress that hosts the folklore museum and the house of Al. Papadiamantis, famous greek author.


                        There is plenty of time for a swim in Koukounaries and lunch at the beautiful tavernas in Skiathos. The rest of the time you can enjoy the comforts of our ships: the closed air conditioned lounges and our open air decks</p>
                </div>
            </div>
            <div class="tour-booking-panel" margin-top: -25px>
                <p style="padding:10px; background-color: #FDB200; height: 50px; width: 280px; text-align: center; margin-top: -25px; color: #fff; font-size: 20px;">Price: <font style="font-weight:bold;">28€</font>
                </p>
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