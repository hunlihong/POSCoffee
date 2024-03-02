let category_id = "1";
let drinks = [];
let preview = [];

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
                    data-decrement-id="${item.drink_id}"
                    class="rounded-start decrement-button"
                  >
                    -
                  </button>
                  <input
                    class="border-0 border-bottom border-top input-control"
                    type="number"
                    data-input-id="${item.drink_id}"
                    value="0"
                  />
                  <button
                    data-increment-id="${item.drink_id}"
                    class="rounded-end increment-button"
                  >
                    +
                  </button>
                </div>
              </div>
            </div>
      `;
  });

  $("#menu-wrapper").html(newArr.join(""));

  let increment_buttons = $(".increment-button");
  increment_buttons.each(function () {
    let current_button_id = $(this).data("increment-id");
    let current_input = $("[data-input-id='" + current_button_id + "']");

    $(this).on("click", function () {
      let value = parseInt(current_input.val());
      value++;
      current_input.val(value);
      current_input.trigger("change");
    });
  });

  let decrement_buttons = $(".decrement-button");
  decrement_buttons.each(function () {
    let current_button_id = $(this).data("decrement-id");
    let current_input = $("[data-input-id='" + current_button_id + "']");

    $(this).on("click", function () {
      let value = parseInt(current_input.val());
      value--;
      current_input.val(value).trigger("change");
      current_input.trigger("change");
    });
  });

  let input_controls = $(".input-control");
  input_controls.each(function () {
    let current_input_id = $(this).data("input-id");

    $(this).change(function () {
      let value = parseInt($(this).val());
      console.log("value = " + value);

      if (value <= 0) {
        $(this).val(0);
      } else {
        if (!exist_in_preview(current_input_id)) {
          let drink = get_drink_info(current_input_id);
          let drink_price = parseFloat(drink.drink_price);

          let drink_to_add = {
            drink_id: drink.drink_id,
            drink_name: drink.drink_name,
            drink_img: drink.drink_img,
            drink_quantity: 1,
            drink_price: drink_price,
          };

          preview.push(drink_to_add);
          console.log(preview);
        } else {
          let drink = get_drink_info_preview(current_input_id);

          let old_drink_price = parseFloat(drink.drink_price);
          let old_quantity = parseInt(drink.drink_quantity);

          let drink_to_add = {
            drink_id: drink.drink_id,
            drink_name: drink.drink_name,
            drink_img: drink.drink_img,
            drink_quantity: value,
            drink_price: value * parseFloat(drink.drink_price),
          };

          delete_drink_preview(drink.drink_id);
          preview.push(drink_to_add);
          console.log(preview);
        }
      }
    });
  });
}

function get_drink_info(drink_id) {
  for (let i = 0; i < drinks.length; i++) {
    if (drinks[i].drink_id == drink_id) {
      drink_to_return = drinks[i];
    }
  }

  return drink_to_return;
}

function exist_in_preview(drink_id) {
  let drink_id_exist = false;

  for (let i = 0; i < preview.length; i++) {
    if (preview[i].drink_id == drink_id) {
      drink_id_exist = true;
    }
  }

  return drink_id_exist;
}

function get_drink_info_preview(drink_id) {
  for (let i = 0; i < preview.length; i++) {
    if (preview[i].drink_id == drink_id) {
      return preview[i];
    }
  }

  return {};
}

function delete_drink_preview(drink_id) {
  for (let i = 0; i < preview.length; i++) {
    if (preview[i].drink_id == drink_id) {
      preview.splice(i, 1);
    }
  }
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
