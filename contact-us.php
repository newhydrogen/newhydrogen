<?php

$GLOBALS['title'] = "NewHydrogen";

$GLOBALS['desc'] = "";

$GLOBALS['keywords'] = "";

include('header.php'); ?>





<section class="contact">

    <div class="container">

        <div class="contact-title">

            <h1>Contact Us</h1>

            <p>

                NewHydrogen, Inc.

                <br>



                27936 Lost Canyon Road, Suite 202

                <br>



                Santa Clarita, CA 91387

                <br>



                T: (661) 251-0001

                <br>

                E: info@newhydrogen.com

            </p>



        </div>

        <div class="contact-form">

            <form action="https://submit.jotform.com/submit/241317693348058/" method="POST">
                <input type="hidden" name="formID" value="241317693348058" />

                <input type="text" class="form-control" placeholder="Name" name="q7_name" id="input_7" required>

                <input type="email" class="form-control" placeholder="Email" name="input_5" id="q5_email" required>

                <textarea name="q6_message" id="input_6" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                <!-- <input type="hidden" name="recaptcha_response" id="recaptchaResponse"> -->

                <section data-wrapper-react="true" data-invisible-captcha="true">
                    <div id="recaptcha_input_10" data-component="recaptcha" data-callback="recaptchaCallbackinput_10" data-size="invisible" data-badge="inline" data-expired-callback="recaptchaExpiredCallbackinput_10"></div>
                    <input type="hidden" id="input_10" class="hidden " name="recaptcha_invisible" required="" />
                   
                    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=explicit&amp;onload=recaptchaLoadedinput_10"></script>

                    <script type="text/javascript">
                        var recaptchaLoadedinput_10 = function() {
                            window.grecaptcha.render($("recaptcha_input_10"), {
                                sitekey: '6LeWVeAnAAAAAIOw4s89h2pgbDVHZ0M7IzALAcXE',
                            });
                            var grecaptchaBadge = document.querySelector('.grecaptcha-badge');
                            if (grecaptchaBadge) {
                                grecaptchaBadge.style.boxShadow = 'gray 0px 0px 2px';
                            }
                        };

                       
                        var recaptchaCallbackinput_10 = function() {
                            var isInvisibleReCaptcha = true;
                            var hiddenInput = $("input_10");
                            hiddenInput.setValue(1);
                            if (!isInvisibleReCaptcha) {
                                if (hiddenInput.validateInput) {
                                    hiddenInput.validateInput();
                                }
                            } else {
                                triggerSubmit(hiddenInput.form)
                            }

                            function triggerSubmit(formElement) {
                                var button = formElement.ownerDocument.createElement('input');
                                button.style.display = 'none';
                                button.type = 'submit';
                                formElement.appendChild(button).click();
                                formElement.removeChild(button);
                            }
                        }

                        // not really required for invisible recaptcha
                        var recaptchaExpiredCallbackinput_10 = function() {
                            var hiddenInput = $("input_10");
                            hiddenInput.writeAttribute("value", false);
                            if (hiddenInput.validateInput) {
                                hiddenInput.validateInput();
                            }
                        }
                    </script>
                </section>
                <div class="contact-form-btn">

                    <button type="submit" class="theme-btn">Submit</button>

                </div>

            </form>

        </div>

    </div>

</section>





<?php

include('footer.php'); ?>