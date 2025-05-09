<footer class="bg-custom-gray-dark-100 <?php echo ($page === 'fasttrack') ? 'pt-10' : 'pt-20'; ?> pb-14">
    <div class="mx-auto max-w-screen-xl px-2 sm:px-4">
        <?php if ($page !== 'fasttrack') { ?>
        <div class="space-y-6">
            <p class="text-center text-white text-2xl">Be the first to know when we reach new milestones in our tech development</p>
            <form id="jotformForm" action="https://submit.jotform.com/submit/242986385047065/" method="POST" method="POST" autocomplete="off" class="max-w-[475px] mx-auto relative">
            <input type="hidden" name="formID" value="242986385047065">
                <input type="email" name="q3_email" id="input_3" placeholder="Email" class="bg-custom-gray-dark-200 text-white w-full py-2.5 pl-7 pr-40 rounded-full h-12 focus-within:outline-0">

                <div class="form-line captcha-field jf-required mt-3" data-type="control_captcha" id="id_4"><label class="form-label form-label-top form-label-auto text-white mb-1" id="label_4" for="input_5" aria-hidden="false"> Please verify that you are human<span class="form-required">*</span> </label>
                        <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                            <section data-wrapper-react="true">
                                <div id="hcaptcha_input_5" class="h-captcha" data-siteKey="772f4a50-7161-425e-8cd5-4d7e361ab765" data-callback="hcaptchaCallbackinput_5" data-expired-callback="hcaptchaExpiredCallbackinput_5"></div><input type="hidden" id="input_5" class="hidden validate[required]" name="hcaptcha_visible" required="" />
                                <script type="text/javascript" src="https://hcaptcha.com/1/api.js"></script>

                            </section>
                        </div>
                    </div>

                <button type="submit" id="submitButtonNewsletter" class="text-white py-2.5 px-7 h-12 border border-white rounded-full inline-flex items-center justify-center font-bold text-base absolute right-0 top-0 hover:text-white">Subscribe</button>
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
        <?php } ?>
        <div class="<?php echo $page === 'fasttrack' ? '' : 'mt-16'; ?> mb-20 max-w-7xl px-4 mx-auto space-y-3 text-center">
            <p class="text-white/50 text-sm text-left sm:text-base">Matters discussed in this page contain forward-looking statements within the meaning of the Private Securities Litigation Reform Act of 1995. When used in this page, the words <span class="text-white/80">"anticipate," "believe," "estimate," "may," "intend," "expect"</span> and similar expressions identify such forward-looking statements. Actual results, performance or achievements could differ materially from those contemplated, expressed or implied by the forward-looking statements contained herein. These forward-looking statements are based largely on the expectations of the Company and are subject to a number of risks and uncertainties. These include, but are not limited to, risks and uncertainties associated with: the impact of economic, competitive and other factors affecting the Company and its operations, markets, the impact on the national and local economies resulting from terrorist actions, the impact of public health epidemics on the global economy and other factors detailed in reports filed by the Company with the United States Securities and Exchange Commission.</p>

            <p class="text-white/50 text-sm text-left sm:text-base"> Any forward-looking statement made by us in this page is based only on information currently available to us and speaks only as of the date on which it is made. We undertake no obligation to publicly update any forward-looking statement, whether written or oral, that may be made from time to time, whether as a result of new information, future developments or otherwise.</p>
        </div>
        <div class="flex sm:flex-row flex-col justify-between items-center">
            <a href="#">
                <img class="w-auto" src="<?php echo  $full_url; ?>/assets/images/logo-footer.svg" alt="Newhydrogen">
            </a>
            <p class="text-white text-lg">
            © 2025 NewHydrogen. Inc.</p>
        </div>
    </div>
</footer>

<script src="<?php echo  $full_url; ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/slick.min.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script>

<script src="<?php echo  $full_url; ?>/assets/js/main.js"></script>

</body>

</html>