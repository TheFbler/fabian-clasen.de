$(document).ready(function() {
  $(".fa-bars").on("click", function() {
    $("header").toggleClass("open");
    $(".fa-bars").toggleClass("openFaBars");
    $("body").toggleClass("openBody");
  });
});
