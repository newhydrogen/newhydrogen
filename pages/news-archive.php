<?php
$GLOBALS['title'] = "News | NewHydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$news = include "./data/news-data.php";
$videos = include "./data/podcast-data.php";
?>

<section class="mt-[100px] mb-[133px] mx-auto lg:max-w-screen-lg xl:max-w-screen-xl px-2 sm:px-4">
    <div class="flex justify-between items-baseline mb-9">
        <h3 class="lg:text-[50px] sm:text-[42px] text-2xl font-extralight leading-[1.1]">Press Releases</h3>
        <div class="flex items-center sm:gap-3 gap-0">
            <a class="inline-block text-[15px] leading-7 font-bold" href="./newsroom">Newsroom</a>
            <span class="lg:text-2xl text-[15px] leading-7 font-semibold text-custom-purple-light-200">></span>
            <h5 class="text-[15px] leading-7 font-semibold text-[#858585]">Press Releases</h5>
        </div>
    </div>

    <div class="grid xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
        <?php
        $filteredPressleaseNews = array_filter($news, function ($item) {
            return $item['category'] === 'pressrelease';
        });

        // Show all filtered press release news articles
        $latestIndustryNews = $filteredPressleaseNews;
        foreach ($latestIndustryNews as $item) {
            echo "
           <div class=\"lg:pt-[31px] lg:pr-9 lg:pb-[34px] lg:pl-[34px] p-6 border border-text-custom-purple-light-100 rounded-[30px] bg-custom-white-100 flex flex-col justify-between hover:bg-white\">
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
        }
        ?>
    </div>
</section>