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
  $(window).resize(function () {
    const width = $(window).innerWidth();
    if (width > 992) {
      if ($(".sidebar-left").hasClass("active")) {
        $(".sidebar-left").removeClass("active");
        $(".close").remove();
      }
    }
    if (width > 578) {
      if ($(".sidebar-right").hasClass("active")) {
        $(".sidebar-right").removeClass("active");
        $(".close").remove();
      }
    }
  });
});
