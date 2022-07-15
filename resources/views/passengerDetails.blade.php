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
</style>

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
                <div class="col-lg-6 ">
                    <h2 class="text-center text-custom mb-4">Υπολογισμός Ταξιδίου</h2>

                    <div class="card">
                        <div class="paddingDiv">
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
                                        <img src="images/nauplio1.jpg" class="d-block w-100" alt="Slide 1" width="450" height="320">
                                        <div class="carousel-caption d-none d-md-block">
                                            <button type="button" class="btn btn-primary btn btn-block align-self-center">
                                                <h5 class="card-title text-center">ΚΡΟΥΑΖΙΕΡΑ: ΝΑΥΠΛΙΟ BY NIGHT</h5>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/nauplio.jpg" class="d-block w-100" alt="Slide 2" width="450" height="320">
                                        <div class="carousel-caption d-none d-md-block">
                                            <button type="button" class="btn btn-primary btn-block align-self-center">
                                                <h5 class="card-title text-center">ΚΡΟΥΑΖΙΕΡΑ: ΝΑΥΠΛΙΟ BY NIGHT</h5>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/mantalena-big.jpg" class="d-block w-100" alt="Slide 3" width="450" height="320">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>ΣΚΑΦΟΣ: ΜΑΝΤΑΛΕΝΑ</h5>
                                            <!-- <p>Some placeholder content for the third slide.</p> -->
                                        </div>
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
                </div>
            </div>

                <div class="col-lg-6 ml-4 d-none" id="displayCard">
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
            <div class="col-lg-6 ml-4 d-none" id="displayCard2">
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
                <div class="col-lg-6 ml-4 d-none" id="displayCard3">
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
                <div class="col-lg-6 ml-4 d-none" id="displayCard4">
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
<div class="col-lg-6 ml-4 d-none" id="displayCard5">
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
                <div class="col-lg-6 ml-4 d-none" id="displayCard6">
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
</body>

