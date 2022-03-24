<?php
if(isset($_POST['btn_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username) || strlen($username) > 30) {
        $message['username'] = "Bạn phải nhập username và không quá 30 kí tự";
    }
    if(empty($password) || strlen($password) > 12) {
        $message['password'] = "Bạn phải nhập password và tối không quá 12 kí tự";
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
            margin: 100px auto;
            width: 600px;
            height: 490px;
            border-radius: 5px;
            background-color: #ffffff;
            padding: 0 42px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .tab__login--title h4 {
            color: red;
            padding: 12px;
            font-size: 35px;
        }

        .login {
            margin-top: 19px;
        }

        .login__label {
            font-size: 20px;
            padding-bottom: 7px;
        }

        .login__account {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .login__form--sign a {
            text-decoration: none;
        }

        .login__form--sign a:hover {
            text-decoration: underline;
        }

        .login__recover {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-danger {
            width: 163px;
        }

    </style>
    <title>Login user</title>
</head>

<body>
<div class="tab__login">
    <div class="tab__login--title text-center">
        <h4>Đăng nhập</h4>
    </div>
    <form action="lesson2.php" method="post">
        <div class="login login__fomr--email">
            <label for="" class="login__label"><b>Username</b></label>
            <input type="text" name="username" class="form-control" placeholder="Username...">
            <span style="color:red">
                <?= isset($message['username']) ? $message['username'] : "" ?>
            </span><br>
        </div>
        <div class="login login__fomr--password">
            <label for="" class="login__label"><b>Password</b></label>
            <input type="text" name="password" class="form-control" placeholder="Password...">
            <span style="color:red">
                <?= isset($message['password']) ? $message['password'] : "" ?>
            </span><br>
        </div>
        <div class="login__account">
            <div class="login login__fomr--check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <div class="login login__form--sign">
                <p>No account? <a href="/login_sign_up/index.html"> Sign up now</a></p>
            </div>
        </div>
        <div class="login__recover">
            <div class="login login__fomr--submit">
                <button type="button" class="btn btn-success">Recover password</button>
            </div>
            <div class="login login__fomr--submit">
                <button type="submit" class="btn btn-danger" name="btn_submit">Đăng nhập</button>
            </div>
        </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
