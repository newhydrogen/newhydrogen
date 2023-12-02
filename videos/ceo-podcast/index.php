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
    if($current_url !== 'http://localhost/newhydrogen/videos/ceo-podcast/'){
        $showAllVideo = 0;
    }
} else {
    if($current_url !== $current_url_check . '/videos/ceo-podcast/'){
        $showAllVideo = 0;
    }
}

$parts = explode('/', rtrim(parse_url($current_url, PHP_URL_PATH), '/'));
$lastPart = end($parts);
$vedioTitleFromURL = str_replace('-', ' ', $lastPart);


$videos = include "../../data/podcast-data.php";


$filteredCEOPodcastVedios1 = array_filter($videos, function ($item) use ($lastPart) {
    return $item['category'] === 'ceo-podcast' && strtolower($item['slug']) === $lastPart;
});


$GLOBALS['title'] = ucwords($vedioTitleFromURL). " | Newhydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('../../header.php');

if ($showAllVideo == 1) {

?>



    <section class="videoTSingle">
        <div class="container">
            <div class="videoTSingle-wrap">
                <h3>CEO Podcast</h3>

            </div>
        </div>
    </section>

    <section class="podcast allpodcasts">
        <div class="container">
            <div class="row">
                <?php
                $filteredCEOPodcast = array_filter($videos, function ($item) {
                    return $item['category'] === 'ceo-podcast' && $item['display'] === true;
                });
                foreach ($filteredCEOPodcast as $video) {
                    if($video['date']){
                        $title = $video['date']. " - " .$video['title'];
                    } else {
                        $title = $video['title'];
                    }
                    echo "<div class=\"col-lg-4\">
                <div class=\"podcast-item\">
                    <div class=\"podcast-item-thumbnail\"><img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                    <circle cx='32' cy='32' r='32' fill='#4fe653'/>
                    <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                </svg>
                <a href=\"{$video['slug']}\"></a></div>
                    <h2>$title</h2>
                </div>
                </div>";
                }
                ?>
            </div>
        </div>
    </section>

<?php
} else {
    if (count($filteredCEOPodcastVedios1) > 0) {

        foreach ($filteredCEOPodcastVedios1 as $video) {
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
        echo 'No matching videos found.';
    }
}

include('../../footer.php'); ?>