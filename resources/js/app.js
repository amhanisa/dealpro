// require("./bootstrap");

/* START OF AOS */
import AOS from "aos";

AOS.init({
    offset: 120,
    duration: 600,
    easing: "ease-in-sine",
});
/* END OF AOS */

/* START OF NAVBAR SCROLL*/
let header = document.querySelector(".header");
window.addEventListener("scroll", function () {
    let scrollpos = window.scrollY;

    if (scrollpos >= 40) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
/* END OF NAVBAR SCROLL*/

/* START OF NAVBAR TOGGLE */
let navbarToggle = document.querySelector("#nav-toggler");

let mobileMenu = document.querySelector("#menu");

navbarToggle.addEventListener("click", function () {
    // console.log("asd");
    mobileMenu.classList.toggle("active");
    this.classList.toggle("active");
    document.body.classList.toggle("overflow-y-hidden");
});

/* END OF NAVBAR TOGGLE */

/* START OF DROPDOWN MENU */

function closeDropdown() {
    let openDropdowns = document.querySelectorAll(".dropdown");
    openDropdowns.forEach(function (dropdown) {
        dropdown.classList.remove("active");
    });
}

let dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener("click", function (e) {
        let dropContent = dropdown.querySelector(".dropdown-content");
        let shouldOpen = !dropContent.classList.contains("active");
        // e.preventDefault();

        closeDropdown();
        if (shouldOpen) {
            this.classList.add("active");
        }
        e.stopPropagation();
    });
});

window.onclick = function (event) {
    if (!event.target.matches(".dropdown")) {
        closeDropdown();
    }
};

/* END OF DROPDOWN MENU */

/* START OF YOUTUBE HERO */
const YTPlayer = require("yt-player");
const opts = {
    related: false,
    controls: false,
    keyboard: false,
    annotations: false,
    modestBranding: true,
    captions: false,
};

const playerFrame = document.querySelector("#yt-hero");
if (playerFrame) {
    const player = new YTPlayer("#yt-hero", opts);
    player.mute();
    player.load("DrJZYPGtSFc", true);
    player.setPlaybackQuality("default");

    player.on("unstarted", () => {
        player.play();
    });
    player.on("playing", () => {
        let cover = document.querySelector(".hero-cover");
        cover.classList.add("hidden");
    });
    player.on("ended", () => {
        player.play();
    });
}

/* END OF YOUTUBE HERO */

/* START OF ACCORDION */
let accordions = document.querySelectorAll(".accordion");
accordions.forEach(function (accordion) {
    accordion.addEventListener("click", function (e) {
        let content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            let icon = this.querySelector(".accordion-icon");
            icon.classList.toggle("active");
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            let icon = this.querySelector(".accordion-icon");
            icon.classList.toggle("active");
        }
    });
});
/* END OF ACCORDION */

/* START OF SWIPER */
import Swiper from "swiper";
import SwiperCore, { Navigation, Pagination } from "swiper/core";
import { maxHeight } from "tailwindcss/defaulttheme";
SwiperCore.use([Navigation, Pagination]);
// import "swiper/swiper-bundle.min.css";
/* END OF SWIPER */

/* SWIPER SERVICE*/
const swiperService = new Swiper(".swiper-service", {
    direction: "horizontal",
    slidesPerView: "auto",
    centeredSlides: true,
    // spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
    },
    breakpoints: {
        640: {
            // slidesPerView: 2,
            // spaceBetween: 20,
        },
        768: {
            // slidesPerView: 4,
            // spaceBetween: 40,
        },
        1024: {
            pagination: false,
            centeredSlides: false,
            slidesPerView: 5,
            // spaceBetween: 50,
            noSwiping: true,
            noSwipingClass: ".swiper-service",
        },
    },
});
/* SWIPER SERVICE*/

/* SWIPER NUMBER*/
const swiperNumber = new Swiper(".swiper-number", {
    direction: "horizontal",
    loop: true,

    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
/* SWIPER NUMBER*/

/* SWIPER CLIENT*/
const swiperClient = new Swiper(".swiper-client", {
    direction: "horizontal",
    slidesPerView: 5,
    centeredSlides: true,
    loop: true,
    // spaceBetween: 30,\
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1024: {
            centeredSlides: false,
            slidesPerView: 5,
            // spaceBetween: 50,
        },
    },
});
/* SWIPER CLIENT*/

/* START CONTACT BUBBLE */
let contact = document.querySelector(".contact-bubble");
contact.addEventListener("click", function () {
    toggleContactBubble();
});
let close = this.querySelector(".contact-bubble-close");
close.addEventListener("click", function () {
    toggleContactBubble();
});
function toggleContactBubble() {
    let contact = document.querySelector(".contact-bubble");
    let list = contact.querySelector(".contact-bubble-list");
    contact.classList.toggle("active");

    if (list.style.maxHeight) {
        list.style.maxHeight = null;
    } else {
        list.style.maxHeight = list.scrollHeight + "px";
    }
}
/* END CONTACT BUBBLE */
