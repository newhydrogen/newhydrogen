<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    if ($GLOBALS['title']) {
        $title = $GLOBALS['title'];
    } else {
        $GLOBALS['title'] = "";
    }
    if ($GLOBALS['desc']) {
        $desc = $GLOBALS['desc'];
    } else {
        $desc = "";
    }
    if ($GLOBALS['keywords']) {
        $keywords = $GLOBALS['keywords'];
    } else {
        $keywords = "";
    }
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
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/png" href="<?php echo  $full_url; ?>/assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="<? echo $title; ?>">
    <meta property="og:description" content="NewHydrogen is developing a breakthrough technology that uses inexpensive heat instead of expensive electricity to split water to produce hydrogen.">
    <meta property="og:image" content="<?php echo  $full_url; ?>/assets/img/logo-og.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="NewHydrogen">
    <meta property="og:locale" content="en_US">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- Include Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo  $full_url; ?>/assets/css/style.min.css">

    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LeWVeAnAAAAAIOw4s89h2pgbDVHZ0M7IzALAcXE"></script>
    <script>
        grecaptcha.ready(function() {
            console.log('no error');
            grecaptcha.execute("6LeWVeAnAAAAAIOw4s89h2pgbDVHZ0M7IzALAcXE", {
                action: "submit"
            }).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            })
        })
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4TKDKXJVVE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());



        gtag('config', 'G-4TKDKXJVVE');
    </script>


    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1435998830509717');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1435998830509717&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="<?php
                $page_name = basename($_SERVER['PHP_SELF']);
                if ($page_name == "index.php" || $page_name == "" || $page_name == "/") {
                ?>homeC<?php } ?>
                <?php if ($page_name == "applications.php") { ?> nav_darkk<?php } ?>
                <?php if ($page_name == "investors.php") { ?> investPage<?php } ?>
                <?php if ($page_name == "3reasons.php") { ?> investPage<?php } ?>">

    <?php
    function active($currect_page)
    {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if ($currect_page == $url) {
            echo 'active'; //class name in css 
        }
    }
    ?>


    <?php
    $page_name = basename($_SERVER['PHP_SELF']);
    if ($page_name != "index.php" && $page_name != "" && $page_name != "/") {
    ?>
        <style>
            .ep-iFrameContainer.ep-popup.ep-iFrameLarge {
                height: auto;
                padding: 0px;
                background-color: transparent !important;
            }

            .ep-close-icon {
                padding: 5px 10px 15px !important;
                border: 5px solid black !important;
                position: relative;
                top: 20px !important;
                font-size: 35px !important;
                font-family: Arial, Helvetica, sans-serif !important;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .ep-iFrame {
                margin-top: 145px;
            }
        </style>
        <iframe src="https://api.leadconnectorhq.com/widget/form/9PwuXNEKYBvCg6S5H7bC" style="display:none;width:100%;height:100%;border:none;border-radius:0px" id="popup-9PwuXNEKYBvCg6S5H7bC" data-layout="{'id':'POPUP'}" data-trigger-type="alwaysShow" data-trigger-value="" data-activation-type="alwaysActivated" data-activation-value="" data-deactivation-type="neverDeactivate" data-deactivation-value="" data-form-name="Text Alerts" data-height="340" data-layout-iframe-id="popup-9PwuXNEKYBvCg6S5H7bC" data-form-id="9PwuXNEKYBvCg6S5H7bC" title="Text Alerts">

        </iframe>
        <script src="https://link.msgsndr.com/js/form_embed.js"></script>
    <?php } ?>
    <!-- Hedaer -->
    <header class="header-top">
        <?php if ($page_name != "3reasons.php") { ?>
            <div class="invest-bar">
                <div class="container">
                    <div class="invest-bar-content">
                        <div class="invest-bar-text">
                            <div class="invest-bar-text-wrap">
                                <p>Stock Symbol: NEWH</p>
                                <a href="/investors">
                                    Learn more
                                </a>
                            </div>
                        </div>
                        <div class="tSocial d-none d-lg-flex">
                            <a href="https://www.facebook.com/NewHydrogen/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/newhydrogen/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@NewHydrogenEnergy" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <?php
                    $page_name = basename($_SERVER['PHP_SELF']);
                    if ($page_name == "applications.php") {
                    ?>
                        <img src="<?php echo  $full_url; ?>/assets/img/logo-light.png" class="the-header-logo" alt="logo">
                    <?php } else { ?>
                        <img src="<?php echo  $full_url; ?>/assets/img/logo-dark.png" class=" the-header-logo" alt="logo">
                        <img src="<?php echo  $full_url; ?>/assets/img/logo-light.png" class="d-lg-none d-none the-header-logo" alt="logo">
                    <?php } ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H23.9921" stroke="#091113" stroke-width="2" stroke-linecap="round" />
                        <path d="M1 8.5H23.9921" stroke="#091113" stroke-width="2" stroke-linecap="round" />
                        <path d="M7.70602 16.5H23.9921" stroke="#091113" stroke-width="2" stroke-linecap="round" />
                    </svg>

                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('/'); ?>" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('market'); ?>" href="/market">Market</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('breakthrough-tech'); ?>" href="/breakthrough-tech">Breakthrough Tech</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link <?php active('electrolyzer-tech'); ?>" href="/electrolyzer-tech">Electrolyzer Tech</a>
                    </li> -->
                        <li class="nav-item">
                            <a class="nav-link <?php active('applications'); ?>" href="/applications">Applications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('news'); ?>" href="/news">Newsroom</a>
                        </li>



                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('videos'); ?>" href="/videos">Videos</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('investors'); ?>" href="/investors">Investors</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('about-us'); ?>" href="/about-us">About</a>
                        </li>

                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('contact-us'); ?>" href="/contact-us">Contact</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav d-none d-lg-flex rightNav">
                        <li class="nav-item">
                            <a class="nav-link <?php active('videos'); ?>" href="/videos">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('investors'); ?>" href="/investors">Investors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('about-us'); ?>" href="/about-us">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php active('contact-us'); ?>" href="/contact-us">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>