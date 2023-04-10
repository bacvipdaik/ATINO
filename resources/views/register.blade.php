<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="wrapper">
                <div class="nav">
                    <a href="{{ route('login')}}">Đăng nhập</a>
                    <a href="{{ route('register')}}">Đăng ký</a>
                </div>
            <form action="" class="validate">
                <div class="form-group">
                    <input type="text" class="name" placeholder="Họ tên">
                </div>
                <div class="form-group">
                    <input type="text" class="phoneNumber" placeholder="Điện thoại">
                </div>
                <div class="form-group">
                    <input type="text" class="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="password" placeholder="Mật khẩu của bạn">
                </div>
                <button class="btnLogin">đăng ký</button>
            </form>
        </div>
    </main>
</body>
</html>