<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/payments.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Thanh toán</title>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <div class="wrap">
                <form action="" class="myform" id="form-payment">
                    <div class="main">
                        <div class="main-heard">
                            <a href="{{ route('home')}}" class="logo">
                                <img src="assets/images/logo.jpg" alt="">
                            </a>
                            <ul class="beardcrumb">
                                <li class="beardcrumb-item">
                                    <a href="">Giỏ hàng</a>
                                    <span>></span>
                                </li>
                                <li class="beardcrumb-item">Thanh toán</li>
                            </ul>
                        </div>
                        <div class="main-content">
                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title">Thông tin giao hàng</h2>
                                </div>
                                <div class="section-content">
                                    <div class="section-info">
                                        <div class="field">
                                            <div class="form-group">
                                                <input id="fullname" name="fullname" type="text" class="input-name form-control" placeholder="Họ và tên">
                                                <span class="form-message"></span>
                                            </div>
                                        </div>
                                        <div class="field ">
                                            <div class="form-group">
                                                <input id="email" name="email" class="input-email form-control" type="text" placeholder="Email">
                                                <span class="form-message"></span>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="form-group">
                                                <input id="phone" name="phone" class="input-phone form-control" type="text" placeholder="Số điện thoại">
                                                <span class="form-message"></span>
                                            </div>
                                        </div>
                                        <div class="field ">
                                            <div class="form-group">
                                                <input id="address" name="address" class="input-address form-control" type="text" placeholder="Địa chỉ">
                                                <span class="form-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-address">
                                        <div class="field field-address">
                                            <div class="field-input-wrapper form-group" >
                                                <label for="">Tỉnh/Thành phố</label>
                                                <select name="city" id="city" class="form-control">
                                                    <option value="">--Chọn tỉnh thành phố--</option>
                                                    <option value="Hà Nội">Hà Nội</option>
                                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                    <option value="Hà Nam">Hà Nam</option>
                                                    <option value="Thái Bình">Thái Bình</option>
                                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                                </select>
                                                <span class="form-message"></span>
                                            </div>
                                        </div>
                                        <div class="field field-address">
                                            <div class="field-input-wrapper form-group" >
                                                <label for="">Quận/Huyện</label>
                                                <select name="County" id="County" class="form-control">
                                                    <option value="">--Chọn quận huyện--</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <span class="form-message"></span>
                                            </div>
                                        </div>
                                        <div class="field field-address">
                                            <div class="field-input-wrapper form-group" >
                                                <label for="">Phường/Xã</label>
                                                <select name="Ward" id="Ward" class="form-control">
                                                    <option value="">--Chọn phường xã--</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <span class="form-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <textarea class="note" name="note" id="note" cols="30" rows="6" placeholder="Ghi chú"></textarea>
                                    </div>
                                    <div class="field">
                                        <div>
                                            <h2 class="payment-methods">Phương thức thanh toán</h2>
                                        </div>
                                        <div class="content-box">
                                            <label for="" class="form-group">
                                                <input name="method-payment" type="radio" value="1">
                                                <span>Thanh toán khi nhận hàng &#40;COD&#41;</span>
                                                <span class="form-message"></span>
                                            </label>
                                            <div class="decription-payment">
                                                <span>Thanh toán khi nhận hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="sidebar-content">
                            <div class="order-summary">
                                <div class="order-summary-sections">
                                    <div class="order-summary-sections-product-list">
                                        <table class="product-table">
                                            <thead></thead>
                                            <tbody>
                                                <tr class="product">
                                                    <td class="product-image">
                                                        <div class="product-thumbnail">
                                                            <img src="assets/images/newProducts/polo1.jpeg" alt="" >
                                                        </div>
                                                    </td>
                                                    <td class="product-descirption">
                                                        <span>Áo polo1 Đen 2XL</span>
                                                        <div class="wrap-qtt">
                                                            <a href="">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                            <div class="qtt-checkout">
                                                                <span class="and-down">-</span>
                                                                <input type="text" name="" id="" value="1">
                                                                <span class="and-up">+</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">
                                                        <span>200000đ</span>
                                                    </td>
                                                </tr>
                                                <tr class="product">
                                                    <td class="product-image">
                                                        <div class="product-thumbnail">
                                                            <img src="assets/images/newProducts/polo1.jpeg" alt="" >
                                                        </div>
                                                    </td>
                                                    <td class="product-descirption">
                                                        <span>Áo polo1 Đen 2XL</span>
                                                        <div class="wrap-qtt">
                                                            <a href="">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                            <div class="qtt-checkout">
                                                                <span class="and-down">-</span>
                                                                <input type="text" name="" id="" value="1">
                                                                <span class="and-up">+</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">
                                                        <span>200000đ</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="order-summary-sections-discount">
                                        <div class="">
                                            <div class="field wrap-discount">
                                                <input type="text" name="discount" id="discount" placeholder="Mã giảm giá">
                                                <button>Sử dụng</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-summary-sections-total-lines">
                                        <div class="tran">
                                            <span class="tran-price-name">Phí vận chuyển</span>
                                            <span class="tran-price">Miễn phí vận chuyển</span>
                                        </div>
                                        <div class="tran">
                                            <span class="total-price-name">Tổng cộng:</span>
                                            <span class="total-price">200000đ</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="note-checkout">
                                    Chúng tôi sẽ XÁC NHẬN đơn hàng bằng TIN NHẮN SMS hoặc GỌI ĐIỆN. Bạn vui lòng kiểm tra TIN NHẮN hoặc NGHE MÁY ngay khi đặt hàng thành công và CHỜ NHẬN HÀNG
                                </h3>
                            </div>
                        </div>
                        <div class="sidebar-footer">
                            <button class="btn-confirm">Hoàn tất đơn hàng</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/validateInput.js"></script>
    <script>
        Validator({
            form: '#form-payment',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#fullname', 'Vui lòng nhập đầy đủ tên của bạn'),
                Validator.isEmail('#email', 'Vui lòng nhập email của bạn'),
                Validator.isphone('#phone', 'Vui lòng nhập sđt của bạn'),
                Validator.isRequired('#address', 'Vui lòng nhập địa chỉ của bạn'),
                Validator.isRequired('input[name="method-payment"]', 'Vui lòng chọn phương thức thanh toán'),
                Validator.isRequired('#city', 'Chọn tỉnh của bạn'),
                Validator.isRequired('#County','Chọn huyện của bạn'),
                Validator.isRequired('#Ward','Chọn xã của bạn'),
            ],
            onSubmit: function(data) {
                console.log(data);
            }
        })
    </script>
</body>
</html>