<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="./css/user-style.css" />
    <link rel="stylesheet" type="text/css" href="./css/admin-styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <title>Solar</title>
  </head>
  <body>
  <nav class="navbar sticky-top navbar-dark bg-dark justify-content-between">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Solar Panel</a>
      <div class="navbar-items-container">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-items">
          <li class="nav-item">
            <a class="nav-link" href="{{url('./')}}">User Zone</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('./admin')}}">Admin Area</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
    <div class="cont">
      <!-- hero -->
      <div class="row col-12">
        <div class="img-hero">
          <div class="row col-4 mt-4">
            <div class="d-flex mt-4 justify-content-center">
              <div class="logo"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-10 mt-4 mx-5">
          <h2 class="general orange">GENERAL</h2>
          <p class="info">INFO</p>
          <div class="info-general border border-2" id="draw"></div>
          <button class="btn-getInfo text-center mt-4 info">GET INFO</button>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-10 mt-4 mx-5">

            <h2 class="general orange">ANIMATED</h2>
            <div class="card-body">
              <div
                      id="sunanimation-container"
                      class="sunanimation-container"
              ></div>
            </div>

        </div>
      </div>
      <div class="container-fluid container-rows">
        <div class="row">

        </div>
      </div>

      <div class="row d-flex justify-content-end">
        <div class="col-lg-6 col-md-11 col-sm-11 mt-4 mx-5 justify-content-end">
          <div class="row d-flex justify-content-end">
            <h2 class="record text-end orange">RECORDS</h2>
            <p class="info text-end">INFO</p>
            <div class="info-general border border-2" id="frame">
              @if(isset($data))
    <img class="img-fluid d-block mx-auto" src=" data:image/jpeg;base64,{{ $data }}" alt="..." />
    @endif
            </div>
            <button class="btn-getInfo mt-4 info" id="getPic">GET INFO</button>
          </div>
        </div>
      </div>

  

      <div class="footer">
        <div class="col-8">
          <div class="row mt-5">
            <div class="logo"></div>
          </div>
          <div class="middle"></div>
          <div class="row mt-5">
            <div class="d-flex justify-content-between">
              <h6 class="text-light mb-3">@Copyright IZV 2023</h6>
              <h6 class="text-light mb-3">Use of cookies | Privacy Policy</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"
    ></script>
    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"
    ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/phaser-ce/2.9.2/phaser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="module" src="./js/sunanimation/main.js"></script>
  </body>
</html>