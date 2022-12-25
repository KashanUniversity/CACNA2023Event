// Elements
const elm_arrow_icon = document.querySelector(".arrow-icon");

// Events
elm_arrow_icon.addEventListener("click", () => {
    window.scrollBy({
        top: window.innerHeight,
        left: 0,
        behavior: "smooth"
    });
});
