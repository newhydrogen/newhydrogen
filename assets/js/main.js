$(document).ready(function () {
  if ($(".dp-carousel-main").length) {
    $(".dp-carousel-main").slick({
      slidesToShow: 2.4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 9000,
      cssEase: "linear",
      pauseOnHover: true,
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1.5,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
  }

  function isIOS() {
    return /iPad|iPhone|iPod/.test(navigator.userAgent);
  }

  document.querySelectorAll('.vimeo-custom-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.style.display = 'none';

      // Get sibling iframe (previousElementSibling or use parent)
      const wrapper = btn.closest('.video-wrapper');
      const iframe = wrapper.querySelector('iframe');
      const videoId = iframe.dataset.videoId;

      const newSrc = `https://player.vimeo.com/video/${videoId}?controls=1&muted=0&playsinline=1`;
      const newIframe = iframe.cloneNode();
      newIframe.src = newSrc;

      iframe.replaceWith(newIframe);

      const player = new Vimeo.Player(newIframe);
      player.play();
      // if (isIOS()) {
      //   player.setMuted(false).then(() => {
      //     player.setVolume(1).then(() => {
      //       player.play();
      //     });
      //   });
      // } else {
      //   player.setMuted(false);
      //   player.setVolume(1);
      //   player.play();
      // }
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const menuButton = document.querySelector(
    'button[aria-controls="mobile-menu"]'
  );
  const mobileMenu = document.getElementById("mobile-menu");
  const openIcon = menuButton.querySelector("svg.block");
  const closeIcon = menuButton.querySelector("svg.hidden");

  menuButton.addEventListener("click", () => {
    // Toggle the menu visibility
    mobileMenu.classList.toggle("show");

    // Toggle the icons
    closeIcon.classList.toggle("show");
    openIcon.classList.toggle("show");
  });
});

$(".popup-youtube").magnificPopup({
  type: "iframe",
  iframe: {
    markup:
      '<div class="mfp-iframe-scaler">' +
      '<div class="mfp-close"></div>' +
      '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
      "</div>",
    patterns: {
      youtube: {
        index: "youtube.com/",
        id: "v=",
        src: "https://www.youtube.com/embed/%id%?autoplay=1",
      },
    },
  },
  mainClass: "mfp-fade",
  removalDelay: 160,
  preloader: false,
  fixedContentPos: true,
  fixedBgPos: true,
});

$(".popup-vimeo-hash").magnificPopup({
  type: "iframe",
  iframe: {
    markup:
      '<div class="mfp-iframe-scaler">' +
      '<div class="mfp-close"></div>' +
      '<iframe class="mfp-iframe" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>' +
      "</div>",
    patterns: {
      vimeo: {
        // index: 'vimeo.com/',
        // id: '/',
        index: "vimeo.com/",
        id: function (url) {
          var match = url.match(/vimeo\.com\/(\d+)(\?h=[\w]+)/);
          if (match) {
            return match[1] + match[2];
          } else {
            var fallback = url.match(/vimeo\.com\/(\d+)/);
            return fallback ? fallback[1] : null;
          }
        },
        src: "https://player.vimeo.com/video/%id%?autoplay=1",
      },
    },
  },
  mainClass: "mfp-fade",
  removalDelay: 160,
  preloader: false,
  fixedContentPos: true,
});

$(".popup-vimeo").magnificPopup({
  type: "iframe",
  iframe: {
    markup:
      '<div class="mfp-iframe-scaler">' +
      '<div class="mfp-close"></div>' +
      '<iframe class="mfp-iframe" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>' +
      "</div>",
    patterns: {
      vimeo: {
        index: "vimeo.com/",
        id: "/",
        src: "https://player.vimeo.com/video/%id%?autoplay=1",
      },
    },
  },
  mainClass: "mfp-fade",
  removalDelay: 160,
  preloader: false,
  fixedContentPos: true,
});

$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 10) {
    $(".header-top").addClass("scrolled");
  } else {
    $(".header-top").removeClass("scrolled");
  }
});

function toggleAccordion(id) {
  const content = document.getElementById(id);
  const icon = document.getElementById(`icon-${id}`);

  // Close all other accordion items first
  const allAccordionContents = document.querySelectorAll('[id^="accordion-"]');
  const allAccordionIcons = document.querySelectorAll('[id^="icon-accordion-"]');
  
  allAccordionContents.forEach(accordionContent => {
    if (accordionContent.id !== id) {
      accordionContent.classList.add("hidden");
    }
  });
  
  allAccordionIcons.forEach(accordionIcon => {
    if (accordionIcon.id !== `icon-${id}`) {
      accordionIcon.classList.remove("rotate-180");
    }
  });

  // Toggle the clicked accordion
  if (content.classList.contains("hidden")) {
    content.classList.remove("hidden");
    icon.classList.add("rotate-180"); // Add rotation class
  } else {
    content.classList.add("hidden"); // Hide content
    icon.classList.remove("rotate-180"); // Remove rotation class
  }
}

$(".application-popup").magnificPopup({
  type: "inline",
  midClick: true,
  closeBtnInside: true,
  removalDelay: 300,
  mainClass: "mfp-fade",
  callbacks: {
    open: function () {
      jQuery("body").addClass("noscroll");
    },
    close: function () {
      jQuery("body").removeClass("noscroll");
    },
  },
});
