<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')

<body>
    <h1 style="margin-top: 50px; margin-right:150px; margin-left:150px; font-size:22px;">Στοιχεία πληρωμής</h1>
    <!-- Form for Card processing -->
    <form class="needs-validation" novalidate style="margin-top: 50px; margin-bottom:50px; margin-right:150px; margin-left:150px;">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01" style="margin-bottom:5px;">Αριθμός κάρτας</label>
                <input name="card-num" type="text" class="form-control" id="validationCustom01" placeholder="0000 0000 0000 0000" value="" autocomplete="cc-number" minlength="19" maxlength="19" size="18" id="cr_no" required>
                <div class="valid-feedback">
                    Φαίνεται εντάξει!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02" style="margin-bottom:5px;">Ημερομηνία λήξης</label>
                <input name="exp" type="text" class="form-control" id="validationCustom02" placeholder="ΜΜ/ΕΕ" value="" autocomplete="cc-exp" size="6" id="exp" minlength="5" maxlength="5" required>
                <div class="valid-feedback">
                    Φαίνεται εντάξει!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom03" style="margin-bottom:5px;">Αριθμός CVV/CVC</label>
                <input name="cvv" type="password" class="form-control" id="validationCustom02" placeholder="000" value="" autocomplete="cc-csc" size="3" minlength="3" maxlength="3" required>
                <div class="valid-feedback">
                    Φαίνεται εντάξει!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom04" style="margin-bottom:5px;">Πλήρες όνομα κατόχου</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="Όνομα & Επώνυμο" autocomplete="cc-name" pattern="[\p{L} \-\.]+" required>
                <div class="invalid-feedback">
                    Παρακαλώ συμπληρώστε έγκυρο oνοματεπώνυμο.
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Συμφωνώ με τους <a href="#">όρους</a> και τις <a href="#">προϋποθέσεις</a>.
                </label>
                <div class="invalid-feedback">
                    Θα πρέπει να συμφωνήσετε με τους όρους και τις προϋποθέσεις πρωτού προχωρήσετε.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" style="margin-top:20px;">Ολοκλήρωση κράτησης</button>
    </form>
    <!--Formatted input for card info-->
    <script>
        (function() {

            //For Card Number formatted input
            var cardNum = document.getElementById('cr_no');
            cardNum.onkeyup = function(e) {
                if (this.value == this.lastValue) return;
                var caretPosition = this.selectionStart;
                var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
                var parts = [];

                for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
                    parts.push(sanitizedValue.substring(i, i + 4));
                }

                for (var i = caretPosition - 1; i >= 0; i--) {
                    var c = this.value[i];
                    if (c < '0' || c > '9') {
                        caretPosition--;
                    }
                }
                caretPosition += Math.floor(caretPosition / 4);

                this.value = this.lastValue = parts.join(' ');
                this.selectionStart = this.selectionEnd = caretPosition;
            }

            //For Date formatted input
            var expDate = document.getElementById('exp');
            expDate.onkeyup = function(e) {
                if (this.value == this.lastValue) return;
                var caretPosition = this.selectionStart;
                var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
                var parts = [];

                for (var i = 0, len = sanitizedValue.length; i < len; i += 2) {
                    parts.push(sanitizedValue.substring(i, i + 2));
                }

                for (var i = caretPosition - 1; i >= 0; i--) {
                    var c = this.value[i];
                    if (c < '0' || c > '9') {
                        caretPosition--;
                    }
                }
                caretPosition += Math.floor(caretPosition / 2);

                this.value = this.lastValue = parts.join('/');
                this.selectionStart = this.selectionEnd = caretPosition;
            }

        });
    </script>
    <!--End-->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

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