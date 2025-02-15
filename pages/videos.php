<?php
$GLOBALS['title'] = "videos |  newhydrogen-newdesign";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/podcast-data.php";


?>

<section class=" xl:pt-[100px] pt-20 pb-[135px]">
    <div class="mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4 ">
 

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
            <div class="relative mb-[32px]">
                <a href="#news-commentary">
                    <div>
                        <img src="./assets/images/cat-bg-1.png" class='max-w-full h-auto' alt="">
                    </div>
                    <span
                        class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full min-h-[88px] flex items-center justify-center bg-[#ffffffcc] text-[#091113] text-[35px] font-medium leading-[100%] text-center">
                        News <br> Commentary
                    </span>
                </a>
            </div>

            <div class="relative mb-[32px]">
                <a href="#ceo-podcast">
                    <div>
                        <img src="./assets/images/cat-bg-2.png" class='max-w-full h-auto' alt="">
                    </div>
                    <span
                        class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full min-h-[88px] flex items-center justify-center bg-[#ffffffcc] text-[#091113] text-[35px] font-medium leading-[100%] text-center">
                        CEO Podcast
                    </span>
                </a>
            </div>

            <div class="relative mb-[32px]">
                <a href="#short-video">
                    <div>
                        <img src="./assets/images/cat-bg-3.png" class='max-w-full h-auto' alt="">
                    </div>
                    <span
                        class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full min-h-[88px] flex items-center justify-center bg-[#ffffffcc] text-[#091113] text-[35px] font-medium leading-[100%] text-center">
                        Short Videos
                    </span>
                </a>
            </div>


        </div>

        <section class="pt-[90px]">

            <div class="flex justify-between items-baseline pb-[37px] mb-[58px] border-b border-[#cbcbcb]"
                id='news-commentary'>
                <h3 class=" xl:text-[50px] md:text-5xl text-3xl font-extralight leading-[1.1]">News Commentary</h3>
                <a href='news-commentary' class="flex items-center gap-3 ">
                    <span class="   text-[13px] leading-7 font-bold">See All</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                        <path
                            d="M6 0.980469L4.9425 1.97637L9.1275 5.92464H0V7.33727H9.1275L4.9425 11.2855L6 12.2814L12 6.63095L6 0.980469Z"
                            fill="#3B9C0C"></path>
                    </svg>
                </a>
            </div>

            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[25px]">

                <?php
                $filteredCommentaryNews = array_filter($videos, function ($item) {
                    return $item['category'] === 'news-commentary' && $item['display'] === true;
                });
                $latestCompanyNews = array_slice($filteredCommentaryNews, 0, 3);

                foreach ($latestCompanyNews as $video) {
                    $title = $video['date'] ? "{$video['date']} - {$video['title']}" : $video['title'];
                    $thumbnailUrl = "//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg";
                    $videoLink = "videos/news-commentary/{$video['slug']}";

                    echo "<div class=\"mb-[13px] m-auto\">
                            <a href=\"$videoLink\">
                                <div class=\"relative\">
                                    <img src=\"$thumbnailUrl\" alt=\"news-commentary\">
                                    <button class=\"absolute left-1/2 sm:top-[41%] top-[42%] -translate-x-1/2 -translate-y-1/2\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\">
                                            <circle cx=\"32\" cy=\"32\" r=\"32\" fill=\"#4fe653\"></circle>
                                            <path d=\"M38 32.5L27 39L27 26L38 32.5Z\" fill=\"black\"></path>
                                        </svg>
                                        <a href=\"$videoLink\" class='absolute top-0 right-0 left-0 h-full w-full'></a>
                                    </button>
                                    <h6 class=\"sm:text-xl font-bold leading-[1.3] text-lg pt-5\">$title</h6>
                                </div>
                            </a>
                        </div>";
                }
                ?>


            </div>
        </section>


        <section class="pt-[90px]">
            <div class="flex justify-between items-baseline pb-[37px]   mb-[58px] border-b border-[#cbcbcb]"
                id='ceo-podcast'>
                <h3 class=" xl:text-[50px] md:text-5xl text-3xl font-extralight leading-[1.1]">CEO Podcast</h3>
                <a href='ceo-podcast' class="flex items-center gap-3 ">
                    <span class="   text-[13px] leading-7 font-bold">See All</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                        <path
                            d="M6 0.980469L4.9425 1.97637L9.1275 5.92464H0V7.33727H9.1275L4.9425 11.2855L6 12.2814L12 6.63095L6 0.980469Z"
                            fill="#3B9C0C"></path>
                    </svg>
                </a>
            </div>
            <div class="grid lg:grid-cols-3 items-start sm:grid-cols-2 grid-cols-1 gap-[25px]">
                <?php
                $filteredCommentaryNews = array_filter($videos, function ($item) {
                    return $item['category'] === 'ceo-podcast' && $item['display'] === true;
                });
                $latestCompanyNews = array_slice($filteredCommentaryNews, 0, 3);

                foreach ($latestCompanyNews as $video) {
                    $title = $video['date'] ? "{$video['date']} - {$video['title']}" : $video['title'];
                    $thumbnailUrl = "//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg";
                    $videoLink = "videos/ceo-podcast/{$video['slug']}";

                    echo "<div class=\"mb-[13px] \">
            <a href=\"$videoLink\">
                <div class=\"relative\">
                    <img src=\"$thumbnailUrl\" alt=\"ceo-podcast\">
                    <button class=\"absolute left-1/2 sm:top-[41%] top-[42%] -translate-x-1/2 -translate-y-1/2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\">
                            <circle cx=\"32\" cy=\"32\" r=\"32\" fill=\"#4fe653\"></circle>
                            <path d=\"M38 32.5L27 39L27 26L38 32.5Z\" fill=\"black\"></path>
                        </svg>
                        <a href=\"$videoLink\" class='absolute top-0 right-0 left-0 h-full w-full'></a>
                    </button>
                    <h6 class=\"sm:text-xl font-bold leading-[1.3] text-lg pt-5\">$title</h6>
                </div>
            </a>
        </div>";
                }
                ?>
            </div>

        </section>
        <section class="py-[90px]">
            <div class="flex justify-between items-baseline pb-[37px]   mb-[58px] border-b border-[#cbcbcb]"
                id='short-video'>
                <h3 class=" xl:text-[64px] md:text-5xl text-3xl font-extralight leading-[1.1]">Short Videos</h3>
                <a href='https://www.youtube.com/@NewHydrogenEnergy/shorts' target='_blank'
                    class="flex items-center gap-3 ">
                    <span class="   text-[13px] leading-7 font-bold">See All</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                        <path
                            d="M6 0.980469L4.9425 1.97637L9.1275 5.92464H0V7.33727H9.1275L4.9425 11.2855L6 12.2814L12 6.63095L6 0.980469Z"
                            fill="#3B9C0C"></path>
                    </svg>
                </a>
            </div>
            <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-6">

                <?php
                $filteredCommentaryNews = array_filter($videos, function ($item) {
                    return $item['category'] === 'short-video' && $item['display'] === true;
                });
                $latestCompanyNews = array_slice($filteredCommentaryNews, 0, 5);

                foreach ($latestCompanyNews as $video) {
                    $title = $video['date'] ? "{$video['date']} - {$video['title']}" : $video['title'];
                    $thumbnailUrl = "//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg";
                    $videoLink = "videos/short-videos/{$video['slug']}";

                    echo "<div class=\"mb-9 \">
            <a href=\"$videoLink\">
                <div class=\"relative  h-[492px]\">
                    <img src=\"$thumbnailUrl\" alt=\"short-video\" class=\"max-w-full h-full object-cover\">
                    <button class=\"absolute left-1/2 sm:top-[41%] top-[42%] -translate-x-1/2 -translate-y-1/2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\">
                            <circle cx=\"32\" cy=\"32\" r=\"32\" fill=\"#4fe653\"></circle>
                            <path d=\"M38 32.5L27 39L27 26L38 32.5Z\" fill=\"black\"></path>
                        </svg>
                        <a href=\"$videoLink\" class='absolute top-0 right-0 left-0 h-full w-full'></a>
                    </button>
                    <h6 class=\"sm:text-xl font-bold leading-[1.3] text-lg pt-5\">$title</h6>
                </div>
            </a>
        </div>";
                }
                ?>
            </div>
        </section>
    </div>
</section>