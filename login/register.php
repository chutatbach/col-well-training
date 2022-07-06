<?php session_start();
$mydate = getdate(date("U"));
$myyear = $mydate['year'] - 130;
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
    <form class="w-100" action="register-process.php" method="post">
      <h2 class="h3 mb-3 fw-normal">Đăng ký</h2>
      <p class="text-muted">Nhanh chóng và dễ dàng</p>
      <div class="row mb-3 g-2">
        <div class="col form-group">
          <input type="text" class="form-control" placeholder="Họ" name="first-name" value="<?= isset($_SESSION['saves']['first-name']) ? $_SESSION['saves']['first-name'] : '' ?>">
          <span class="text-danger">
            <?= isset($_SESSION['errors']['first-name']) ? $_SESSION['errors']['first-name'] : '' ?>
          </span>
        </div>
        <div class="col form-group">
          <input type="text" class="form-control" placeholder="Tên" name="last-name" value="<?= isset($_SESSION['saves']['last-name']) ? $_SESSION['saves']['last-name'] : '' ?>">
          <span class="text-danger">
            <?= isset($_SESSION['errors']['first-name']) ? $_SESSION['errors']['first-name'] : '' ?>
          </span>
        </div>
      </div>

      <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Email hoặc số điện thoại" name="email" value="<?= isset($_SESSION['saves']['email']) ? $_SESSION['saves']['email'] : '' ?>">
        <span class="text-danger">
          <?= isset($_SESSION['errors']['email']) ? $_SESSION['errors']['email'] : '' ?>
        </span>
      </div>

      <div class="form-group mb-3">
        <input type="password" class="form-control" placeholder="Mật khẩu" name="password" value="<?= isset($_SESSION['saves']['password']) ? $_SESSION['saves']['password'] : '' ?>">
        <span class="text-danger">
          <?= isset($_SESSION['errors']['password']) ? $_SESSION['errors']['password'] : '' ?>
        </span>
      </div>

      <div class="form-group mb-3">

        <div class="row g-2">

          <div class="col">
            <label>Ngày sinh </label>
            <select name="day" id="" class="form-control">
              <?php for ($i = 1; $i < 32; $i++) { ?>
                <option value="<?= $i ?>" <?php if (isset($_SESSION['saves']['day'])) {
                                            if ($_SESSION['saves']['day'] == $i) {
                                              echo 'selected';
                                            }
                                          } else {
                                            echo ' ';
                                          }
                                          ?>><?= $i ?></option>
              <?php } ?>
            </select>
            <span class="text-danger">
              <?= isset($_SESSION['errors']['day']) ? $_SESSION['errors']['day'] : '' ?>
            </span>
          </div>
          <div class="col">
            <label>Tháng sinh </label>
            <select name="month" id="" class="form-control">
              <?php for ($i = 1; $i < 12; $i++) { ?>
                <option value="<?= $i ?>" <?php if (isset($_SESSION['saves']['month'])) {
                                            if ($_SESSION['saves']['month'] == $i) {
                                              echo 'selected';
                                            }
                                          } else {
                                            echo ' ';
                                          }
                                          ?>><?= $i ?></option>
              <?php } ?>
            </select>
            <span class="text-danger">
              <?= isset($_SESSION['errors']['month']) ? $_SESSION['errors']['month'] : '' ?>
            </span>
          </div>
          <div class="col">
            <label>Năm sinh </label>
            <select name="year" id="" class="form-control">
              <?php for ($myyear; $myyear < $mydate['year']; $myyear++) { ?>
                <option value="<?= $myyear ?>" <?php if (isset($_SESSION['saves']['year'])) {
                                                  if ($_SESSION['saves']['year'] == $myyear) {
                                                    echo 'selected';
                                                  }
                                                } else if ($myyear == $mydate['year']) {
                                                  echo 'selected';
                                                } else {
                                                  echo ' ';
                                                }
                                                ?>><?= $myyear ?></option>
              <?php } ?>
            </select>
            <span class="text-danger">
              <?= isset($_SESSION['errors']['year']) ? $_SESSION['errors']['year'] : '' ?>
            </span>
          </div>
        </div>
      </div>

      <div class="form-group mb-3">
        <label>Giới tính</label>
        <div class="row g-2">
          <div class="col">
            <div class="form-check">
              <label class="form-check-label" for="exampleRadios1">
                Nam
              </label>
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="0"
              <?php 
              if(isset($_SESSION['saves']['exampleRadios'])){
                if($_SESSION['saves']['exampleRadios'] == 0){
                  echo 'checked';
                }else{
                  echo '';
                }
              }else{
                echo 'checked';
              }
               ?> >
            </div>
          </div>
          <div class="col">
            <div class="form-check">
              <label class="form-check-label" for="exampleRadios2">
                Nữ
              </label>
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="1"
              <?php 
              if(isset($_SESSION['saves']['exampleRadios'])){
                if($_SESSION['saves']['exampleRadios'] == 1){
                  echo 'checked';
                }else{
                  echo '';
                }
              }
               ?>
              >
            </div>
          </div>
          <div class="col">
            <div class="form-check">
              <label class="form-check-label" for="exampleRadios3">
                Tùy chỉnh
              </label>
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="2" 
              <?php 
              if(isset($_SESSION['saves']['exampleRadios'])){
                if($_SESSION['saves']['exampleRadios'] == 2){
                  echo 'checked';
                }else{
                  echo '';
                }
              }
               ?>
              >
            </div>
          </div>
        </div>
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