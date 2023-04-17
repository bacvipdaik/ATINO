@extends('layout.home')
@push('css')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/slide.css">
@endpush

@section('slider')
    @include('slide')
@endsection

@section('content')
    <div>
        <div class="container">
            <div class="title">
                <h2>
                    <a class="title-a" href="">Sản phẩm mới</a>
                </h2>
                <ul class="tab-title">
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                </ul>
            </div>
            <div id="productList" class="productList-home">  
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h2>
                    <a class="title-a" href="">Sản phẩm mới</a>
                </h2>
                <ul class="tab-title">
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                </ul>
            </div>
            <div class="productList-home">
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                                    </li>
                                    <li class="color-item"><a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h2>
                    <a class="title-a" href="">Sản phẩm mới</a>
                </h2>
                <ul class="tab-title">
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                </ul>
            </div>
            <div class="productList-home">
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h2>
                    <a class="title-a" href="">Sản phẩm mới</a>
                </h2>
                <ul class="tab-title">
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                    <li class="tab-title-item"><a href="">aaaa</a></li>
                </ul>
            </div>
            <div class="productList-home">
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productBoder">
                    <div class="product-block">
                        <div class="product-img">
                            <a href=""><img src="assets/images/newProducts/polo1.jpeg" alt=""></a>
                        </div>
                        <div class="product-detail">
                            <div class="variantColor">
                                <ul>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                    <li class="color-item"><img src="assets/images/newProducts/polo1.jpeg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="">aopolo1</a>
                                </h3>
                                <div class="box-pro-price">
                                    <p class="pro-price">200000</p>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action-buy">
                                <a href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Mua nhanh</span>
                                </a>
                            </div>
                            <span class="boundary"></span>
                            <div class="action-detail">
                                <a href="">
                                    <i class="fa-solid fa-eye"></i>
                                    <span> Xem chi tiết</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/home.js"></script>
@endsection
