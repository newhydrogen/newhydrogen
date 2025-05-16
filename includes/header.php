<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="Thu, 01 Jan 1970 00:00:00 GMT">
    <link rel="icon" type="image/png" href="<?php echo  $full_url; ?>/assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link href="<?php echo  $full_url; ?>/assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
    <script src="https://player.vimeo.com/api/player.js"></script>
    <title>Newhydrogen</title>

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1435998830509717');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1435998830509717&ev=PageView&noscript=1"
    /></noscript>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4TKDKXJVVE"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4TKDKXJVVE');
    </script>

</head>

<body class="<?php echo ($page === 'home') ? 'home' : ''; ?>">

    <div class="sticky top-0 z-30 bg-white transition-all duration-300 ease-in-out header-top">
        <div class="bg-black sm:px-5">
            <div class="mx-auto max-w-[1320px] 3xl:max-w-screen-2xl px-2 sm:px-4">
                <div class="relative py-2 flex justify-between items-center gap-1.5 sm:block sm:h-[60px]">
                    <!-- <div class="sm:absolute left-0 top-1/2 sm:-translate-y-1/2">
                        <a href="https://www.youtube.com/watch?v=-pkox2gPbiQ" target="_blank"
                            class="p-2.5 rounded-lg text-sm sm:text-base text-center font-semibold break-words bg-custom-green-500 text-black hover:text-black inline-block">
                            Watch <br class="md:hidden" /> the webinar
                        </a>
                    </div> -->
                    <div class="flex items-center justify-center gap-3 h-full">
                        <div class="flex items-center justify-between md:justify-center gap-3 w-full">

                            <p class="text-sm [max-380px]:text-base sm:text-lg md:text-lg lg:text-xl xl:text-3xl font-normal break-words text-white">Now Publicly Available <br class="md:hidden" /> - Stock Symbol: NEWH</p>
                            <?php if ($page !== 'fasttrack'): ?>
                            <a href="/fasttrack"
                                class="p-2.5 rounded-lg text-sm  sm:text-base font-semibold break-words bg-custom-red-100 text-white hover:text-white">
                                    Investors Click Here
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="absolute right-0 top-1/2 -translate-y-1/2 gap-4 hidden lg:flex">
                        <a href="https://www.facebook.com/NewHydrogen/" target="_blank"
                            class="text-white text-xl">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="https://www.instagram.com/newhydrogen/" target="_blank"
                            class="text-white text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@NewHydrogenEnergy" target="_blank"
                            class="text-white text-xl"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php if ($page !== 'explainer'): ?>    
        <nav class="sm:py-4 bg-white ">
            <div class="mx-auto max-w-[1320px] 3xl:max-w-screen-2xl px-2 sm:px-4">
                <div class="relative flex h-16 justify-between">
                    <div class="absolute inset-y-0 right-0 flex items-center min-[900px]:hidden">

                        <!-- Mobile menu button -->
                        <button type="button"
                            class="relative inline-flex items-center justify-center  p-2 text-gray-400 "
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg width="25" height="18" viewBox="0 0 25 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H23.9921" stroke="#091113" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M1 8.5H23.9921" stroke="#091113" stroke-width="2" stroke-linecap="round">
                                </path>
                                <path d="M7.70602 16.5H23.9921" stroke="#091113" stroke-width="2"
                                    stroke-linecap="round"></path>
                            </svg>

                    </div>
                    <div class="flex flex-1 items-center justify-start md:items-stretch md:justify-between">
                        <div class="flex shrink-0 items-center">
                            <a href="/">
                                <img class="w-auto inline-flex" src="<?php echo  $full_url; ?>/assets/images/logo-dark.svg" alt="Newhydrogen">
                            </a>

                        </div>
                        <?php
                        $links = [
                            "market" => "Market",
                            "technology" => "Technology",
                            "team" => "Team",
                            "application" => "Applications",
                            "newsroom" => "Newsroom",
                            "videos" => "Videos",
                            "investor" => "Investors",
                            "about" => "About",
                            "contact" => "Contact"
                        ];

                        $baseUrl = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? "/newhydrogen" : "";
                        ?>
                        <div
                            class="hidden sm:ml-6 min-[900px]:flex lg:space-x-2 xl:space-x-3 lg:gap-0 gap-2.5 [&>a]:inline-flex [&>a]:items-center [&>a]:border [&>a]:border-transparent [&>a]:text-sm [&>a]:font-normal [&>a]:leading-none [&>a]:text-black [&>a]:lg:px-2 [&>a]:xl:px-4 [&>a]:py-2 [&>a]:rounded-full">
                            <?php foreach ($links as $slug => $name): ?>
                                <a href="<?= $baseUrl ?>/<?= $slug ?>"><?= $name ?></a>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="min-[900px]:hidden overflow-hidden absolute w-full bg-white z-10 max-h-0 transition-all duration-300 ease-in-out"
                id="mobile-menu">
                <div class="space-y-1">
                    <div
                        class="sm:p-[38px] p-[14px] flex flex-col gap-4 [&>a]:block [&>a]:items-center [&>a]:border [&>a]:border-transparent [&>a]:text-sm [&>a]:font-normal [&>a]:py-[5px] [&>a]:px-2.5 [&>a]:leading-none [&>a]:text-black [&>a]:active:text-custom-green-400">
                        <?php foreach ($links as $slug => $name): ?>
                            <a href="<?= $baseUrl ?>/<?= $slug ?>"><?= $name ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </nav>
    <?php endif; ?>
    </div>