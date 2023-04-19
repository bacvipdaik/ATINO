<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>
<body>
    <main>
        <div class="wrapper">
                <div class="nav">
                    <a class="nav-login" href="{{ route('login')}}">Đăng nhập</a>
                    <a class="nav-register" href="{{ route('register')}}">Đăng ký</a>
                </div>
            <form action="" class="validate" id="form-login" method="POST">
                <div class="form-group">
                    <input id="email" name="email" type="text" class="email" placeholder="Nhập email hoặc Tên đăng nhập">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <input id="password" name="password" type="password" class="password" placeholder="Mật khẩu">
                    <span class="form-message"></span>
                </div>
                <button class="btnLogin">đăng nhập</button>
                <div class="foot">
                    <a class="footpass" href="">Quên mật khẩu?</a>
                    <p class="foottext">Hoặc đăng nhập với</p>
                    <div class="option">
                        <a class="facebook" href="">
                            <i class="fa-brands fa-facebook-f" style="color: #fff;"></i>
                            <p>Đăng nhập bằng Facebook</p>
                        </a>
                        <a class="google" href="">
                            <i class="fa-brands fa-google" style="color: #fff;"></i>
                            <p>Đăng nhập bằng Google</p>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="js/validateInput.js"></script>
    <script>
        Validator({
            form: '#form-login',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isEmail('#email', 'Vui lòng nhập email của bạn'),
                Validator.minlength('#password', 6 , 'Mật khẩu tối thiểu 6 kí tự'),
            ],
            onSubmit: function(data) {
                console.log(data);
            }
        })
    </script>
</body>
</html>