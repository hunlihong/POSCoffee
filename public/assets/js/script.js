$(document).ready(function () {
  let category_id = "1";
  let drinks = [];

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

  // fetch_drink_data("1");
  fetch_drink_data();
  fetch_category_data();
  // fetch_category_id();
});

function fetch_drink_data() {
  $.ajax({
    url: "../src/modules/handle-fetch-drink.php",
    method: "get",
    success: handle_fetched_drink,
  });
}
function handle_fetched_drink(response) {
  drinks = JSON.parse(response);

  display_drink(
    drinks.filter(function (drink) {
      return drink.drink_category_id == 1;
    })
  );
}

function display_drink(arr) {
  let newArr = arr.map(function (item) {
    return `
            <div class="card col-xl-3 col-lg-4 col-md-6 col-12 shadow-0 p-2">
              <img
                class="card-img-top"
                src="${item.drink_img}"
                alt="Image"
              />
              <div class="card-body">
                <h5 class="card-title my-0 fs-4">${item.drink_name}</h5>
                <p class="card-text my-1">$ ${item.drink_price}</p>
                <div class="btn d-flex justify-content-center align-items-center">
                  <button
                    id="decrement"
                    class="rounded-start"
                  >
                    -
                  </button>
                  <input
                    class="border-0 border-bottom border-top"
                    type="number"
                    id="${item.drink_id}"
                    value="0"
                  />
                  <button
                    id="increment"
                    class="rounded-end"
                  >
                    +
                  </button>
                </div>
              </div>
            </div>
      `;
  });
  $("#menu-wrapper").html(newArr.join(""));
}

// function fetch_drink_data(category_id) {
//   $.ajax({
//     url: "../src/modules/handle-fetch-drink.php",
//     method: "post",
//     data: {
//       category_id: category_id,
//     },
//     success: handle_fetched_drink,
//   });
// }

// function handle_fetched_drink(response) {
//   let parsed_response = JSON.parse(response);
//   let num_row = parsed_response.num_row;

//   for (let i = 0; i < num_row; i++) {
//     let data = parsed_response.data[i];
//     $("#menu-wrapper").append(
//       '<div class="card col-xl-3 col-lg-4 col-md-6 col-12 shadow-0 p-2">' +
//         '<img class="card-img-top" src="' +
//         data.drink_img +
//         '" alt="' +
//         data.drink_name +
//         ' " />' +
//         '<div class="card-body">' +
//         '<h5 class="card-title my-0 fs-4">' +
//         data.drink_name +
//         "</h5>" +
//         '<p class="card-text my-1">$ ' +
//         data.drink_price +
//         "</p>" +
//         '<div class="btn d-flex justify-content-center align-items-center">' +
//         '<button class="rounded-start" onclick="document.getElementById(\'' +
//         data.drink_id +
//         "').stepDown(1)\">" +
//         "-" +
//         "</button>" +
//         '<input class="border-0 border-bottom border-top" type="number" id="' +
//         data.drink_id +
//         '" value="0" />' +
//         '<button class="rounded-end" onclick="document.getElementById(\'' +
//         data.drink_id +
//         "').stepUp(1)\">" +
//         "+" +
//         "</button>" +
//         "</div>" +
//         "</div>" +
//         "</div>"
//     );
//   }
// }

function fetch_category_data() {
  $.ajax({
    url: "../src/modules/handle-fetch-category.php",
    method: "get",
    success: handle_fetched_category,
  });
}

function handle_fetched_category(response) {
  let categories = JSON.parse(response);
  for (let i = 0; i < categories.length; i++) {
    $("#categories").append(
      `<a href="#category_id=${categories[i].category_id}" data-id="${categories[i].category_id}" class="w3-bar-item w3-button">${categories[i].category_name}</a>`
    );
  }
  $("#categories > a").click(function () {
    let id = $(this).data("id");
    let filter_drinks = drinks.filter(function (drink) {
      return drink.drink_category_id == id;
    });

    display_drink(filter_drinks);
  });
}

function fetch_category_id() {
  $.ajax({
    url: "../src/modules/handle-category-id.php",
    method: "get",
    success: handle_category_id,
  });
}

function handle_category_id(response) {
  console.log(response);
}
