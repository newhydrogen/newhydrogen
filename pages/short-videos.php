<?php $videos = include "./data/podcast-data.php"; ?>
<section class=" xl:pt-[100px] sm:pt-20 pt-14 pb-[125px] mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4">
    <div class="text-center mb-[138px]">
        <h2 class='text-[45px] text-black font-normal mb-[71px]'>
            Short Videos
        </h2>
    </div>

    <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-6">

        <?php
        $filteredCommentaryNews = array_filter($videos, function ($item) {
            return $item['category'] === 'short-video' && $item['display'] === true;
        });

        foreach ($filteredCommentaryNews as $video) {
            $title = $video['date'] ? "{$video['date']} - {$video['title']}" : $video['title'];
            $thumbnailUrl = "//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg";
            $videoLink = "videos/short-videos/{$video['slug']}";

            echo "<div class=\"mb-9\">
            <a href=\"$videoLink\">
                <div class=\"relative\">
                    <img src=\"$thumbnailUrl\" alt=\"short-video\">
                    <button class=\"absolute left-1/2  sm:top-[41%] top-[42%] -translate-x-1/2 -translate-y-1/2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"56\" height=\"56\" viewBox=\"0 0 56 56\" fill=\"none\">
                            <circle cx=\"27.8926\" cy=\"28.1125\" r=\"27.5\" fill=\"white\" fill-opacity=\"0.8\"></circle>
                            <path d=\"M39.1753 28.1126L21.5537 38.2864L21.5537 17.9387L39.1753 28.1126Z\" fill=\"black\"></path>
                        </svg>
                    </button>
                    <h6 class=\" xl:text-xl font-bold leading-[1.3] text-lg pt-5\">$title</h6>
                </div>
            </a>
        </div>
            ";
        }
        ?>



    </div>
    <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-6">
        <div class="mb-9">
            <a href="#">
                <div class="relative">
                    <img src="./assets/images/short-video.png" alt="short-video">
                    <button class="absolute left-1/2  sm:top-[41%] top-[42%] -translate-x-1/2 -translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                            <circle cx="27.8926" cy="28.1125" r="27.5" fill="white" fill-opacity="0.8"></circle>
                            <path d="M39.1753 28.1126L21.5537 38.2864L21.5537 17.9387L39.1753 28.1126Z" fill="black"></path>
                        </svg>
                    </button>
                    <h6 class=" xl:text-xl font-bold leading-[1.3] text-lg pt-5">January 13, 2025 - NewHydrogen News Commentary</h6>
                </div>
            </a>
        </div>

    </div>
</section>