document.addEventListener("DOMContentLoaded", function () {
    let colortheme = document.querySelector("#color-switcher");

    if (colortheme) {
        colortheme.onclick = function () {
            let currentColor = document.documentElement.getAttribute('color-scheme') || document.documentElement.getAttribute('data-theme');
            if (currentColor === "dark") {
                console.log("light");
            }
            if (currentColor === "light") {
                console.log("dark");
            }
        };
    }

    // Lazy load and play/pause the menu video on demand
    let menuToggle = document.querySelector(".mxd-menu__toggle");
    let menuVideo = document.querySelector("#menu-video");
    if (menuToggle && menuVideo) {
        let isLoaded = false;
        menuToggle.addEventListener("click", function () {
            setTimeout(function () {
                let hamburger = document.querySelector(".mxd-menu__hamburger");
                if (hamburger && hamburger.classList.contains("active")) {
                    if (!isLoaded) {
                        let sources = menuVideo.querySelectorAll("source");
                        sources.forEach(function (source) {
                            if (source.dataset.src) {
                                source.src = source.dataset.src;
                            }
                        });
                        menuVideo.load();
                        isLoaded = true;
                    }
                    menuVideo.play().catch(function(e) {
                        console.log("Video play failed: ", e);
                    });
                } else {
                    menuVideo.pause();
                }
            }, 50);
        });
    }

    // General lazy load for other autoplaying videos (like parallax dividers)
    let lazyVideos = [].slice.call(document.querySelectorAll("video.lazy-video"));

    if ("IntersectionObserver" in window) {
        let lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(videoEntry) {
                if (videoEntry.isIntersecting) {
                    let video = videoEntry.target;
                    let sources = video.querySelectorAll("source");
                    sources.forEach(function(source) {
                        if (source.dataset.src) {
                            source.src = source.dataset.src;
                        }
                    });
                    video.load();
                    video.play().catch(function(e) {
                        // ignore play blockages
                    });
                    video.classList.remove("lazy-video");
                    lazyVideoObserver.unobserve(video);
                }
            });
        });

        lazyVideos.forEach(function(lazyVideo) {
            lazyVideoObserver.observe(lazyVideo);
        });
    } else {
        // Fallback for browsers without IntersectionObserver support: load immediately
        lazyVideos.forEach(function(video) {
            let sources = video.querySelectorAll("source");
            sources.forEach(function(source) {
                if (source.dataset.src) {
                    source.src = source.dataset.src;
                }
            });
            video.load();
        });
    }
});
