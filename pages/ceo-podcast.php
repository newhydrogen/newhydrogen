<?php
$GLOBALS['title'] = "videos |  newhydrogen-newdesign";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/podcast-data.php";


?>

<section class=" xl:pt-[100px] pt-20 pb-[135px]">
    <div class="mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4 ">
        <div class="text-center mb-[138px]">
            <h2 class='text-[45px] text-black font-normal mb-[71px]'>
                CEO Podcast
            </h2>
        </div>



        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[25px] ">

            <?php
            $filteredCommentaryNews = array_filter($videos, function ($item) {
                return $item['category'] === 'ceo-podcast' && $item['display'] === true;
            });

            foreach ($filteredCommentaryNews as $video) {
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
    </div>
</section>