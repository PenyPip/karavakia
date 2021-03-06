<!DOCTYPE html>
<html lang="en">

@include('layouts.navbar')

<body>
    <header class="passengerDetails">
        <div class="container">
            <!-- stepper -->

            <div id="stepper-example" class="bs-stepper">
                <div class="bs-stepper-header">
                    <div class="step" data-target="#test-l-1">
                        <a href="/homeSearch">
                            <div class="active">
                                <span class="bs-stepper-circle"><i class="fa fa-ship fa-lg"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#test-l-2">
                        <a href="/passengerDetails">
                            <div class="active">
                                <span class="bs-stepper-circle"><i class="fa fa-pencil fa-lg"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#test-l-3">
                        <a href="booking-payment">
                            <span class="bs-stepper-circle"><i class="fa fa-credit-card fa-lg"></i></span>
                        </a>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <div id="test-l-1" class="content">
                        <p class="text-center">test 1</p>
                        <button class="btn btn-primary" onclick="myStepper.next()">Next</button>
                    </div>
                    <div id="test-l-2" class="content">
                        <p class="text-center">test 2</p>
                        <button class="btn btn-primary" onclick="myStepper.next()">Next</button>
                    </div>
                    <div id="test-l-3" class="content">
                        <p class="text-center">test 3</p>
                        <button class="btn btn-primary" onclick="myStepper.next()">Next</button>
                        <button class="btn btn-primary" onclick="myStepper.previous()">Previous</button>
                    </div>
                </div>
            </div>

            <!--  -->
        <div class="row">
            <div class="col-lg-6 ml-4 mb-4">
                <div class="pay-by-card">
                    <div class="card card-body  ">
                        <h3 class="text-center mb-4">???????????????? ????????????????</h3>

                        <h1 style="font-size:22px; text-align:center; text-decoration:underline 2px #245ED6; margin-bottom:20px;"></h1>
                        <!-- Form for Card processing -->
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3" style="width:100%;">
                                    <label for="validationCustom01" style="margin-bottom:5px;">?????????????? ????????????</label>
                                    <input style="border-color:#245ed6;" name="card-num" type="text" class="form-control" id="validationCustom01" placeholder="0000 0000 0000 0000" value="" autocomplete="cc-number" minlength="19" maxlength="19" size="18" id="cr_no" required>
                                    <div class="valid-feedback">
                                        ???????????????? ??????????????!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" style="width:100%;">
                                    <label for="validationCustom02" style="margin-bottom:5px;">???????????????????? ??????????</label>
                                    <input style="border-color:#245ed6;" name="exp" type="text" class="form-control" id="validationCustom02" placeholder="????/????" value="" autocomplete="cc-exp" size="6" id="exp" minlength="5" maxlength="5" required>
                                    <div class="valid-feedback">
                                        ???????????????? ??????????????!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" style="width:100%;">
                                    <label for="validationCustom03" style="margin-bottom:5px;">?????????????? CVV/CVC</label>
                                    <input style="border-color:#245ed6;" name="cvv" type="password" class="form-control" id="validationCustom02" placeholder="000" value="" autocomplete="cc-csc" size="3" minlength="3" maxlength="3" required>
                                    <div class="valid-feedback">
                                        ???????????????? ??????????????!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3" style="width:100%;">
                                    <label for="validationCustom04" style="margin-bottom:5px;">???????????? ?????????? ??????????????</label>
                                    <input style="border-color:#245ed6;" type="text" class="form-control" id="validationCustom03" placeholder="?????????? & ??????????????" autocomplete="cc-name" pattern="[\p{L} \-\.]+" required>
                                    <div class="invalid-feedback">
                                        ???????????????? ?????????????????????? ???????????? o????????????????????????.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="width:100%;">
                                <div class="form-check">
                                    <input style="border-color:#245ed6;" class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        ?????????????? ???? ???????? <a href="#">??????????</a> ?????? ?????? <a href="#">????????????????????????</a>.
                                    </label>
                                    <div class="invalid-feedback">
                                        ???? ???????????? ???? ?????????????????????? ???? ???????? ?????????? ?????? ?????? ???????????????????????? ???????????? ??????????????????????.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" style="margin-top:20px;">???????????????????? ????????????????</button>
                        </form>
                    </div>
                </div>             
            </div>
<!--  -->
                <div class="col-lg-4 ml-4 mb-4">
                    <div class="card card-body  ">
                        <h3 class="text-center mb-4">?????????????????????? ????????????????</h3>
                        <h2 style="font-size:22px; text-align:center; text-decoration:underline 2px #245ED6; margin-bottom:20px;">?????????????????????? ????????????????<h2>
                                <table>
                                    <tr>
                                        <td style="font-size:16px; color:#212529; border-bottom: 1px solid #245ed6; border-right: 1px dotted #245ed6; font-weight:normal; padding-top: 15px; padding-bottom: 15px; padding-left: 10px; padding-right: 10px;">?????????? 1???? ??????????????????</td>
                                        <td style="font-size:16px; color:#212529; border-bottom: 1px solid #245ed6; font-weight:normal; padding-left: 10px; padding-right: 10px;">???????? 1???? ??????????????????</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:16px; color:#212529; border-bottom: 1px solid #245ed6; border-right: 1px dotted #245ed6; font-weight:normal; padding-top: 15px; padding-bottom: 15px; padding-left: 10px; padding-right: 10px;">?????????? 2???? ??????????????????</td>
                                        <td style="font-size:16px; color:#212529; border-bottom: 1px solid #245ed6; font-weight:normal; padding-left: 10px; padding-right: 10px;">???????? 2???? ??????????????????</td>
                                    </tr>
                                    <td></td>
                                    <td style="text-align:right; font-size:16px; color:#212529; font-weight:normal; padding-top: 15px; padding-bottom: 15px; padding-left: 10px; padding-right: 10px;"><i>??????: ???????????????? ????????</i></td>
                                    </tr>
                                    <td></td>
                                    <td style="text-align:right; font-size:16px; color:#212529; font-weight:normal; padding-top: 15px; padding-bottom: 15px; padding-left: 10px; padding-right: 10px;">???????????? ????????: <font style="font-weight:bold;">????????????</font>
                                    </td>
                                    </tr>
                                </table>
                    </div>
                </div>
                </div>
        </div>
        </div>
    </header>
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