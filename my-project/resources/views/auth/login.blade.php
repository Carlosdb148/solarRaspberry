<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
    <div class="login-container">
      <h1>Solar Panel</h1>
      <div class="login">
        <form method="POST" action="{{url('./loginAdmin')}}">
          @csrf
        <div class="fields-container">
          <div class="form-group">
            <label for="inUser">Email</label>
            <input name="email" type="text" class="form-control" id="inUser" />
          </div>
          <div class="form-group form-group-pass">
            <label for="inPass">Password</label>
            <input name="password" type="password" class="form-control" id="inPass" />
          </div>
          <button id="btLogin" class="btn btn-success btn-lg btn-block">
            Login
          </button>
        </div>
        </form>
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
    <script type="module" src="./js/index.js"></script>
  </body>
</html>
