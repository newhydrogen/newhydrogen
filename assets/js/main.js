$(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 10) {
            $(".header-top").addClass("scrolled");
        } else {
            $(".header-top").removeClass("scrolled");
        }
    });

    // Show newsletter modal for specific 
    var allowedPages = ["index.php", "investors", "3reasons", "why-thermoloop"];
    function isHomepage() {
        return window.location.pathname === "/" || window.location.pathname === "/index.php";
    }
    function getCurrentPage() {
        var path = window.location.pathname;
        return path.endsWith("/") ? "index.php" : path.split("/").pop();
    }
    var currentPage = getCurrentPage();
    if (allowedPages.includes(currentPage) || isHomepage()) {
        var hasSubmitted = localStorage.getItem('emailSubmitted');
        if (!hasSubmitted) {
            setTimeout(function () {
                $('#investModal').modal('show');
                $('body').addClass('no-scroll');
            }, 5000);
        }

        $('#jotformForm').on('submit', function (e) {
            e.preventDefault();
            $('.invest-sbmit-btn').hide();
            $('.invest-modal .spinner-border').fadeIn().css("display", "inline-block");
            var formData = $(this).serialize();
            $.post($(this).attr('action'), formData)
                .done(function (response) {
                    localStorage.setItem('emailSubmitted', 'true');
                    $('.invest-sbmit-btn').fadeIn();
                    $('.invest-modal .spinner-border').hide();
                    $('.invest-alert').fadeIn();
                    setTimeout(function () {
                        $('#investModal').modal('hide');
                        $('body').removeClass('no-scroll');
                    }, 1500);
                })
                .fail(function (xhr, status, error) {
                    console.error(xhr.responseText);
                });
        });
    }

    var myModalEl = document.getElementById('investModal')
    myModalEl.addEventListener('hide.bs.modal', function (event) {
        $('body').removeClass('no-scroll');
    })

    $('.popup-youtube').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        },
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: true,
        fixedBgPos: true,

    });

    $('.dp-carousel-main').slick({
        slidesToShow: 2.4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 9000,
        cssEase: 'linear',
        pauseOnHover: true,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1.5,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });


    const teamModal = new bootstrap.Modal(document.getElementById('team'));
    $('.biography-btn').on('click', function (e) {
        e.preventDefault();
        var title = $(this).parent().find('.team-title').html();
        var decription = $(this).parent().find('.team-description').html();
        $('#team').find('.modal-title').text(title);
        $('#team').find('.modal-body').html(decription);
        teamModal.show();
    });




    $('.cchat-box').each(function (e) {
        var videoSrc = $(this).find('.getThumbnail').attr('href');
        var videoID = videoSrc.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
        var video_thumbnail = $('<img src="//img.youtube.com/vi/' + videoID + '/maxresdefault.jpg" class="object-fit-contain" alt="Cancervax">');
        $(this).find('.getThumbnail').siblings('.cchat-thumbnail').html(video_thumbnail);
    });



});


