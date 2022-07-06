<?php session_start();
?>


<?php

if ($_POST) {

    if (strlen($_POST['first-name']) == 0) {
        $errors['first-name'] = 'Bạn chưa nhập họ';
        $check['first-name'] = false;
    } else if (!filter_var($_POST['last-name'], FILTER_VALIDATE_INT) == false) {
        $errors['first-name'] = 'Bạn họ nhập có số nguyên';
        $check['first-name'] = false;
    }

    if (strlen($_POST['last-name']) == 0) {
        $errors['last-name'] = 'Bạn chưa nhập tên';
        $check['last-name'] = false;
    } else if (!filter_var($_POST['last-name'], FILTER_VALIDATE_INT) == false) {
        $errors['last-name'] = 'Bạn tên nhập có số nguyên';
        $check['last-name'] = false;
    }

    if (strlen($_POST['email']) == 0) {
        $errors['email'] = 'Bạn chưa nhập email';
        $check['email'] = false;
    } else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
        $errors['email'] = 'Bạn nhập email chưa đúng định dạng';
        $check['email'] = false;
    }

    if (strlen($_POST['password']) == 0) {
        $errors['password'] = 'Bạn chưa nhập password';
        $check['password'] = false;
    }

    if ($check) {
        foreach ($check as $key => $val) {
            if ($check[$key] == false) {
                $saves['first-name'] = $_POST['first-name'];
                $saves['last-name'] = $_POST['last-name'];
                $saves['email'] = $_POST['email'];
                $saves['password'] = $_POST['password'];
            }
        }
    }

    $saves['day'] = $_POST['day'];
    $saves['month'] = $_POST['month'];
    $saves['year'] = $_POST['year'];

    $saves['exampleRadios'] = $_POST['exampleRadios'];



    if (isset($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['saves'] = $saves;
        // $_SESSION['old'] = $_POST;
        header('location: register.php');
        exit();
    }

    //register thanh cong
    unset($_SESSION['errors']);
    unset($_SESSION['saves']);
    header('location: register.php');
    exit();
} else {
    header('location: register.php');
    exit();
}
