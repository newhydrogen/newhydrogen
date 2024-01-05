<?php

// Check if HTTPS is set and whether it's "on"
$is_https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';

// Construct the URL for the YouTube search
$protocol = $is_https ? 'https' : 'http';
$current_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$current_url_check = $protocol . "://" . $_SERVER['HTTP_HOST'];
$domain = $_SERVER['HTTP_HOST'];
$showAllVideo = 1;

if ($domain === 'localhost' || $domain === '127.0.0.1') {
    if($current_url !== 'http://localhost/newhydrogen/videos/short-videos/'){
        $showAllVideo = 0;
    }
} else {
    if($current_url !== $current_url_check . '/videos/short-videos/'){
        $showAllVideo = 0;
    }
}

$parts = explode('/', rtrim(parse_url($current_url, PHP_URL_PATH), '/'));
$lastPart = end($parts);
$vedioTitleFromURL = str_replace('-', ' ', $lastPart);

$videos = include "../../data/podcast-data.php";

$filteredCEOPodcastVedios = array_filter($videos, function ($item) use ($lastPart) {
    return $item['category'] === 'short-video' && strtolower($item['slug']) === $lastPart;
});



$GLOBALS['title'] = ucwords($vedioTitleFromURL) . " | Newhydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('../../header.php');
if ($showAllVideo == 1) {
?>


    <section class="videoTSingle">
        <div class="container">
            <div class="videoTSingle-wrap">
                <h3>Short Videos</h3>
            </div>
        </div>
    </section>


    <section class="catlatest pt-0" id="short-videos">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
                <?php
                $filteredShortVideos = array_filter($videos, function ($item) {
                    return $item['category'] === 'short-video' && $item['display'] === true;
                });

                foreach ($filteredShortVideos as $video) {
                    $temp1 = strtolower($video['title']);
                    $string = preg_replace('/[^a-zA-Z0-9\s]/', ' ', $temp1);
                    $string = str_replace(' ', '-', $string);
                    $string = preg_replace('/-+/', '-', $string);
                    if ($video['date']) {
                        $title = $video['date'] . " - " . $video['title'];
                    } else {
                        $title = $video['title'];
                    }
                    echo "<div class=\"col\">
                <div class=\"short-item\">
                    <div class=\"short-item-thumbnail\">
                    <a href=\"{$video['slug']}\"></a>
                        <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                        <circle cx='32' cy='32' r='32' fill='#4fe653'/>
                        <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                    </svg>
                        <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <h4>$title</h4>
                </div>
            </div>";
                }
                ?>
            </div>
        </div>
    </section>



<?php
} else {
    if (count($filteredCEOPodcastVedios) > 0) {
        // There are matching videos in $filteredCEOPodcastVedios
        foreach ($filteredCEOPodcastVedios as $video) {
            // Display the matching videos
            $videoTitle = $video['title'];
            $videoID = $video['videoID'];
            $videoDate = $video['date'];

            echo '
            <section class="podcast-detail">
            <div class="container">
                <div class="podcast-detail-wrap">
                    <h1>' . $videoTitle . ' </h1>
                    <p></p>
                     <div class="podcast-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoID . '?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div> 
                </div>
            </div>
        </section>
            ';
        }
    } else {
        // No matching videos found
        echo 'No matching videos found.';
    }
}

include('../../footer.php'); ?>