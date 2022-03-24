<?php
if(isset($_POST['btn_submit'])) {
    $productname = $_POST['product-name'];
    $decscript = $_POST['deccript'];
    $productprice = $_POST['price'];
    $productimages = $_POST['productimg'];
    if(empty($productname) ) {
        $message['product-name'] = "Bạn phải nhập tên sản phẩm";
    }
    else {
        echo "$productname <br>";
    }

    if(empty($decscript)) {
        $message['deccript'] = "Bạn phải mô tả sản phẩm";
    }
    else {
        echo  "$decscript <br>";
    }

    if(empty($productprice) || !is_numeric($productprice)) {
        $message['price'] = "Bạn phải nhập giá cả và kí tự phải là số";
    }
    else {
        echo "$productprice <br>";
    }

    if(empty($productimages)) {
        $message['product-img'] = "Bạn phải chọn ảnh";
    }
    else {
        
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
    <form action="lesson3.php" method="post">
        <div class="login login__form--username">
            <label for="" class="login__label"><b>Product name</b></label>
            <input type="text" name="product-name" class="form-control" placeholder="Username...">
            <span style="color:red">
                <?= isset($message['product-name']) ? $message['product-name'] : "" ?>
            </span><br>
        </div>
        <div class="login login__form--email">
            <label for="" class="login__label"><b>Decsciption</b></label>
            <input type="text" name="deccript" class="form-control" placeholder="Mô tả...">
            <span style="color:red">
                <?= isset($message['deccript']) ? $message['deccript'] : "" ?>
            </span><br>
        </div>
        <div class="login login__form--password">
            <label for="" class="login__label"><b>Price</b></label>
            <input type="text" name="price" class="form-control" placeholder="Price...">
            <span style="color:red">
                <?= isset($message['price']) ? $message['price'] : "" ?>
            </span><br>
        </div>
        <div class="input-group my-3">
            <select class="form-select" id="inputGroupSelect02">
                <option value="1" name="Ti vi">Tivi</option>
                <option value="2" name="Tủ lanh">Tủ lạnh</option>
                <option value="3" name="Máy tính">Máy tính</option>
            </select>
            <label class="input-group-text" for="inputGroupSelect02">Options</label>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Chọn ảnh trên file của bạn</label>
            <input class="form-control" type="file" id="formFile" name="productimg">
            <span style="color:red">
                 <img src="<?= isset($message['productimg']) ? $message['productimg'] : "" ?>" alt="">
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
            <button type="submit" class="btn btn-danger" name="btn_submit">Mua hàng</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
