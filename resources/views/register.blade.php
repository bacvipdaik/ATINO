<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/register.css">
    <title>register</title>
</head>

<body>
    <main>
        <div class="wrapper">
            <div class="nav">
                <a class="nav-login" href="{{ route('login') }}">Đăng nhập</a>
                <a class="nav-register" href="{{ route('register') }}">Đăng ký</a>
            </div>
            <form action="" class="validate" id="form-register">
                <div class="form-group">
                    <input type="text" id="fullname" name="fullname" class="name form-control" placeholder="Họ tên">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <input type="text" id="phone" name="phone" class="phoneNumber form-control"
                        placeholder="Điện thoại">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <input type="text" id="email" name="email" class="email form-control" placeholder="Email">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password " class="password form-control"
                        placeholder="Mật khẩu của bạn">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <input type="password" id="confirm_password" name="confirm_password" class="password form-control"
                        placeholder="Nhập lại mật khẩu">
                    <span class="form-message"></span>
                </div>
                <button class="btnLogin">đăng ký</button>
            </form>
        </div>
    </main>
    <script src="js/validateInput.js"></script>
    <script>
        Validator({
            form: '#form-register',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
                Validator.isRequired('#confirm_password'),
                Validator.isphone('#phone', 'Vui lòng nhập số điện thoại của bạn'),
                Validator.isEmail('#email', 'Vui lòng nhập email của bạn'),
                Validator.minlength('#password', 6, 'Mật khẩu tối thiểu 6 kí tự'),
                Validator.confirm('#confirm_password', function() {
                    return document.querySelector('#form-register #password').value;
                }, 'Mật khẩu nhập lại không chính xác'),
            ],
            onSubmit: function(data) {
                console.log(data);
            }
        });
    </script>
</body>

</html>
