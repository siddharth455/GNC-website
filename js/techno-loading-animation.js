// Fest words floating
document.addEventListener("DOMContentLoaded", function() {
    const words = ["Jashan2026", "CollegeFest", "Dehradun", "InterCollege", "CulturalNight", "LiveConcert", "StarNight", "TechEvents", "SportsMeet", "FashionShow", "TalentHunt", "BattleOfBands", "DanceFaceoff", "Photography",  "YouthFestival", "DJNight", "Workshops", "FunGames", "Celebration"];
    const container = document.querySelector('.tj-floating-words');

    if (!container) {
        console.error("TJ: Floating words container not found!");
    }

    function createWord() {
        if (!container) return;
        const span = document.createElement('span');
        span.textContent = words[Math.floor(Math.random() * words.length)];
        span.style.left = Math.random() * 100 + "vw";
        span.style.animationDuration = (3 + Math.random() * 5) + "s";
        span.style.fontSize = (12 + Math.random() * 12) + "px";
        container.appendChild(span);
        setTimeout(() => span.remove(), 8000);
    }
    
    // Start creating words immediately
    if (container) {
        setInterval(createWord, 200);
    }

    // Lock scroll while loading
    document.body.classList.add("tj-no-scroll");

    // Loading bar logic
    let progress = 0;
    const loadingFill = document.getElementById("tj-bar-fill");
    const loadingText = document.getElementById("tj-progress-text");
    const loadingScreen = document.getElementById("tj-loader");
    const mainContent = document.getElementById("tj-main-wrapper");

    if (!loadingFill || !loadingText || !loadingScreen || !mainContent) {
        console.error("TJ: One or more loading screen elements missing!");
        console.log({loadingFill, loadingText, loadingScreen, mainContent});
    }

    const interval = setInterval(() => {
        if (progress < 100) {
            progress++;
            if (loadingFill) loadingFill.style.width = progress + "%";
            if (loadingText) loadingText.textContent = "Loading " + progress + "%";
        } else {
            clearInterval(interval);
            if (loadingText) loadingText.textContent = "Welcome to Technojashan 2026";

            // Fade out loader
            setTimeout(() => {
                if (loadingScreen) {
                    loadingScreen.classList.add("tj-is-hidden");

                    setTimeout(() => {
                        loadingScreen.style.display = "none";

                        // ✅ Unlock scroll
                    document.body.classList.remove("tj-no-scroll");

                    // Make content visible
                    if (mainContent) {
                        mainContent.classList.add("tj-is-visible");
                        
                        // Initialize Hero Banner Features
                        initHeroBanner();
                        
                        // Initialize Counter Animation
                        initCounters();
                    }
                }, 50);
            }
        }, 500);
    }
}, 30); // Slowed down slightly for better visual effect

    // --- Counter Animation ---
    function initCounters() {
        const counters = document.querySelectorAll('.tj-counter');
        const speed = 200; // The lower the slower

        const animateCounter = (counter) => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;

                // Lower inc means slower and more precise
                const inc = target / speed;

                if (count < target) {
                    // Add inc to count and output in counter
                    counter.innerText = Math.ceil(count + inc);
                    // Call function every ms
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        };

        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            observer.observe(counter);
        });
    }

    // --- Hero Banner Functionality ---
    function initHeroBanner() {
        // 1. Countdown Timer
        const targetDate = new Date("April 28, 2026 00:00:00").getTime();
        
        const countdownTimer = setInterval(function() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            const d = Math.floor(distance / (1000 * 60 * 60 * 24));
            const h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const s = Math.floor((distance % (1000 * 60)) / 1000);

            if (document.getElementById("days")) {
                document.getElementById("days").innerText = d.toString().padStart(2, '0');
                document.getElementById("hours").innerText = h.toString().padStart(2, '0');
                document.getElementById("minutes").innerText = m.toString().padStart(2, '0');
                document.getElementById("seconds").innerText = s.toString().padStart(2, '0');
            }

            if (distance < 0) {
                clearInterval(countdownTimer);
                if (document.getElementById("tj-countdown")) {
                    document.getElementById("tj-countdown").innerHTML = "<div class='tj-countdown-item'><span class='tj-countdown-value'>LIVE</span></div>";
                }
            }
        }, 1000);

        // 2. Play/Pause Toggle
        const toggleBtn = document.getElementById("video-toggle");
        const iconPause = document.getElementById("icon-pause");
        const iconPlay = document.getElementById("icon-play");

        let player;

        // Function to handle player toggle
        function toggleVideo() {
            if (!player) return;
            
            const state = player.getPlayerState();
            if (state === 1) { // 1 is Playing
                player.pauseVideo();
                iconPause.classList.add("d-none");
                iconPlay.classList.remove("d-none");
                if (toggleBtn) toggleBtn.title = "Play";
            } else {
                player.playVideo();
                iconPause.classList.remove("d-none");
                iconPlay.classList.add("d-none");
                if (toggleBtn) toggleBtn.title = "Pause";
            }
        }

        // Initialize Player when API is ready
        if (toggleBtn) {
            // Check if API is already loaded
            if (typeof YT !== 'undefined' && YT.Player) {
                player = new YT.Player('tj-hero-video-iframe');
                toggleBtn.addEventListener("click", toggleVideo);
            } else {
                // Wait for API to be ready
                window.onYouTubeIframeAPIReady = function() {
                    player = new YT.Player('tj-hero-video-iframe');
                    toggleBtn.addEventListener("click", toggleVideo);
                };
            }
        }
    }
});