@include('layouts.footer')
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
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
    document.getElementById("clicks").innerHTML = clicks

    function onClickAdd() {
        if (clicks + clicks2 + clicks3 <= 6) {
            clicks += 1;
            document.getElementById("clicks").innerHTML = clicks;
        }
        if (clicks + clicks2 + clicks3 == 2) {
            var x = document.getElementById("displayCard");

            x.classList.remove("col-lg-6", "ml-4", "d-none");
            x.classList.add("col-lg-6", "ml-4", "mb-4");



        } else if (clicks + clicks2 + clicks3 == 3) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4", "d-none");
            y.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 4) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("col-lg-6", "ml-4", "d-none");
            t.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 5) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("col-lg-6", "ml-4", "d-none");
            z.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 6) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("col-lg-6", "ml-4", "d-none");
            k.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 7) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("col-lg-6", "ml-4", "d-none");
            g.classList.add("col-lg-6", "ml-4", "mb-4");
        }
    }



    ;

    function onClickRemove() {
        if (document.getElementById("clicks").innerHTML > 0) {
            clicks -= 1;
            document.getElementById("clicks").innerHTML = clicks;

        }

        if (clicks + clicks2 + clicks3 <= 1) {
            var x = document.getElementById("displayCard");

            x.classList.remove("col-lg-6", "ml-4");
            x.classList.add("col-lg-6", "ml-4", "d-none");



        } else if (clicks + clicks2 + clicks3 <= 2) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4");
            y.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 3) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("col-lg-6", "ml-4");
            t.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 4) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("col-lg-6", "ml-4");
            z.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 5) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("col-lg-6", "ml-4");
            k.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 6) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("col-lg-6", "ml-4");
            g.classList.add("col-lg-6", "ml-4", "d-none");
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

            x.classList.remove("col-lg-6", "ml-4", "d-none");
            x.classList.add("col-lg-6", "ml-4", "mb-4");



        } else if (clicks + clicks2 + clicks3 == 3) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4", "d-none");
            y.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 4) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("col-lg-6", "ml-4", "d-none");
            t.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 5) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("col-lg-6", "ml-4", "d-none");
            z.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 6) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("col-lg-6", "ml-4", "d-none");
            k.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 7) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("col-lg-6", "ml-4", "d-none");
            g.classList.add("col-lg-6", "ml-4", "mb-4");
        }
    };

    function onClickRemove2() {
        if (document.getElementById("clicks2").innerHTML > 0) {
            clicks2 -= 1;
            document.getElementById("clicks2").innerHTML = clicks2;
        }

        if (clicks + clicks2 + clicks3 <= 1) {
            var x = document.getElementById("displayCard");

            x.classList.remove("col-lg-6", "ml-4");
            x.classList.add("col-lg-6", "ml-4", "d-none");



        } else if (clicks + clicks2 + clicks3 <= 2) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4");
            y.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 3) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("col-lg-6", "ml-4");
            t.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 4) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("col-lg-6", "ml-4");
            z.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 5) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("col-lg-6", "ml-4");
            k.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 6) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("col-lg-6", "ml-4");
            g.classList.add("col-lg-6", "ml-4", "d-none");
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

            x.classList.remove("col-lg-6", "ml-4", "d-none");
            x.classList.add("col-lg-6", "ml-4", "mb-4");



        } else if (clicks + clicks2 + clicks3 == 3) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4", "d-none");
            y.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 4) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("col-lg-6", "ml-4", "d-none");
            t.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 5) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("col-lg-6", "ml-4", "d-none");
            z.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 6) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("col-lg-6", "ml-4", "d-none");
            k.classList.add("col-lg-6", "ml-4", "mb-4");
        } else if (clicks + clicks2 + clicks3 == 7) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("col-lg-6", "ml-4", "d-none");
            g.classList.add("col-lg-6", "ml-4", "mb-4");
        }
    };

    function onClickRemove3() {
        if (document.getElementById("clicks3").innerHTML > 0) {
            clicks3 -= 1;
            document.getElementById("clicks3").innerHTML = clicks3;
        }
        if (clicks + clicks2 + clicks3 <= 1) {
            var x = document.getElementById("displayCard");

            x.classList.remove("col-lg-6", "ml-4");
            x.classList.add("col-lg-6", "ml-4", "d-none");



        } else if (clicks + clicks2 + clicks3 <= 2) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4");
            y.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 3) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("col-lg-6", "ml-4");
            t.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 4) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("col-lg-6", "ml-4");
            z.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 5) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("col-lg-6", "ml-4");
            k.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 6) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("col-lg-6", "ml-4");
            g.classList.add("col-lg-6", "ml-4", "d-none");
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

            x.classList.remove("col-lg-6", "ml-4", "d-none");
            x.classList.add("col-lg-6", "ml-4");
            console.log(x);



        }
        if (clicks + clicks2 + clicks3 <= 1) {
            var x = document.getElementById("displayCard");

            x.classList.remove("col-lg-6", "ml-4");
            x.classList.add("col-lg-6", "ml-4", "d-none");



        } else if (clicks + clicks2 + clicks3 <= 2) {


            var y = document.getElementById("displayCard2");
            y.classList.remove("col-lg-6", "ml-4");
            y.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 3) {


            var t = document.getElementById("displayCard3");
            t.classList.remove("col-lg-6", "ml-4");
            t.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 4) {


            var z = document.getElementById("displayCard4");
            z.classList.remove("col-lg-6", "ml-4");
            z.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 5) {


            var k = document.getElementById("displayCard5");
            k.classList.remove("col-lg-6", "ml-4");
            k.classList.add("col-lg-6", "ml-4", "d-none");
        } else if (clicks + clicks2 + clicks3 <= 6) {


            var g = document.getElementById("displayCard6");
            g.classList.remove("col-lg-6", "ml-4");
            g.classList.add("col-lg-6", "ml-4", "d-none");
        }
    }
</script>

</html>