<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../public/assets/css/menu.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
  <header>
    <div class="navbar-header mb-0">
      <div class="logo">
        <img src="../../public/assets/images/coffee.png" alt="" />
      </div>
      <!-- <ul class="mb-0">
          <li><a href="#">A</a></li>
          <li><a href="#">B</a></li>
          <li><a href="#">C</a></li>
          <li><a href="#">D</a></li>
        </ul> -->
      <h2 class="text-white fw-bold ms-5 ps-3">Ice Drinks</h2>
    </div>
  </header>

  <div class="content-body">
    <div class="position-relative">
      <div class="mt-0 sidebar-left w3-sidebar w3-light-grey w3-bar-block shadow-0" style="width: 225px">
        <h3 class="w3-bar-item py-2 d-flex justify-content-between align-items-center sidebar-menu">
          Menu
        </h3>
        <a href="Menu.html" class="w3-bar-item w3-button">Ice Drinks</a>
        <a href="IceLatte.html" class="w3-bar-item w3-button">Hot Drinkk</a>
        <a href="Menu.html" class="w3-bar-item w3-button">Frappe Drinks</a>
        <a href="IceLatte.html" class="w3-bar-item w3-button">Soda Drinks</a>
      </div>
    </div>

    <div class="content position-relative" style="height: calc(100vh - 120px)">
      <div style="z-index: 1" class="position-absolute top-0 start-0 w-100 d-flex align-items-center gap-3 p-2 bg-light border-bottom shadow-sm">
        <div class="d-flex gap-2 w-100">
          <span class="fs-5 border rounded mb-0 px-3 py-2 border-dark bar-icon"><i class="fa-solid fa-bars"></i></span>
          <span class="fs-5 border rounded mb-0 px-3 py-2 border-dark cart-icon"><i class="fa-solid fa-cart-shopping"></i></span>
        </div>
        <button class="next rounded px-3 py-2">Next</button>
      </div>
      <div style="height: 100%; padding: 5rem 1rem 1.2rem 1rem" class="w-100 d-flex gap-2 flex-wrap justify-content-center align-items-start overflow-scroll position-relative">
        <div class="card col-xl-3 col-lg-4 col-md-6 col-12 shadow-0 p-2">
          <img class="card-img-top" src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="Image" />
          <div class="card-body">
            <h5 class="card-title my-0 fs-4">Ice Latte</h5>
            <p class="card-text my-1">$ 2.55</p>
            <div class="btn d-flex justify-content-center align-items-center">
              <button class="rounded-start" onclick="document.getElementById('myNumber2').stepDown(1)">
                -
              </button>
              <input class="border-0 border-bottom border-top" type="number" id="myNumber2" value="0" />
              <button class="rounded-end" onclick="document.getElementById('myNumber2').stepUp(1)">
                +
              </button>
            </div>
          </div>
        </div>
        <div class="card col-xl-3 col-lg-4 col-md-6 col-12 shadow-0 p-2">
          <img class="card-img-top" src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="Image" />
          <div class="card-body">
            <h5 class="card-title my-0 fs-4">Ice Latte</h5>
            <p class="card-text my-1">$ 2.55</p>
            <div class="btn d-flex justify-content-center align-items-center">
              <button class="rounded-start" onclick="document.getElementById('myNumber2').stepDown(1)">
                -
              </button>
              <input class="border-0 border-bottom border-top" type="number" id="myNumber2" value="0" />
              <button class="rounded-end" onclick="document.getElementById('myNumber2').stepUp(1)">
                +
              </button>
            </div>
          </div>
        </div>
        <div class="card col-xl-3 col-lg-4 col-md-6 col-12 shadow-0 p-2">
          <img class="card-img-top" src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="Image" />
          <div class="card-body">
            <h5 class="card-title my-0 fs-4">Ice Latte</h5>
            <p class="card-text my-1">$ 2.55</p>
            <div class="btn d-flex justify-content-center align-items-center">
              <button class="rounded-start" onclick="document.getElementById('myNumber2').stepDown(1)">
                -
              </button>
              <input class="border-0 border-bottom border-top" type="number" id="myNumber2" value="0" />
              <button class="rounded-end" onclick="document.getElementById('myNumber2').stepUp(1)">
                +
              </button>
            </div>
          </div>
        </div>
        <div class="card col-xl-3 col-lg-4 col-md-6 col-12 shadow-0 p-2">
          <img class="card-img-top" src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="Image" />
          <div class="card-body">
            <h5 class="card-title my-0 fs-4">Ice Latte</h5>
            <p class="card-text my-1">$ 2.55</p>
            <div class="btn d-flex justify-content-center align-items-center">
              <button class="rounded-start" onclick="document.getElementById('myNumber2').stepDown(1)">
                -
              </button>
              <input class="border-0 border-bottom border-top" type="number" id="myNumber2" value="0" />
              <button class="rounded-end" onclick="document.getElementById('myNumber2').stepUp(1)">
                +
              </button>
            </div>
          </div>
        </div>
        <div class="card col-xl-3 col-lg-4 col-md-6 col-12 shadow-0 p-2">
          <img class="card-img-top" src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="Image" />
          <div class="card-body">
            <h5 class="card-title my-0 fs-4">Ice Latte</h5>
            <p class="card-text my-1">$ 2.55</p>
            <div class="btn d-flex justify-content-center align-items-center">
              <button class="rounded-start" onclick="document.getElementById('myNumber2').stepDown(1)">
                -
              </button>
              <input class="border-0 border-bottom border-top" type="number" id="myNumber2" value="0" />
              <button class="rounded-end" onclick="document.getElementById('myNumber2').stepUp(1)">
                +
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="content-body-row p-1 m-2">
        <div class="content-body-row-1 bg-warning">
          <div class="row">
            <div
              class="card col-xl-4 col-lg-6 col-sm-6 shadow-0 p-2"
              style="width: 200px"
            >
              <img
                class="card-img-top"
                src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg"
                alt="Image"
              />
              <div class="card-body">
                <h5 class="card-title my-0 fs-4">Ice Latte</h5>
                <p class="card-text my-1">$ 2.55</p>
                <div
                  class="btn d-flex justify-content-center align-items-center"
                >
                  <button
                    class="rounded-start"
                    onclick="document.getElementById('myNumber2').stepDown(1)"
                  >
                    -
                  </button>
                  <input
                    class="border-0 border-bottom border-top"
                    type="number"
                    id="myNumber2"
                    value="0"
                  />
                  <button
                    class="rounded-end"
                    onclick="document.getElementById('myNumber2').stepUp(1)"
                  >
                    +
                  </button>
                </div>
              </div>
            </div>
            <div
              class="card col-xl-4 col-lg-6 col-sm-6 shadow-0 p-2"
              style="width: 200px"
            >
              <img
                class="card-img-top"
                src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg"
                alt="Image"
              />
              <div class="card-body">
                <h5 class="card-title my-0 fs-4">Ice Latte</h5>
                <p class="card-text my-1">$ 2.55</p>
                <div
                  class="btn d-flex justify-content-center align-items-center"
                >
                  <button
                    class="rounded-start"
                    onclick="document.getElementById('myNumber2').stepDown(1)"
                  >
                    -
                  </button>
                  <input
                    class="border-0 border-bottom border-top"
                    type="number"
                    id="myNumber2"
                    value="0"
                  />
                  <button
                    class="rounded-end"
                    onclick="document.getElementById('myNumber2').stepUp(1)"
                  >
                    +
                  </button>
                </div>
              </div>
            </div>
            <div
              class="card col-xl-4 col-lg-6 col-sm-6 shadow-0 p-2"
              style="width: 200px"
            >
              <img
                class="card-img-top"
                src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg"
                alt="Image"
              />
              <div class="card-body">
                <h5 class="card-title my-0 fs-4">Ice Latte</h5>
                <p class="card-text my-1">$ 2.55</p>
                <div
                  class="btn d-flex justify-content-center align-items-center"
                >
                  <button
                    class="rounded-start"
                    onclick="document.getElementById('myNumber2').stepDown(1)"
                  >
                    -
                  </button>
                  <input
                    class="border-0 border-bottom border-top"
                    type="number"
                    id="myNumber2"
                    value="0"
                  />
                  <button
                    class="rounded-end"
                    onclick="document.getElementById('myNumber2').stepUp(1)"
                  >
                    +
                  </button>
                </div>
              </div>
            </div>
            <div
              class="card col-xl-4 col-lg-6 col-sm-6 shadow-0 p-2"
              style="width: 200px"
            >
              <img
                class="card-img-top"
                src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg"
                alt="Image"
              />
              <div class="card-body">
                <h5 class="card-title my-0 fs-4">Ice Latte</h5>
                <p class="card-text my-1">$ 2.55</p>
                <div
                  class="btn d-flex justify-content-center align-items-center"
                >
                  <button
                    class="rounded-start"
                    onclick="document.getElementById('myNumber2').stepDown(1)"
                  >
                    -
                  </button>
                  <input
                    class="border-0 border-bottom border-top"
                    type="number"
                    id="myNumber2"
                    value="0"
                  />
                  <button
                    class="rounded-end"
                    onclick="document.getElementById('myNumber2').stepUp(1)"
                  >
                    +
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="submit btn btn-primary shadow-0 justify-content-center w-25"
        >
          <a href="#">Next</a>
        </div>
      </div> -->

    <div class="aside">
      <div class="px-3 sidebar-right w3-sidebar w3-light-grey w3-bar-block shadow-0 overflow-y-scroll">
        <div class="menu-logo d-flex justify-content-between">
          <img src="../../public/assets/images/coffee.png" alt="" />
        </div>
        <div class="all-in-one">
          <div class="image-item">
            <img src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="..." />
          </div>

          <div class="info-item w-100">
            <p class="mb-0 d-flex justify-content-between">
              Drink <span>Ice Latte</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Price <span>$3.00</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Quantity<span>1</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Total <span class="text-danger">$3.00</span>
            </p>
          </div>
        </div>
        <div class="all-in-one">
          <div class="image-item">
            <img src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="..." />
          </div>

          <div class="info-item w-100">
            <p class="mb-0 d-flex justify-content-between">
              Drink <span>Ice Latte</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Price <span>$3.00</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Quantity<span>1</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Total <span class="text-danger">$3.00</span>
            </p>
          </div>
        </div>
        <div class="all-in-one">
          <div class="image-item">
            <img src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="..." />
          </div>

          <div class="info-item w-100">
            <p class="mb-0 d-flex justify-content-between">
              Drink <span>Ice Latte</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Price <span>$3.00</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Quantity<span>1</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Total <span class="text-danger">$3.00</span>
            </p>
          </div>
        </div>
        <div class="all-in-one">
          <div class="image-item">
            <img src="https://www.sageappliances.com/content/dam/breville-brands/coffeehub/language-masters/en_uk/recipes/recipe-hero-stills/Recipes_Banner8_1200x1200_IcedLatte.jpeg" alt="..." />
          </div>

          <div class="info-item w-100">
            <p class="mb-0 d-flex justify-content-between">
              Drink <span>Ice Latte</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Price <span>$3.00</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Quantity<span>1</span>
            </p>
            <p class="mb-0 d-flex justify-content-between">
              Total <span class="text-danger">$3.00</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../public/assets/js/script.js"></script>
</body>

</html>