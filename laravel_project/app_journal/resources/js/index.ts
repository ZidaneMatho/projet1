const testimonials = document.querySelectorAll(".testimonial");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

let currentIndex = 0;

function showTestimonial(index: number) {
    testimonials.forEach((t, i) => {
        if (i === index) {
            t.classList.add("active");
        } else {
            t.classList.remove("active");
        }
    });
}

nextBtn?.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % testimonials.length;
    showTestimonial(currentIndex);
});

prevBtn?.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
    showTestimonial(currentIndex);
});
