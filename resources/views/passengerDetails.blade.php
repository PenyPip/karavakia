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
                                <input class="form-control input-lg" placeholder="Email " name="email" type="text" required>
                            </div>
                            <div class="form-group has-success mb-4">
                                <input class="form-control input-lg" placeholder="Κινητό" name="πηονε" value="" type="text" required>
                            </div>


                        </fieldset>
                    </div>
                </div>
                <!-- total cost card -->
                <div class="col-lg-4 mx-auto">
                    <h2 class="text-center text-custom mb-4">Υπολογισμός Ταξιδίου</h2>

                    <div class="card">
                        <img class="card-img-top" src="images/nauplio1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Εκδρομή - Ναύπλιο</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex w-100 justify-content-between">Εισιτήρια ενηλίκων x 2 <button type="button" class="btn btn-success btn-sm">50$</button></li>
                            <li class="list-group-item d-flex w-100 justify-content-between">Εισιτήρια ανηλίκων x 2<button type="button" class="btn btn-success btn-sm">40$</button></li>
                            <li class="list-group-item d-flex w-100 justify-content-between">Εισιτήρια φοιτητών x 1<button type="button" class="btn btn-success btn-sm">15$</button></li>

                        </ul>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start mt-4 ">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Συνολικό κόστος</h5>
                                <button type="button" class="btn btn-success btn-sm">105$</button>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="mb-1"></p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 ml-4">

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

                        </fieldset>
                    </div>
                </div>

            </div>
        </div>



    </header>
</body>

@include('layouts.footer')


</html>