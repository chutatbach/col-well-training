<?php session_start(); 
?>

<?php
//exit de dam bao tinh tuan tu 
if (isset($_POST)) {
    print_r($_POST);
    if ($_POST['email']) {
        if (false == filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Bạn nhập không đúng định dạng';
        }
    } else {
        $errors['email'] = "Bạn nhập rỗng";
    }

    if (0 == strlen($_POST['password'])) {
        $errors['password'] = "login Id is requiredS!";
    }

    if (isset($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['old'] = $_POST;
        header('location: login.php');
        exit();
    }

    //login thanh cong
    $_SESSION['user'] = 'admin';
    header('location: login.php');
    exit();
} else {
    header('location: login.php'); 
    exit();
}
?>