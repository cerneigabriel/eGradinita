document.querySelectorAll(".NavbarMobile__dropdown__link").forEach((item) => {
  item.addEventListener("click", function (event) {
    event.preventDefault();
    let icon = this.querySelector(".fas");

    if (
      this.parentElement.classList.contains("NavbarMobile__dropdown--active")
    ) {
      this.parentElement
        .querySelectorAll(".fas")
        .forEach((fas) => (fas.className = "fas fa-chevron-down"));
      this.parentElement.classList.remove("NavbarMobile__dropdown--active");
      this.parentElement
        .querySelectorAll(".NavbarMobile__dropdown")
        .forEach((dropdown) =>
          dropdown.classList.remove("NavbarMobile__dropdown--active")
        );
    } else {
      this.querySelector(".fas").className = "fas fa-chevron-up";
      this.parentElement.classList.add("NavbarMobile__dropdown--active");
    }
  });
});

document
  .querySelectorAll(
    ".NavbarMobile__menu__close, .NavbarMobile__menu__overlay, .NavbarMobile__menu__toggler"
  )
  .forEach((item) => {
    item.addEventListener("click", function (event) {
      event.preventDefault();
      document
        .querySelector(".NavbarMobile__menu")
        .classList.toggle("NavbarMobile__menu--open");
    });
  });
