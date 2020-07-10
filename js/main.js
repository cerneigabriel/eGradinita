$(document).ready(function () {
  /**
   * Header Scripts
   */
  $(document).on("click", ".navbarmobile_dropdown_toggler", function (event) {
    event.preventDefault();
    let icon = $(this).find(".fas");

    if ($(this).parent().hasClass("open")) {
      $(this)
        .parent()
        .find(".fas")
        .each(function () {
          this.className = "fas fa-chevron-down";
        });
      $(this).parent().removeClass("open");
      $(this)
        .parent()
        .find(".navbarmobile_dropdown")
        .each(function () {
          $(this).removeClass("open");
        });
    } else {
      this.querySelector(".fas").className = "fas fa-chevron-up";
      $(this).parent().addClass("open");
    }
  });

  $(document).on(
    "click",
    ".navbarmobile_header_close, .navbarmobile_menu_overlay, .navbarmobile_menu_toggler",
    function (event) {
      event.preventDefault();
      $(".navbarmobile_menu").toggleClass("open");
      $("body").toggleClass("overflow-hidden");
    }
  );
  /**
   * Header Scripts End
   */

  /**
   * Combobox Scripts
   */
  // Get data
  $(".combobox").each(function () {
    var combobox = $(this);
    var comboboxID = combobox.attr("id");
    var combobox_data = [];

    combobox.find(".combobox_item").each(function () {
      combobox_data.push({
        value: $(this).data("value"),
        title: $(this).html(),
      });
    });

    function comboboxItem(value, title, active, disabled = false) {
      return `<li class="combobox_item${
        active ? " active" : ""
      }" data-value="${value}" ${disabled ? 'disabled="disabled"' : ""}>${title}</li>`;
    }

    function renderComboboxData(elem, data, setup = false) {
      let activeElement = false;
      if (setup) activeElement = true;

      $(elem).find(".combobox_list").html("");
      data.forEach((item) => {
        $(elem)
          .find(".combobox_list")
          .append(
            comboboxItem(item.value, item.title, activeElement, item.disabled)
          );
        activeElement = false;
      });
    }

    renderComboboxData(combobox, combobox_data, true);

    combobox.on("keyup", ".combobox_input", function () {
      if (!$(this).parents(".combobox").hasClass("open"))
        $(this).parents(".combobox").addClass("open");
      var filter = $(this).val().toUpperCase();
      let data = [];

      combobox_data.forEach((item) => {
        value = item.title.toUpperCase();

        if (value.toUpperCase().indexOf(filter) > -1) {
          data = data.filter((val) => {
            return val.value !== "no_result";
          });
          data.push(item);
        }

        if (data.length == 0)
          data.push({
            value: "no_result",
            title: "No results found.",
            disabled: true,
          });
      });

      renderComboboxData(combobox, data);
    });

    combobox.on("click", ".combobox_toggler", function () {
      $(".combobox.open").removeClass("open");
      $(this).parents(".combobox").toggleClass("open");
    });

    combobox.on("click", ".combobox_input", function () {
      $(".combobox.open").removeClass("open");
      $(this).parents(".combobox").addClass("open");
    });

    combobox.on("click", ".combobox_item", function () {
      let parent = $(this).parents(".combobox");
      let value = $(this).data("value");

      if (!$(this).attr("disabled")) {
        parent.removeClass("open");
        $(this).parent().find(".combobox_item").removeClass("active");
        renderComboboxData(combobox, combobox_data);
        parent
          .find('[data-value="' + value)
          .first()
          .addClass("active");
        parent.find(".combobox_input").val($(this).html());
      }
    });

    $(window).on("click", function (event) {
      let cbTarget = $(event.target).parents(".combobox");
      let cbOpen = $(".combobox.open");

      if (cbOpen.length == 0 || cbTarget.length == 0)
        cbOpen.removeClass("open");
    });
  });
  /**
   * Combobox Scripts End
   */
});
