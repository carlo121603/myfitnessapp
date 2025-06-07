document.addEventListener("DOMContentLoaded", function () {
  const faqButtons = document.querySelectorAll('[id^="faq-"][id$="-btn"]');
  faqButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const id = this.id.replace("-btn", "");
      const content = document.getElementById(`${id}-content`);
      const icon = document.getElementById(`${id}-icon`);
      if (content.classList.contains("hidden")) {
        content.classList.remove("hidden");
        icon.classList.remove("ri-arrow-down-s-line");
        icon.classList.add("ri-arrow-up-s-line");
      } else {
        content.classList.add("hidden");
        icon.classList.remove("ri-arrow-up-s-line");
        icon.classList.add("ri-arrow-down-s-line");
      }
    });
  });
});
