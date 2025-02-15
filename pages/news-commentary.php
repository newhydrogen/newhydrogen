<?php
$GLOBALS['title'] = "videos |  newhydrogen-newdesign";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/podcast-data.php";


?>

<section class=" xl:pt-[100px] pt-20 pb-[135px]">
    <div class="mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4 ">
        <div class="text-center mb-[138px]">
            <h2 class='text-[45px] text-[#091113] font-normal mb-[71px]'>
                News Commentary
            </h2>
        </div>
        <!-- <div class="flex justify-between items-baseline mb-[34px]">
            <h3 class=" xl:text-[64px] md:text-5xl text-3xl font-extralight leading-[1.1]">News Commentary</h3>
            <div class="flex items-start sm:gap-3 gap-0">
                <h5 class="  lg:text-2xl sm:text-xl text-lg leading-7 font-bold">Newsroom</h5>
                <span class=" lg:text-2xl sm:text-xl text-lg leading-7 font-semibold text-custom-purple-light-200">></span>
                <h5 class=" lg:text-2xl sm:text-xl text-lg leading-7 font-semibold text-custom-purple-light-200">Press Releases</h5>
            </div>
        </div> -->


        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[25px] ">

            <?php
            $filteredCommentaryNews = array_filter($videos, function ($item) {
                return $item['category'] === 'news-commentary' && $item['display'] === true;
            });

            foreach ($filteredCommentaryNews as $video) {
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


        <!-- <div class="flex justify-center items-center mt-[45px]">
            <a class="bg-custom-white-100 w-full text-center text-black text-lg font-semibold py-[11px] rounded-[58px] border border-[#D9D3E1] "
                href="#">Load More</a>
        </div> -->
    </div>
</section>