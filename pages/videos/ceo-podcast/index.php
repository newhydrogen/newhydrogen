<?php
$basePath = __DIR__ . '/../../../data/';
// Get the video slug from URL
$slug = $_GET['slug'] ?? null;

if ($slug) {
    $videos = include $basePath . '/podcast-data.php';
    $category = basename(__DIR__);

    // Find the video matching the slug
    $filteredVideos = array_filter($videos, function ($item) use ($slug, $category) {
        return $item['category'] === $category && strtolower($item['slug']) === strtolower($slug);
    });


    if (!empty($filteredVideos)) {
        foreach ($filteredVideos as $video) {
            echo '
            <section class="xl:pt-[100px] pt-6 sm:pt-20 pb-[135px]">
                <div class="mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4">
                    <h1 class="max-w-[950px] mx-auto w-full text-[32px] sm:text-[50px] text-center">' . htmlspecialchars($video['title']) . '</h1>
                   <div class="mt-12 sm:mt-[89px]">
                        <iframe width="560" height="315"  class="h-64 sm:h-[600px] w-full" src="https://www.youtube.com/embed/' . htmlspecialchars($video['videoID']) . '?autoplay=1" 
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                            encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                    </div> 
                </div>
            </section>';
        }
    } else {
        echo '<p class="text-center text-red-500">No matching video found.</p>';
    }
} else {
    echo '<p class="text-center text-red-500">Invalid request.</p>';
}
?>