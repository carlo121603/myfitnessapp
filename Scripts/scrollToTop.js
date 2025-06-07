const backToTopBtn = document.getElementById("backToTopBtn");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 300) {
    backToTopBtn.classList.remove("opacity-0", "invisible");
    backToTopBtn.classList.add("opacity-100", "visible");
  } else {
    backToTopBtn.classList.remove("opacity-100", "visible");
    backToTopBtn.classList.add("opacity-0", "invisible");
  }
});

backToTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
