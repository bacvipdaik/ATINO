<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/acount.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Thông tin tài khoản</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="content">
                <h1 class="title">Thông tin cá nhân</h1>
                <form action="" class="form-acount">
                    <div class="form-group">
                        <label for="" class="control-label">Họ tên:</label>
                        <div class="wrap-input">
                            <input type="text" placeholder="Họ tên">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Điện thoại:</label>
                        <div class="wrap-input">
                            <input type="text" placeholder="Điện thoại">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Email:</label>
                        <div class="wrap-input">
                            <input type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Mật khẩu:</label>
                        <div class="wrap-input">
                            <input type="text" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Đổi mật khẩu:</label>
                        <div class="wrap-input">
                            <input type="text" placeholder="Mật khẩu mới">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Nhập lại mật khẩu:</label>
                        <div class="wrap-input">
                            <input type="text" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <div class="form-group form-btn">
                        <button class="btn-sub btn">Cập nhập</button>
                        <a class="btn" href="{{ route('home')}}">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>