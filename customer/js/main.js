$(document).ready(function () {
  $("#sidebarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });

  var options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  var today = new Date();

  $("#dateToday").text(today.toLocaleDateString("en-US", options));
  $("#deliveryList").DataTable();
});

