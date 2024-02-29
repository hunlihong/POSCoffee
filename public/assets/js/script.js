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

  fetch_drink_data("1");

  // $("#menu-wrapper").append(
  //   '<div class="card col-xl-3 col-lg-4 col-md-6 col-12 shadow-0 p-2">' +
  //     '<img class="card-img-top" src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="Image" />' +
  //     '<div class="card-body">' +
  //     '<h5 class="card-title my-0 fs-4">Ice Latte</h5>' +
  //     '<p class="card-text my-1">$ 2.55</p>' +
  //     '<div class="btn d-flex justify-content-center align-items-center">' +
  //     '<button class="rounded-start" onclick="document.getElementById(\'myNumber2\').stepDown(1)">' +
  //     "-" +
  //     "</button>" +
  //     '<input class="border-0 border-bottom border-top" type="number" id="myNumber2" value="0" />' +
  //     '<button class="rounded-end" onclick="document.getElementById(\'myNumber2\').stepUp(1)">' +
  //     "+" +
  //     "</button>" +
  //     "</div>" +
  //     "</div>" +
  //     "</div>"
  // );
});

function fetch_drink_data(category_id) {
  $.ajax({
    url: "../src/modules/handle-fetch-drink.php",
    method: "post",
    data: {
      category_id: category_id,
    },
    success: handle_fetched_drink,
  });
}

function handle_fetched_drink(response) {
  let parsed_response = JSON.parse(response);
  let num_row = parsed_response.num_row;

  for (let i = 0; i <= num_row; i++) {
    let data = parsed_response.data[i];
    $("#menu-wrapper").append(
      '<div class="card col-xl-3 col-lg-4 col-md-6 col-12 shadow-0 p-2">' +
        '<img class="card-img-top" src="' +
        data.drink_img +
        '" alt="' +
        data.drink_name +
        ' " />' +
        '<div class="card-body">' +
        '<h5 class="card-title my-0 fs-4">' +
        data.drink_name +
        "</h5>" +
        '<p class="card-text my-1">$ ' +
        data.drink_price +
        "</p>" +
        '<div class="btn d-flex justify-content-center align-items-center">' +
        '<button class="rounded-start" onclick="document.getElementById(\'' +
        data.drink_id +
        "').stepDown(1)\">" +
        "-" +
        "</button>" +
        '<input class="border-0 border-bottom border-top" type="number" id="' +
        data.drink_id +
        '" value="0" />' +
        '<button class="rounded-end" onclick="document.getElementById(\'' +
        data.drink_id +
        "').stepUp(1)\">" +
        "+" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>"
    );
  }
}
