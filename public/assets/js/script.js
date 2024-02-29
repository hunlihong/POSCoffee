$(document).ready(function () {
  $(".bar-icon").click(function () {
    $(".sidebar-left").addClass("active");
    $(".sidebar-menu").append(
      "<button class='btn btn-danger close'><i class='fa-solid fa-xmark'></i></button>"
    );
    $(".close").click(function () {
      $(".sidebar-left").removeClass("active");
      $(this).remove();
    });
  });
  $(".cart-icon").click(function () {
    $(".sidebar-right").addClass("active");
    $(".menu-logo").prepend(
      "<button class='btn btn-danger close'><i class='fa-solid fa-xmark'></i></button>"
    );
    $(".close").click(function () {
      $(".sidebar-right").removeClass("active");
      $(this).remove();
    });
  });
});
