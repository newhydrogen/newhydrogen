<section class="mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4  xl:pt-[100px] pt-20 pb-[119px]">
    <div class="max-w-[734px] mx-auto text-center">
        <h1 class="md:text-[64px] text-4xl font-extralight mb-[46px]">Contact Us</h1>
        <form action="https://submit.jotform.com/submit/241317693348058/" method="POST">
            <input type="hidden" name="formID" value="241317693348058" />
            <div class="sm:flex block max-w-full gap-6 sm:mb-[30px]">
                <div class="sm:w-1/2 w-full">
                    <input class="w-full text-lg sm:mb-0 mb-[30px] h-12 focus-within:outline-0  bg-custom-gray-200 py-[11px] pl-6 rounded-[58px] text-custom-purple-light-100" type="text" name="q7_name" id="input_7" placeholder="First Name" required>
                </div>
                <div class="sm:w-1/2 w-full">
                    <input class="w-full text-lg sm:mb-0 mb-[30px] h-12 focus-within:outline-0 bg-custom-gray-200 py-[11px] text-custom-purple-light-100 pl-6 rounded-[58px]" type=" email" name="q5_email" id="input_5" placeholder="Email" required>
                </div>

            </div>
            <div class="w-full ">
                <textarea rows="9px" class="w-full text-lg py-[11px] bg-custom-gray-200  text-custom-purple-light-100 pl-6 rounded-[25px] focus-within:outline-0" placeholder="Message" name="q6_message" id="input_6"></textarea>
            </div>

            <div class="form-line jf-required my-8 text-left" data-type="control_captcha" id="id_12"><label class="form-label form-label-top form-label-auto" id="label_12" for="input_12" aria-hidden="false"> Please verify that you are human<span class="form-required">*</span> </label>
                <div id="cid_12" class="form-input-wide jf-required" data-layout="full">
                    <section data-wrapper-react="true">
                        <div id="hcaptcha_input_12" class="h-captcha" data-siteKey="772f4a50-7161-425e-8cd5-4d7e361ab765" data-callback="hcaptchaCallbackinput_12" data-expired-callback="hcaptchaExpiredCallbackinput_12"></div><input type="hidden" id="input_12" class="hidden validate[required]" name="hcaptcha_visible" required="" />
                        <script type="text/javascript" src="https://hcaptcha.com/1/api.js"></script>
                        
                    </section>
                </div>
                        </div>
            <button type="submit" id="submitButton" class="text-lg text-black py-[11px] border-black rounded-full border w-full focus-visible:outline-0 font-bold">Send</button>

        </form>


        <script>
                const submitButton = document.getElementById('submitButton');

                function onCaptchaSuccess(token) {
                    document.getElementById('input_12').value = token;
                    submitButton.disabled = false; 
                }
                function onCaptchaExpired() {
                    document.getElementById('input_12').value = '';
                    submitButton.disabled = true;
                }
            </script>
 
         

        <div class="mt-[86px]">
            <p class="text-xl text-custom-purple-light-100 font-normal">NewHydrogen, Inc.</p>
            <p class="text-xl text-custom-purple-light-100 font-normal">27936 Vista Canyon Blvd, Suite 202, </p>
            <p class="text-xl text-custom-purple-light-100 font-normal">Santa Clarita CA 91387</p>
            <a class="text-xl text-custom-purple-light-100 block font-normal" href="tel:(661) 251-0001">T: (661) 251-0001 </a>
            <a class="text-xl text-custom-purple-light-100 block font-normal" href="mailto:info@newhydrogen.com">E: info@newhydrogen.com</a>
        </div>
    </div>
</section>