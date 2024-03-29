<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Zone</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/admin-styles.css" />
  </head>
  <body>
    <nav class="navbar sticky-top navbar-dark bg-dark justify-content-between">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Solar Panel</a>
        <div class="navbar-items-container">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-items">
            <li class="nav-item">
              <a class="nav-link" href="admin.html">Admin Zone</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid container-rows">
      <div class="row">
        <div class="col-xl-6 col-lg-12 col-sl-6">
          <div class="card">
            <div class="card-header">Sun Animation</div>
            <div class="card-body">
              <div
                id="sunanimation-container"
                class="sunanimation-container"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
