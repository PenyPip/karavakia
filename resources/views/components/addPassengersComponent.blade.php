 <!-- total cost card -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

 <link href="css/choices.css" rel="stylesheet" type="text/css">
 <link href="css/style.css" rel="stylesheet" type="text/css">



 <header class="sidebox">
     <div class="card mt-4">

         <div>

             <div class="d-grid gap-2 mb-2">
                 <select class="selectpicker form-control-lg border-2 px-4 py-4 rounded shadow">
                     <option hidden value="placeholder">Επιλογή ημερήσιας διαδρομής</option>
                     @foreach ($destinations as $destination)
                     <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                     @endforeach

                 </select>
                 <!-- AUTO COMPLETE DROPDOWN -->
          
                 <button class="btn-lg btn-light col-12" type="button" disabled><i class="fa fa-calendar"></i> <input type="text" class="datepicker" placeholder="Επιλέξτε ημερομηνία"></button>

                 <div class="card border-0 mb-2">
                     <div class="card-body p-0">
                         


                     </div>
                 </div>
             </div>
         </div>
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
     <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

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

     <!-- Include Choices JavaScript (latest) -->

     <script src="js/jquery.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <script>
         /* ==============================================
    CUSTOM SELECT
  ============================================== */
         const sorting = document.querySelector('.selectpicker');
         const commentSorting = document.querySelector('.selectpicker');
         const sortingchoices = new Choices(sorting, {
             placeholder: false,
             itemSelectText: ''
         });
         // Trick to apply your custom classes to generated dropdown menu
         let sortingClass = sorting.getAttribute('class');
         window.onload = function() {
             sorting.parentElement.setAttribute('class', sortingClass);
         }
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
     </script>