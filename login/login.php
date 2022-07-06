<?php session_start(); 
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <title>Signin Template · Bootstrap v5.2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center">

  <main class="col-4">
    <form class="w-100" action="login-process.php" method="post">
      <h2 class="h3 mb-3 fw-normal">Đăng nhập</h2>
      <p class="text-muted">Nhanh chóng và dễ dàng</p>

      <div class="form-group mb-3 formfloating">
        <input id="floatingInput" type="text" class="form-control" placeholder="Email hoặc số điện thoại" name="email">
        <span class="text-danger">
          <?= isset($_SESSION['errors']['email'])?$_SESSION['errors']['email']:'' ?>
        </span>
      </div>

      <div class="form-group mb-3">
        <input id="floatingInput" type="password" class="form-control" placeholder="Mật khẩu" name="password">
        <span class="text-danger">
          <?= isset($_SESSION['errors']['password'])?$_SESSION['errors']['password']:'' ?>
        </span>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Agree Terms
        </label>
      </div>

      <button class="w-100 btn btn-lg btn-success" type="submit">Đăng ký</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
  </main>



</body>

</html>