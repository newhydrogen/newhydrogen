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

                <input type="email" class="form-control" placeholder="Email" name="q5_email" id="input_5" required>

                <textarea name="q6_message" id="input_6" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>

                <div class="form-line captcha-field jf-required" data-type="control_captcha" id="id_11">
                    <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11" aria-hidden="false"> Please verify that you are human<span class="form-required">*</span></label>

                    <div id="cid_11" class="form-input-wide jf-required" data-layout="full">
                        <section data-wrapper-react="true">
                            <div id="hcaptcha_input_11" class="h-captcha"
                                data-sitekey="772f4a50-7161-425e-8cd5-4d7e361ab765"
                                data-callback="onCaptchaSuccess"
                                data-expired-callback="onCaptchaExpired"></div>
                            <input type="hidden" id="input_11" class="hidden validate[required]" name="hcaptcha_visible" required />
                            <script type="text/javascript" src="https://hcaptcha.com/1/api.js" async defer></script>
                        </section>
                    </div>
                </div>

                <div class="contact-form-btn">
                    <button type="submit" class="theme-btn" id="submitButton" disabled>Submit</button>
                </div>
            </form>

            <script>
                const submitButton = document.getElementById('submitButton');

                function onCaptchaSuccess(token) {
                    document.getElementById('input_11').value = token;
                    submitButton.disabled = false; 
                }

                // Callback function when hCaptcha expires
                function onCaptchaExpired() {
                    document.getElementById('input_11').value = '';
                    submitButton.disabled = true;
                }
            </script>


        </div>

    </div>

</section>


<?php

include('footer.php'); ?>