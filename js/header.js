$(document).ready(function () {
  $(".navbarmobile_dropdown_toggler").each(function () {
    this.addEventListener("click", function (event) {
      event.preventDefault();
      let icon = this.querySelector(".fas");

      if (this.parentElement.classList.contains("open")) {
        this.parentElement
          .querySelectorAll(".fas")
          .forEach((fas) => (fas.className = "fas fa-chevron-down"));
        this.parentElement.classList.remove("open");
        this.parentElement
          .querySelectorAll(".navbarmobile_dropdown")
          .forEach((dropdown) => dropdown.classList.remove("open"));
      } else {
        this.querySelector(".fas").className = "fas fa-chevron-up";
        this.parentElement.classList.add("open");
      }
    });
  });

  $(
    ".navbarmobile_header_close, .navbarmobile_menu_overlay, .navbarmobile_menu_toggler"
  ).each(function () {
    this.addEventListener("click", function (event) {
      event.preventDefault();
      document.querySelector(".navbarmobile_menu").classList.toggle("open");
    });
  });
});
