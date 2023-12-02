<?php
$GLOBALS['title'] = "Videos |  Newhydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "../data/podcast-data.php";
include('../header.php'); ?>

<section class="videocat">
    <div class="container">
        <div class="catlatest-heading">
            <h2>Videos</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="trend-video">
                    <div class="trend-video-thumbnail">
                        <img src="https://img.youtube.com/vi/9oXYTdFh6Pw/maxresdefault.jpg" alt="thumbnail">
                        <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                            <circle cx='32' cy='32' r='32' fill='#4fe653' />
                            <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black' />
                        </svg>
                        <a href="/thermoloop-video"></a>
                    </div>
                    <h4>NewHydrogen Reveals the Key to Its <br> Breakthrough Technology</h4>
                </div>
            </div>
        </div>

        <div class="row gx-lg-4">
            <div class="col-lg-4">
                <div class="videocat-box">
                    <a href="#news-commentary">
                        <div class="videocat-bg">
                            <img src="../assets/img/cat-bg-1.png" alt="cat">
                        </div>
                        <span>News <br> Commentary</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="videocat-box">
                    <a href="#ceo-podcast">
                        <div class="videocat-bg">
                            <img src="../assets/img/cat-bg-2.png" alt="cat">
                        </div>
                        <span>CEO Podcast</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="videocat-box">
                    <a href="#short-videos">
                        <div class="videocat-bg">
                            <img src="../assets/img/cat-bg-3.png" alt="cat">
                        </div>
                        <span>Short Videos</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="catlatest" id="news-commentary">
    <div class="container">
        <div class="catlatest-heading">
            <h2>News Commentary</h2>
            <a href="./news-commentary">See All <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                    <path d="M6 0.980469L4.9425 1.97637L9.1275 5.92464H0V7.33727H9.1275L4.9425 11.2855L6 12.2814L12 6.63095L6 0.980469Z" fill="#3B9C0C" />
                </svg></a>
        </div>
        <div class="row">
            <?php
            $filteredCommentaryNews = array_filter($videos, function ($item) {
                return $item['category'] === 'news-commentary' && $item['display'] === true;
            });
            $latestCompanyNews = array_slice($filteredCommentaryNews, 0, 3);
            foreach ($latestCompanyNews as $video) {
                if($video['date']){
                    $title = $video['date']. " - " .$video['title'];
                } else {
                    $title = $video['title'];
                }
                echo "<div class=\"col-lg-4\">
                <div class=\"catlatest-item\">
                    <div class=\"catlatest-thumbnail\">
                        <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                        <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                        <circle cx='32' cy='32' r='32' fill='#4fe653'/>
                        <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                    </svg>
                    <a href=\"news-commentary/{$video['slug']}\"></a>
                    </div>
                    <h4>$title</h4>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
</section>


<section class="catlatest" id="ceo-podcast">
    <div class="container">
        <div class="catlatest-heading">
            <h2>CEO Podcast</h2>
            <a href="./ceo-podcast">See All <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                    <path d="M6 0.980469L4.9425 1.97637L9.1275 5.92464H0V7.33727H9.1275L4.9425 11.2855L6 12.2814L12 6.63095L6 0.980469Z" fill="#3B9C0C" />
                </svg></a>
        </div>
        <div class="row">
            <?php
            $filteredCEOPodcast = array_filter($videos, function ($item) {
                return $item['category'] === 'ceo-podcast' && $item['display'] === true;
            });

            $latestCEOPodcast = array_slice($filteredCEOPodcast, 0, 3);
            foreach ($latestCEOPodcast as $video) {
                if($video['date']){
                    $title = $video['date']. " - " .$video['title'];
                } else {
                    $title = $video['title'];
                }
                echo "<div class=\"col-lg-4\">
                <div class=\"catlatest-item\">
                    <div class=\"catlatest-thumbnail\">
                        <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                        <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                        <circle cx='32' cy='32' r='32' fill='#4fe653'/>
                        <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                    </svg>
                    <a href=\"ceo-podcast/{$video['slug']}\"></a>
                    </div>
                    <h4>$title</h4>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
</section>


<section class="catlatest" id="short-videos">
    <div class="container">
        <div class="catlatest-heading">
            <h2>Short Videos</h2>
            <a href="./short-videos">See All <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                    <path d="M6 0.980469L4.9425 1.97637L9.1275 5.92464H0V7.33727H9.1275L4.9425 11.2855L6 12.2814L12 6.63095L6 0.980469Z" fill="#3B9C0C" />
                </svg></a>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            <?php
            $filteredShortVideos = array_filter($videos, function ($item) {
                return $item['category'] === 'short-video' && $item['display'] === true;
            });
            $latestShortVideos = array_slice($filteredShortVideos, 0, 5);
            foreach ($latestShortVideos as $video) {
                if($video['date']){
                    $title = $video['date']. " - " .$video['title'];
                } else {
                    $title = $video['title'];
                }
                echo "<div class=\"col\">
                <div class=\"short-item\">
                    <div class=\"short-item-thumbnail\">
                    <a href=\"short-videos/{$video['slug']}\"></a>
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


<div class="podcast-newsletter">
    <div class="container">
        <form action="./php/subscriber.php" method="POST" autocomplete="off">
            <input type="email" name="email" id="email" placeholder="Subscribe to our podcast" class="form-control">
            <button class="theme-btn" type="submit">Go</button>
        </form>

    </div>

</div>

<?php
include('../footer.php'); ?>