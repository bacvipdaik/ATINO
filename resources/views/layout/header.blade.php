<div class="contact">
    <div class="contact-tel">
        <i class="fa-solid fa-phone-volume" style="color: #5b5d61;"></i>
        <span>0961999999</span>
    </div>
    <div class="contact-info">
        <div class="contact-account">
            <a href="{{route('login')}}">
                <i class="fa-solid fa-user" style="color: #7f838a;"></i>
                <span>Tài khoản</span>
            </a>
        </div>
        <div class="contact-bag">
            <a href="" type="button" id="bag">
                <i class="fa-solid fa-bag-shopping" style="color: #66686b;"></i>
                <span>Giỏ hàng</span>
            </a>
        </div>
    </div>

</div>
<header class="header">
    <img class="logo" src="assets/images/logo.jpg" alt="">
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-item"><a class="menu_link" href="">TRANG chủ</a></li>
            <li class="navbar-item"><a href="" class="menu_link">áo thun</a>
                <div class="menu_child">
                    <div class="menu_child-select">
                        <ul class="menu_child-list">
                            <li class="menu_child-list-item"><a href="">Bộ Thể Thao</a></li>
                            <li class="menu_child-list-item"><a href="">Áo Phông</a></li>
                            <li class="menu_child-list-item"><a href="">Áo Polo</a></li>
                            <li class="menu_child-list-item"><a href="">Áo Sơ Mi Dài Tay</a></li>
                            <li class="menu_child-list-item"><a href="">Áo Tank Top</a></li>
                            <li class="menu_child-list-item"><a href="">Áo Sơ Mi Ngắn Tay</a></li>
                        </ul>
                    </div>
                    <ul class="item_content">
                        <li class="wrap">
                            <a href="" class="link">
                                <img src="assets/images/aophong1.jpeg" alt="">
                                <p>Áo phông nam</p>
                            </a>
                        </li>
                        <li class="wrap">
                            <a href="" class="link">
                                <img src="assets/images/aophong2.jpeg" alt="">
                                <p>Áo phông nam</p>
                            </a>
                        </li>
                        <li class="wrap">
                            <a href="" class="link">
                                <img src="assets/images/aophong3.jpeg" alt="">
                                <p>Áo phông nam</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navbar-item"><a class="menu_link" href="">QUẦN</a>
                <div class="menu_child">
                    <div class="menu_child-select">
                        <ul class="menu_child-list">
                            <li class="menu_child-list-item"><a href="">Quần Short</a></li>
                            <li class="menu_child-list-item"><a href="">Quần Jeans</a></li>
                            <li class="menu_child-list-item"><a href="">Quần Âu - Kaki</a></li>
                            <li class="menu_child-list-item"><a href="">Quần Nỉ Dài</a></li>
                            <li class="menu_child-list-item"><a href="">Quần Lót</a></li>
                        </ul>
                    </div>
                    <ul class="item_content">
                        <li class="wrap">
                            <a href="" class="link">
                                <img src="assets/images/quan1.jpeg" alt="">
                                <p>Quần short nam</p>
                            </a>
                        </li>
                        <li class="wrap">
                            <a href="" class="link">
                                <img src="assets/images/quan2.jpeg" alt="">
                                <p>Quần kaki nam</p>
                            </a>
                        </li>
                        <li class="wrap">
                            <a href="" class="link">
                                <img src="assets/images/quan3.jpeg" alt="">
                                <p>Quần kaki nam</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navbar-item"><a class="menu_link" href="">PHỤ KIỆN</a>
                <div class="menu_child">
                    <div class="menu_child-select">
                        <ul class="menu_child-list">
                            <li class="menu_child-list-item"><a href="">Túi - Balo</a></li>
                            <li class="menu_child-list-item"><a href="">Giày Dép</a></li>
                            <li class="menu_child-list-item"><a href="">Dây Lưng</a></li>
                            <li class="menu_child-list-item"><a href="">Mũ</a></li>
                            <li class="menu_child-list-item"><a href="">Tất</a></li>
                        </ul>
                    </div>
                    <ul class="item_content">
                        <li class="wrap">
                            <a href="" class="link">
                                <img src="assets/images/dep1.jpeg" alt="">
                                <p>Dép cao su pro</p>
                            </a>
                        </li>
                        <li class="wrap">
                            <a href="" class="link">
                                <img src="assets/images/tui1.jpeg" alt="">
                                <p>Túi đeo chéo</p>
                            </a>
                        </li>
                        <li class="wrap">
                            <a href="" class="link">
                                <img src="assets/images/tui2.jpeg" alt="">
                                <p>Túi đeo chéo</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navbar-item"><a class="menu_link" href="">THÔNG TIN</a></li>
        </ul>
    </nav>
    <div class="search">
        <input type="text" placeholder="Tìm kiếm...">
        <button class="btn-search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
    <script>
        const elementbag = document.getElementById('bag')
        elementbag.addEventListener('click', event => {
            event.preventDefault();
        })
    </script>
</header>
