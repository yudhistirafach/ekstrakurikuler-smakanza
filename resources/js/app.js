import "./bootstrap";
import Alpine from 'alpinejs';
import AOS from "aos";
import "aos/dist/aos.css"; 

AOS.init();

window.Alpine = Alpine;
Alpine.start();

window.togglePassword = function () {
    const passwordInput = document.getElementById("password");
    const eyeIcon = document.getElementById("eye-icon");

    if (!passwordInput || !eyeIcon) return;

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                d="M13.875 18.825A10.05 10.05 0 0112 19
                   c-4.478 0-8.268-2.943-9.542-7
                   a9.956 9.956 0 012.223-3.592M6.223 6.223
                   A9.956 9.956 0 0112 5
                   c4.478 0 8.268 2.943 9.542 7
                   a9.956 9.956 0 01-4.043 5.197M15 12
                   a3 3 0 11-6 0 3 3 0 016 0z"/>
        `;
    } else {
        passwordInput.type = "password";
        eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12
                   C3.732 7.943 7.523 5 12 5
                   c4.478 0 8.268 2.943 9.542 7
                   -1.274 4.057-5.064 7-9.542 7
                   -4.477 0-8.268-2.943-9.542-7z"/>
        `;
    }
};

document.addEventListener("DOMContentLoaded", () => {
    // Dark Mode Toggle
    document.getElementById("theme-toggle")?.addEventListener("click", () => {
        const html = document.documentElement;
        const isDark = html.classList.toggle("dark");
        localStorage.setItem("theme", isDark ? "dark" : "light");
    });

    // Home Page Image Slider (untuk halaman selain login)
    const images = document.querySelectorAll(".slider-image");
    const indicators = document.querySelectorAll(".indicator");

    // PENGECEKAN: Hanya jalankan jika elemen ada
    if (images.length > 0 && indicators.length > 0) {
        let currentIndex = 0;

        function showImage(index) {
            // Hide all images
            images.forEach((img) => img.classList.remove("opacity-100"));
            images.forEach((img) => img.classList.add("opacity-0"));

            // Show current image
            images[index].classList.remove("opacity-0");
            images[index].classList.add("opacity-100");

            // Update indicators
            indicators.forEach((ind) =>
                ind.classList.remove("bg-white", "w-8")
            );
            indicators.forEach((ind) =>
                ind.classList.add("bg-white/50", "w-2")
            );
            indicators[index].classList.remove("bg-white/50", "w-2");
            indicators[index].classList.add("bg-white", "w-8");
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        }

        // Auto slide every 2 seconds
        setInterval(nextImage, 2000);

        // Initialize first indicator
        showImage(0);
    }

    // Login Page Image Slider
    const loginSlides = document.querySelectorAll(".login-slide");
    const loginIndicators = document.querySelectorAll(".login-indicator");

    // PENGECEKAN: Hanya jalankan jika elemen ada
    if (loginSlides.length > 0 && loginIndicators.length > 0) {
        let loginCurrentIndex = 0;

        function showLoginSlide(index) {
            // Hide all slides
            loginSlides.forEach((slide) => {
                slide.classList.remove("opacity-100");
                slide.classList.add("opacity-0");
            });

            // Show current slide
            loginSlides[index].classList.remove("opacity-0");
            loginSlides[index].classList.add("opacity-100");

            // Update indicators
            loginIndicators.forEach((indicator) => {
                indicator.classList.remove("bg-white", "w-8");
                indicator.classList.add("bg-white/40", "w-2");
            });
            loginIndicators[index].classList.remove("bg-white/40", "w-2");
            loginIndicators[index].classList.add("bg-white", "w-8");
        }

        function nextLoginSlide() {
            loginCurrentIndex = (loginCurrentIndex + 1) % loginSlides.length;
            showLoginSlide(loginCurrentIndex);
        }

        // Auto slide every 2 seconds
        setInterval(nextLoginSlide, 4000);

        // Initialize first slide
        showLoginSlide(0);

    } else {
        console.log("Login slider elements not found on this page");
    }
});
