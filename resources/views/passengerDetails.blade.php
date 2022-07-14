<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')

<body>
    <!-- Masthead-->
    <header class="passengerDetails">

        <div class="container ml-4 py-3">
            <div class="row">
                <div class="col-lg-6 ml-4 mb-4">
                    <h2 class="text-center text-custom mb-4">Στοιχεία επιβατών</h2>

                    <div class="card card-body  ">
                        <h3 class="text-center mb-4">Επιβάτης 1 (Leader)</h3>

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
                                </select>
                            </div>

                            <div class="form-group has-success mb-4">
                                <p class="form-control  datepicker " placeholder="'Ονομα" name="name" value="" type="text" required>

                                    <button class="btn btn-transparent" type="button"><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Ημερομηνία γέννησης"></button>
                            </div>

                            <div class="form-group has-success mb-4">
                                <input class="form-control input-lg" placeholder="Email " name="email" type="text" required>
                            </div>
                            <div class="form-group has-success mb-4">
                                <input class="form-control input-lg" placeholder="Κινητό" name="πηονε" value="" type="text" required>
                            </div>


                        </fieldset>
                    </div>
                </div>
                <!-- total cost card -->
                <div class="col-lg-6 mx-auto">
                    <h2 class="text-center text-custom mb-4">Υπολογισμός Ταξιδίου</h2>
                    <div class="card">
                        <div class="paddingDiv">

                            <img class="card-img-top" src="images/nauplio1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center">Εκδρομή - Ναύπλιο</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex w-100 justify-content-between">
                                    <p class="mt-1">Εισιτήρια ενηλίκων</p>
                                    <div class="row">
                                        <button type="button" class="btn btn-custom btn-circle btn-sm px-2" onClick="onClickAdd()"><i class="fa fa-plus"></i> </button>
                                        <button class="btn btn-custom btn-circle btn-sm"><a id="clicks">0</a></button>
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
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start mt-4 ">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mt-2">Συνολικό κόστος:</h5>
                                    <div>
                                        <button type="button" class="btn btn-success btn-sm">105$</button>
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
            </div>

            <div class="row" id="clicks">
                <div class="col-lg-6 ml-4 d-none" id="displayCard">
                    <div class="card card-body  ">
                        <h3 class="text-center mb-4">Επιβάτης 2 </h3>

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
            <div class="col-lg-6 ml-4 d-none" id="displayCard2">
                <div class="card card-body  ">
                    <h3 class="text-center mb-4">Επιβάτης 3 </h3>

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



    </header>
</body>

@include('layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




<!-- Include Choices JavaScript (latest) -->
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>

<script>
    /* A datepicker that is only enabled on certain dates. */
    $(".datepicker").datepicker({
        minDate: ('+1d'),
        dateFormat: 'dd/mm/yy',
        beforeShowDay: function(date) {
            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            var isEnabled = (EnableDates.indexOf(string) != -1); // used to enable if its a route
            return [isEnabled];
        },
        changeMonth: true,
        changeYear: true
    });


    var EnableDates = new Array(); // this array will store the routes dates after being extracted form the JSON
    $.ajax({
        url: 'js/routes-daysoff.json', //example jason
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            // now the data is loaded and we will traverse over the "athens-aigina" 's route and create an array to of dates of routes
            var listOfRoutes = data['athens-aigina'].routes; //here will be the var that comes from the destination inputs exp"athens-aigina" or "athens-thasos"
            for (var i in listOfRoutes) {
                EnableDates.push(listOfRoutes[i].date); // push the date to our array for checking afterwards
            }

        }
    });


    /**
     * The function onClickAdd() adds 1 to the variable clicks and displays the result in the HTML element
     * with the id of clicks
     */
    var clicks = 0;

    function onClickAdd() {
        if (clicks + clicks2 + clicks3 <= 6) {
            clicks += 1;
            document.getElementById("clicks").innerHTML = clicks;
        }
        if (clicks + clicks2 + clicks3 == 1 ) {
            var x = document.getElementById("displayCard");

            x.classList.remove("col-lg-6", "ml-4", "d-none");
            x.classList.add("col-lg-6", "ml-4","mb-4");
            console.log(x);



        } else if (clicks + clicks2 + clicks3 ==2 ) {
            

            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4", "d-none");
            y.classList.add("col-lg-6", "ml-4","mb-4");
            console.log(y);
        }
    }



    ;

    function onClickRemove() {
        if (document.getElementById("clicks").innerHTML > 0) {
            clicks -= 1;
            document.getElementById("clicks").innerHTML = clicks;
            
        }

        if (clicks + clicks2 + clicks3 == 1 ) {
            var x = document.getElementById("displayCard");

            x.classList.remove("col-lg-6", "ml-4");
            x.classList.add("col-lg-6", "ml-4" , "d-none");
            console.log(x);



        } else if (clicks + clicks2 + clicks3 <=2 ) {
            

            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4");
            y.classList.add("col-lg-6", "ml-4", "d-none");
            console.log(y);
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
    };

    function onClickRemove2() {
        if (document.getElementById("clicks2").innerHTML > 0) {
            clicks2 -= 1;
            document.getElementById("clicks2").innerHTML = clicks2;
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
    };

    function onClickRemove3() {
        if (document.getElementById("clicks3").innerHTML > 0) {
            clicks3 -= 1;
            document.getElementById("clicks3").innerHTML = clicks3;
        }

    };
</script>

<script>
    /**
     * If the element with the id of "clicks" is not displayed, display it. If it is displayed, hide it
     */
    function displayCardFunction() {
        if (clicks + clicks2 + clicks3 == 1 ) {
            var x = document.getElementById("displayCard");

            x.classList.remove("col-lg-6", "ml-4", "d-none");
            x.classList.add("col-lg-6", "ml-4");
            console.log(x);



        } else if (clicks + clicks2 + clicks3 ==2 ) {
            

            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4", "d-none");
            y.classList.add("col-lg-6", "ml-4");
            console.log(y);
        }
    }
</script>

</html>