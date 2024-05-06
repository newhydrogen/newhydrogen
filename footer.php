<?php
// Get the current domain URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
$current_url = $protocol . "://" . $domain;

// Check if the script is running on localhost
if ($domain === 'localhost' || $domain === '127.0.0.1') {
    $full_url = $current_url . '/newhydrogen/';
} else {
    $full_url = $current_url . '/';
}

?>

<footer>
    <div class="container">
        <div class="footer-wrap">
            <div class="footer-newsletter" id="fNewsletter">
                <h4>Be the first to know when we reach new milestones in our tech development</h4>
                <!-- <form action="./php/subscriber.php" method="POST" autocomplete="off">
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    <button class="theme-btn" type="submit">Subscribe</button>
                </form> -->
                <div id="icontactSignupFormWrapper128">
                    <script type="text/javascript" async src="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=128&cid=122131&lid=1647&divid=icontactSignupFormWrapper128"></script>
                </div>
            </div>

            <div class="footer-logo">
                <a href="/">
                    <img src="<?php echo  $full_url; ?>/assets/img/logo-light.svg" alt="logo">
                </a>
            </div>

            <div class="footer-nav">
                <a href="/market">Market</a>
                <a href="/breakthrough-tech">Breakthrough Tech</a>
                <!-- <a href="/electrolyzer-tech">Electrolyzer Tech</a> -->
                <a href="/applications">Applications</a>
                <a href="/news">Newsroom</a>
                <a href="/videos">Videos</a>
                <a href="/investors">Investors</a>
                <a href="/about-us">About</a>
                <a href="/contact-us">Contact</a>
            </div>

            <div class="fls-text">
                <p>Matters discussed in this page contain forward-looking statements within the meaning of the Private Securities Litigation Reform Act of 1995. When used in this page, the words "anticipate," "believe," "estimate," "may," "intend," "expect" and similar expressions identify such forward-looking statements. Actual results, performance or achievements could differ materially from those contemplated, expressed or implied by the forward-looking statements contained herein. These forward-looking statements are based largely on the expectations of the Company and are subject to a number of risks and uncertainties. These include, but are not limited to, risks and uncertainties associated with: the impact of economic, competitive and other factors affecting the Company and its operations, markets, the impact on the national and local economies resulting from terrorist actions, the impact of public health epidemics on the global economy and other factors detailed in reports filed by the Company with the United States Securities and Exchange Commission.

                    <br><br>

                    Any forward-looking statement made by us in this page is based only on information currently available to us and speaks only as of the date on which it is made. We undertake no obligation to publicly update any forward-looking statement, whether written or oral, that may be made from time to time, whether as a result of new information, future developments or otherwise.
                </p>
            </div>

            <p>© 2024 NewHydrogen. Inc.</p>
        </div>
    </div>
</footer>


<div class="modal invest-modal fade" id="investModal" tabindex="-1" aria-labelledby="investModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="jotformForm" action="https://submit.jotform.com/submit/241246709411048/" method="POST">
                    <h3>Keep up with our progress by subscribing to our email newsletter!</h3>
                    <div class="mb-3">
                        <input type="hidden" name="formID" value="241246709411048">
                        <input type="email" name="q3_email" placeholder="Email" class="form-control">
                    </div>
                    <button type="submit">
                        <span class="invest-sbmit-btn">Enter</span>
                        <div class="spinner-border text-light" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </form>
                <div class="alert alert-success invest-alert" role="alert">
                    It's submitted successfully.
                </div>
            </div>
        </div>
    </div>
</div>



<script src="./assets/js/jquery-3.1.1.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/jquery.magnific-popup.min.js"></script>
<script src="./assets/js/slick.min.js"></script>

<script src="./assets/js/main.js"></script>

</body>

</html>