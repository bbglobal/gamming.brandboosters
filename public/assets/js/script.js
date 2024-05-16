$(document).ready(function () {
  // Set the "web" category button as active by default
  $(".filter-button[data-filter='web']").addClass("active");

  // Show only the "web" items by default
  $(".filter").not(".web").hide();
  $(".filter.web").show();

  $(".filter-button").click(function () {
    var value = $(this).attr("data-filter");

    // Remove the active class from all buttons and add it to the clicked button
    $(".filter-button").removeClass("active");
    $(this).addClass("active");

    if (value == "all") {
      $(".filter").show("1000");
    } else {
      $(".filter")
        .not("." + value)
        .hide("3000");
      $(".filter")
        .filter("." + value)
        .show("3000");
    }
  });
});