<section class="pt-5 pb-10">
    <div class="mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4">
        <h1 class="w-full text-4xl sm:text-[50px] text-center font-semibold">We Are Moving Very Rapidly on a Fast Track</h1>
        <p class="text-center text-2xl mt-6 text-custom-orange-100 font-semibold">Click this short video to learn more about our progress</p>
        <div class="mt-9">
            <iframe width="560" height="315" class="h-64 sm:h-[600px] w-full" src="https://www.youtube.com/embed/1231123123"
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                            encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<div class="mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4">
<div class="space-y-6 pb-14">
    <p class="text-center text-black text-3xl sm:text-5xl font-extrabold">Be the first to know when we reach new <br class="hidden md:block" /> milestones in our tech development</p>
    <form id="jotformForm" action="https://submit.jotform.com/submit/242986385047065/" method="POST" method="POST" autocomplete="off" class="max-w-[475px] mx-auto relative">
        <input type="hidden" name="formID" value="242986385047065">
        <input type="email" name="q3_email" id="input_3" placeholder="Email" class="bg-gray-200 text-black shadow-[inset_0_0_10px_rgba(0,0,0,0.3)] w-full py-2.5 pl-7 pr-40 rounded-2xl h-12 focus-within:outline-0">

        <div class="form-line captcha-field jf-required mt-3" data-type="control_captcha" id="id_4"><label class="form-label form-label-top form-label-auto text-white mb-1" id="label_4" for="input_5" aria-hidden="false"> Please verify that you are human<span class="form-required">*</span> </label>
            <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                <section data-wrapper-react="true">
                    <div id="hcaptcha_input_5" class="h-captcha" data-siteKey="772f4a50-7161-425e-8cd5-4d7e361ab765" data-callback="hcaptchaCallbackinput_5" data-expired-callback="hcaptchaExpiredCallbackinput_5"></div><input type="hidden" id="input_5" class="hidden validate[required]" name="hcaptcha_visible" required="" />
                    <script type="text/javascript" src="https://hcaptcha.com/1/api.js"></script>

                </section>
            </div>
        </div>

        <button type="submit" id="submitButtonNewsletter" class="text-white py-2.5 px-7 h-12 border-0 rounded-2xl inline-flex items-center justify-center bg-custom-green-700 font-bold text-base absolute right-0 top-0 hover:text-white">Sign Up Now</button>
    </form>
    <script type="text/javascript">
        const submitButtonNewsletter = document.getElementById('submitButtonNewsletter');

        function onCaptchaSuccess(token) {
            document.getElementById('input_5').value = token;
            submitButtonNewsletter.disabled = false;
        }

        function onCaptchaExpired() {
            document.getElementById('input_5').value = '';
            submitButtonNewsletter.disabled = true;
        }
    </script>
</div>
</div>