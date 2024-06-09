var carousel = document.getElementById("carouselExampleSlidesOnly");

carousel.addEventListener("mouseenter", function () {
    this.classList.add("hover");
});

carousel.addEventListener("mouseleave", function () {
    this.classList.remove("hover");
});

var sections = document.querySelectorAll(".sectionDashboard");

sections.forEach(function (section) {
    section.addEventListener("mouseenter", function () {
        this.classList.add("hover");
    });

    section.addEventListener("mouseleave", function () {
        this.classList.remove("hover");
    });
});
