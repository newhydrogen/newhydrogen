<?php

$videos = include "./data/news-data.php";


?>

<section class="lg:mt-[100px] mt-16 mb-[111px] mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4 ">
    <div class="flex justify-between items-baseline mb-9">
        <h3 class="  lg:text-[64px] md:text-5xl text-4xl  font-extralight leading-[1.1]">Press Releases</h3>
        <a href='news-archive' class="flex items-center gap-3 ">
            <span class="   text-[13px] leading-7 font-bold">See All</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                <path
                    d="M6 0.980469L4.9425 1.97637L9.1275 5.92464H0V7.33727H9.1275L4.9425 11.2855L6 12.2814L12 6.63095L6 0.980469Z"
                    fill="#3B9C0C"></path>
            </svg>
        </a>
    </div>
    <div class="grid xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
        <?php
        $filteredPressleaseNews = array_filter($news, function ($item) {
            return $item['category'] === 'pressrelease';
        });

        // Take the latest 4 industry news articles
        $latestIndustryNews = array_slice($filteredPressleaseNews, 0, 6);
        foreach ($latestIndustryNews as $item) {
            echo "<div class=\"lg:pt-[31px] lg:pr-9 lg:pb-[34px] lg:pl-[34px] p-6 border border-text-custom-purple-light-100 rounded-[30px] bg-custom-white-100 flex flex-col justify-between hover:bg-white\">
                <div>
            <div class=\"flex gap-2 md:mb-[33px] mb-6\">
                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"21\" viewBox=\"0 0 21 21\" fill=\"none\">
  <path d=\"M19.2321 10.8772C19.2321 15.4772 15.4988 19.2105 10.8988 19.2105C6.29876 19.2105 2.56543 15.4772 2.56543 10.8772C2.56543 6.27719 6.29876 2.54385 10.8988 2.54385C15.4988 2.54385 19.2321 6.27719 19.2321 10.8772Z\" stroke=\"#75638E\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
  <path d=\"M13.9898 13.5272L11.4065 11.9855C10.9565 11.7189 10.5898 11.0772 10.5898 10.5522V7.13553\" stroke=\"#75638E\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
</svg>
                <h5 class=\" text-lg leading-6 text-custom-purple-light-100 font-normal\">{$item['date']}</h5>
            </div>
            <h5 class=\" md:text-2xl text-xl leading-6 text-black lg:leading-7 font-bold mb-2\">{$item['title']}</h5>
            <p class=\" line-clamp-[10] md:text-xl text-lg leading-[1.3]\">{$item['excerpt']}</p>
            </div>
            <div class=\"mt-[22px] text-right\">
                <a class=\"transition ease-in-outtransition duration-300 ease-in-out  text-lg leading-6 font-semibold py-[11px] px-[30px] rounded-[58px] bg-transparent hover:bg-custom-green-200 border border-black hover:border-0\" href=\"single-news.php?id={$item['id']}\">Read More</a>
            </div>
        </div>
    ";
        } ?>


    </div>
</section>


