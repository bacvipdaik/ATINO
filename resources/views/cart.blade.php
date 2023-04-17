<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>cart</title>
</head>

<body>
    <main>
        <div class="layout-cart">
            <div class="container-fluid">
                <div class="container">
                    <div class="content-cart">
                        <form action="" class="form-cart">
                            <div class="col-left">
                                <div class="heading-page">
                                    <div class="heading-pageCart">
                                        <h1>Giỏ hàng của bạn</h1>
                                        <span class="count-cart">
                                            &#40;Có <b>1</b> sản phẩm trong giỏ hàng&#41;
                                        </span>
                                    </div>
                                </div>
                                <table>
                                    <thead></thead>
                                    <tbody>
                                        <tr class="product">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <img src="assets/images/newProducts/polo1.jpeg" alt="">
                                                </div>
                                            </td>
                                            <td class="product-descirption">
                                                <span>Áo polo1 Đen 2XL</span>
                                                <div class="wrap-icon">
                                                    <a href="">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="qtt">
                                                <div class="qtt-checkout">
                                                    <span class="and-down">-</span>
                                                    <input type="text" name="" id="" value="1">
                                                    <span class="and-up">+</span>
                                                </div>
                                            </td>
                                            <td class="product-price">
                                                <span>200000đ</span>
                                            </td>
                                        </tr>
                                        <tr class="product">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <img src="assets/images/newProducts/polo1.jpeg" alt="">
                                                </div>
                                            </td>
                                            <td class="product-descirption">
                                                <span>Áo polo1 Đen 2XL</span>
                                                <div class="wrap-icon">
                                                    <a href="">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="qtt">
                                                <div class="qtt-checkout">
                                                    <span class="and-down">-</span>
                                                    <input type="text" name="" id="" value="1">
                                                    <span class="and-up">+</span>
                                                </div>
                                            </td>
                                            <td class="product-price">
                                                <span>200000đ</span>
                                            </td>
                                        </tr>
                                        <tr class="product">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <img src="assets/images/newProducts/polo1.jpeg" alt="">
                                                </div>
                                            </td>
                                            <td class="product-descirption">
                                                <span>Áo polo1 Đen 2XL</span>
                                                <div class="wrap-icon">
                                                    <a href="">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="qtt">
                                                <div class="qtt-checkout">
                                                    <span class="and-down">-</span>
                                                    <input type="text" name="" id="" value="1">
                                                    <span class="and-up">+</span>
                                                </div>
                                            </td>
                                            <td class="product-price">
                                                <span>200000đ</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-right">
                                <div class="boxRightCart">
                                    <div class="titleInfoCart">Tóm tắt đơn hàng</div>
                                    <div class="summary-subtotal">
                                        <p class="order-infor">
                                            <span class="titleOrder">Chưa bao gồm phí vận chuyển</span>
                                        </p>
                                        <p class="order-infor boldPrice">
                                            <span class="total-order"><b>Tổng tiền</b></span>
                                            <span class="total-price"><b>2000000đ</b></span>
                                        </p>
                                    </div>
                                    <div class="note-subtotal">
                                        <i>Bạn có thể nhập mã giảm giá ở trang thanh toán</i>
                                    </div>
                                    <div class="btn-cart">
                                        <button class="btn-submit">Tiến hành đặt hàng</button>
                                        <a href="{{ route('home')}}" class="link-continue">Mua thêm sản phẩm</a>
                                    </div>
                                </div>
                                <ul class="service">
                                    <li>
                                        <i class="fa-solid fa-truck-fast"></i>
                                        <span>Giao hàng nội thành trong 24 giờ</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>Giao hàng nội thành trong 24 giờ</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone-volume"></i>
                                        <span>TỔNG ĐÀI BÁN HÀNG 096728.4444</span>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
