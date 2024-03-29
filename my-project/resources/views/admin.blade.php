<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Zone</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/admin-styles.css" />
  </head>
  <body>
    <nav class="navbar sticky-top navbar-dark bg-dark justify-content-between">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Solar Panel</a>
        <div class="navbar-items-container">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-items">
            <li class="nav-item">
              <a class="nav-link" href="user.html">User Zone</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link admin-panel-link"
                data-bs-toggle="offcanvas"
                data-bs-target="#demo"
                >Admin Panel</a
              >
            </li>          
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid container-rows">
      <div class="row row-1">
        <div class="col-8 col-1">
          <div class="card">
            <div class="card-header">Device Status</div>            
            <div  id="drawData" class="card-body"> 
              
              
            </div>
            
          </div>
        </div>
        <div class="col-4 col-2">
          <div class="card">
            <div class="card-header">Record</div>
            <div id="drawLogs" class="card-body scroll">
           
            </div>
            
            

            
            <button class="list-group-item list-group-item-action" id="getData" style="width: 100px; height: 20px;"> Get Data</button>
          </div>
        </div>
      </div>
      <div class="row row-2">
        <div class="col-6">
          <div class="card">
            <div class="card-header">Graphics</div>
            <div class="card-body card-body-graphics">
              <canvas id="graphicsChart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-header">General</div>
            <div class="card-body"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas offcanvas-end admin-panel" id="demo">
      <div class="offcanvas-header">
        <h1 class="offcanvas-title">Admin Panel</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
        ></button>
      </div>
      <div class="offcanvas-body">
        <div class="list-group">
          <form  method="POST" action="{{url('./peticion')}}">
            @csrf
            <label>Command test</label>
            <input name="command" type="text"/>
            <input type="submit">
          </form>
          <button type="button" class="list-group-item list-group-item-action">
            Axes Movement
          </button>
          <button type="button" class="list-group-item list-group-item-action">
            Operation Modes
          </button>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="module" src="./js/index.js"></script>
    <script type="module" src="./js/adminscript.js"></script>
  </body>
</html>
