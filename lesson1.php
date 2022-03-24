<?php
if(isset($_POST['btn_submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if(empty($username) ) {
        $message['username'] = "Bạn phải nhập username";
    }
    if((empty($email)) || strlen($email) > 20) {
        $message['email'] = "Bạn phải nhập email và tối thiểu là 20 kí tự";
    }
    if((empty($password)) || strlen($password) > 10) {
        $message['password'] = "Bạn phải nhập password và tối thiểu là 10 kí tự";
    }
    if((empty($repassword)) || ($password != $repassword) || strlen($repassword) > 10 ){
        $message['repassword'] = "Mật khẩu bạn nhập không phù hợp";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
   <style>
       .tab__login {
           margin: 80px auto;
           width: 700px;
           height: 770px;
           background-color: #ffffff;
           padding: 0 42px;
           border-radius: 5px;
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       }

       .tab__login--title h4 {
           color: red;
           padding: 12px;
           font-size: 35px;
       }

       .login {
           margin-top: 12px;
       }

       .login__label {
           font-size: 20px;
           padding-bottom: 7px;
       }

       .login__sign--up--in {
           display: flex;
           justify-content: space-between;
           align-items: center;
       }

       .login__sign--up p {
           padding-top: 12px;
           margin: 0;
       }

       .login__sign--up a {
           text-decoration: none;
       }
       .btn-danger {
           margin-top: 12px;
           width: 100%;
           height: 50px;
       }

   </style>
    <title>Registration</title>
</head>

<body>
<div class="tab__login">
    <div class="tab__login--title text-center">
        <h4>Đăng kí</h4>
    </div>
    <form action="lesson1.php" method="post">
        <div class="login login__form--username">
            <label for="" class="login__label"><b>Username</b></label>
            <input type="text" name="username" class="form-control" placeholder="Username...">
            <span style="color:red">
                <?= isset($message['username']) ? $message['username'] : "" ?>
            </span><br>
        </div>
        <div class="login login__form--email">
            <label for="" class="login__label"><b>Email</b></label>
            <input type="text" name="email" class="form-control" placeholder="Email...">
            <span style="color:red">
                <?= isset($message['email']) ? $message['email'] : "" ?>
            </span><br>
        </div>
        <div class="login login__form--password">
            <label for="" class="login__label"><b>Password</b></label>
            <input type="text" name="password" class="form-control" placeholder="Password...">
            <span style="color:red">
                <?= isset($message['password']) ? $message['password'] : "" ?>
            </span><br>
        </div>
        <div class="login login__form--password">
            <label for="" class="login__label"><b>repassword</b></label>
            <input type="text" name="repassword" class="form-control" placeholder="repassword...">
            <span style="color:red">
                <?= isset($message['repassword']) ? $message['repassword'] : "" ?>
            </span><br>
        </div>
        <div class="login__sign--up--in">
            <div class="login login__form--check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Accept our Terms and
                    Conditions.
                </label>
            </div>
            <div class="login__sign--up">
                <p>Already have an account? <a href="/login_sign_in/index.html">Sign in</a></p>
            </div>
        </div>
        <div class="login login__fomr--submit">
            <button type="submit" class="btn btn-danger" name="btn_submit">Đăng kí</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