<section class="bg-custom-gray-200 pt-[69px] pb-[76px]">
    <div class="mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4 ">
        <div class="flex justify-between items-baseline mb-[35px]">
            <h3 class=" lg:text-[64px] md:text-5xl  sm:text-4xl text-3xl  font-normal leading-[1.1]">News Commentary
            </h3>
            <div class="flex items-start gap-3 ">
                <a class=" lg:text-2xl text-xl leading-7 font-bold">See All</a>
                <div>
                    <img src="./assets/images/arrow-right.png" alt="arrow-right">
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 grid-cols-1 gap-[25px]">
            <div class="sm:m-0 m-auto">
                <a href="#">
                    <div class="relative">
                        <img src="./assets/images/news-commantry1.png" alt="news-commantry1">
                        <button
                            class="absolute left-1/2 md:top-[40%] sm:top-[30%] top-[44%] -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"
                                fill="none">
                                <circle cx="27.8926" cy="28.1125" r="27.5" fill="white" fill-opacity="0.8"></circle>
                                <path d="M39.1753 28.1126L21.5537 38.2864L21.5537 17.9387L39.1753 28.1126Z"
                                    fill="black"></path>
                            </svg>
                        </button>
                        <h6 class=" lg:text-xl text-lg font-bold leading-[1.3] pt-5">January 13, 2025 - NewHydrogen News
                            Commentary</h6>
                    </div>
                </a>
            </div>
            <div class="sm:m-0 m-auto">
                <a href="#">
                    <div class="relative">
                        <img src="./assets/images/news-commantry2.png" alt="news-commantry">
                        <button
                            class="absolute left-1/2 md:top-[40%] sm:top-[30%] top-[44%] -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"
                                fill="none">
                                <circle cx="27.8926" cy="28.1125" r="27.5" fill="white" fill-opacity="0.8"></circle>
                                <path d="M39.1753 28.1126L21.5537 38.2864L21.5537 17.9387L39.1753 28.1126Z"
                                    fill="black"></path>
                            </svg>
                        </button>
                        <h6 class="lg:text-xl text-lg font-bold leading-[1.3] pt-5">January 6, 2025 - NewHydrogen News
                            Commentary</h6>
                    </div>
                </a>
            </div>
            <div class="sm:m-0 m-auto">
                <a href="#">
                    <div class="relative">
                        <img src="./assets/images/news-commantry3.png" alt="news-commantry">
                        <button
                            class="absolute left-1/2 md:top-[40%] sm:top-[30%] top-[44%] -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56"
                                fill="none">
                                <circle cx="27.8926" cy="28.1125" r="27.5" fill="white" fill-opacity="0.8"></circle>
                                <path d="M39.1753 28.1126L21.5537 38.2864L21.5537 17.9387L39.1753 28.1126Z"
                                    fill="black"></path>
                            </svg>
                        </button>
                        <h6 class="lg:text-xl text-lg font-bold leading-[1.3] pt-5">January 2, 2025 - NewHydrogen News
                            Commentary</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="lg:mt-[100px] mt-16 mb-[111px] mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4 ">
    <div class="flex justify-between items-baseline mb-9">
        <h3 class="  lg:text-[64px] md:text-5xl text-4xl  font-extralight leading-[1.1]">White Papers</h3>
    </div>
    <div class="grid xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
        <div class="lg:pt-[31px] lg:pr-9 lg:pb-[34px] lg:pl-[34px] p-6 border border-text-custom-purple-light-100 rounded-[30px] bg-custom-white-100 flex flex-col justify-between hover:bg-white">
            <div>
                <div class="flex gap-2 md:mb-[33px] mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M19.2321 10.8772C19.2321 15.4772 15.4988 19.2105 10.8988 19.2105C6.29876 19.2105 2.56543 15.4772 2.56543 10.8772C2.56543 6.27719 6.29876 2.54385 10.8988 2.54385C15.4988 2.54385 19.2321 6.27719 19.2321 10.8772Z" stroke="#75638E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.9898 13.5272L11.4065 11.9855C10.9565 11.7189 10.5898 11.0772 10.5898 10.5522V7.13553" stroke="#75638E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h5 class=" text-lg leading-6 text-custom-purple-light-100 font-normal">July 03, 2025</h5>
                </div>
                <h5 class=" md:text-2xl text-xl leading-6 text-black lg:leading-7 font-bold mb-2">A Plan to Achieve the Elusive Hydrogen Economy</h5>
            </div>
            <div class="mt-[22px] text-right">
                <a class="transition ease-in-outtransition duration-300 ease-in-out  text-lg leading-6 font-semibold py-[11px] px-[30px] rounded-[58px] bg-transparent hover:bg-custom-green-200 border border-black hover:border-0" href="/assets/pdf/achieving-the-hydrogen-economy.pdf" target="_blank">Read More</a>
            </div>
        </div>


    </div>
</section>