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
                    <img src="<?php echo  $full_url; ?>/assets/img/logo-light.png" alt="logo">
                </a>
            </div>

            <div class="footer-nav">
                <a href="/market">Market</a>
                <a href="/breakthrough-tech">Breakthrough Tech</a>
                <a href="/electrolyzer-tech">Electrolyzer Tech</a>
                <a href="/applications">Applications</a>
                <a href="/news">Newsroom</a>
                <a href="/videos">Videos</a>
                <a href="/investors">Investors</a>
                <a href="/about-us">About</a>
                <a href="/contact-us">Contact</a>
            </div>

            <p>© 2023 NewHydrogen. Inc.</p>
        </div>
    </div>
</footer>



<script src="./assets/js/jquery-3.1.1.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/jquery.magnific-popup.min.js"></script>
<script src="./assets/js/slick.min.js"></script>

<script src="./assets/js/main.js"></script>

</body>

</html>