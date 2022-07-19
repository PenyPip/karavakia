<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')

<style>
    .zoom-hov-img {
        display: inline-flex;
        width: 550px;
        height: auto;
        overflow: hidden;
    }

    .zoom-hov-img img {
        transition: transform .5s ease;
    }

    .zoom-hov-img:hover img {
        transform: scale(1.5);
    }
</style>

<body>

    <h1 style="text-align:center; font-size:70px; color:#113f82; margin-top: 80px;">Ευχαριστούμε!</h1>
    <h2 style="text-align:center;">Θα βρείτε τα εισητήριά, στα εισερχόμενα.</h2>
    <p style="text-align:center;"><i>Στη σπάνια περίπτωση που δεν εμφανίζονται, δείτε τον φάκελο των spam ή επικοινωνήστε μαζί μας.</i></p>
    <div style="display:grid; grid-template-columns: 1fr 1fr; padding-left:80px; padding-right:80px; margin-bottom: 80px;">
        <div style="margin-top:50px;">
            <h4 style="text-align:center; margin-bottom:10px;">Κατεβάστε το εισητήριο</h4>
            <div style="width:100%; text-align:-webkit-center;">
                <div style="width:45px; text-align:center;">
                    <hr style="border: 1.5px solid #ffc107; opacity: 1; width: 100%;" />
                </div>
            </div>
            <center><button style="background-color:#113f82; padding:20px; color:#fff; border-radius:7px;">Download</button></center>
        </div>
        <div style="margin-top:50px;">
            <h4 style="text-align:center; margin-bottom:10px;">Μείνετε συντονισμένοι</h4>
            <div style="width:100%; text-align:-webkit-center;">
                <div style="width:45px; text-align:center;">
                    <hr style="border: 1.5px solid #ffc107; opacity: 1; width: 100%;" />
                </div>
            </div>
            <center><a href="https://www.facebook.com/PegasusCruises/" style="font-size:40px;"><i class="fa fa-facebook" style="color:#113f82; padding-right:25px;"></i></a><a href="https://www.tripadvisor.com.gr/Attraction_Review-g1007321-d11150092-Reviews-Pegasus_Cruises-Tolon_Argolis_Region_Peloponnese.html" style="font-size:40px; padding-left:25px;"><i class="fa fa-tripadvisor" style="color:#113f82"></i></a></center>
        </div>
    </div>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>