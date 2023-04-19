const newProducts = [
    {
        urlMain: '../assets/images/newProducts/polo1.jpeg',
        urlSub1: '../assets/images/newProducts/polo1.jpeg',
        urlSub2: '../assets/images/newProducts/polo2.jpeg',
        name: 'Áo polo 1',
        price: '200000',
    },

    {
        urlMain: '../assets/images/newProducts/polo3.jpeg',
        urlSub1: '../assets/images/newProducts/polo3.jpeg',
        urlSub2: '../assets/images/newProducts/polo4.jpeg',
        name: 'Áo polo 2',
        price: '200000',
    },

    {
        urlMain: '../assets/images/newProducts/polo5.jpeg',
        urlSub1: '../assets/images/newProducts/polo5.jpeg',
        urlSub2: '../assets/images/newProducts/polo6.jpeg',
        name: 'Áo polo 3',
        price: '200000',
    },

    {
        urlMain: '../assets/images/newProducts/polo7.jpeg',
        urlSub1: '../assets/images/newProducts/polo7.jpeg',
        urlSub2: '../assets/images/newProducts/polo8.jpeg',
        name: 'Áo polo 4',
        price: '200000',
    },

    {
        urlMain: '../assets/images/newProducts/polo9.jpeg',
        urlSub1: '../assets/images/newProducts/polo9.jpeg',
        urlSub2: '../assets/images/newProducts/polo10.jpeg',
        name: 'Áo polo 5',
        price: '200000',
    },

    {
        urlMain: '../assets/images/newProducts/polo11.jpeg',
        urlSub1: '../assets/images/newProducts/polo11.jpeg',
        urlSub2: '../assets/images/newProducts/polo12.jpeg',
        name: 'Áo polo 6',
        price: '200000',
    },

    {
        urlMain: '../assets/images/newProducts/polo13.jpeg',
        urlSub1: '../assets/images/newProducts/polo13.jpeg',
        urlSub2: '../assets/images/newProducts/polo14.jpeg',
        name: 'Áo polo 7',
        price: '200000',
    },

    {
        urlMain: '../assets/images/newProducts/polo15.jpeg',
        urlSub1: '../assets/images/newProducts/polo15.jpeg',
        urlSub2: '../assets/images/newProducts/polo16.jpeg',
        name: 'Áo polo 8',
        price: '200000',
    },
]
const container = document.getElementById('productList')


newProducts.forEach(function (product) {
    const productBoder = document.createElement('div');
    productBoder.setAttribute('class', 'productBoder');
    productBoder.innerHTML= `
       <div class="product-block">
        <div class="product-img">
                    <a href=""><img id="product-img" src="${product.urlMain}" alt=""></a>
                </div>
                <div class="product-detail">
                    <div class="variantColor">
                        <ul>
                            <li class="color-item"><a href=""><img id="color-item1" src="${product.urlSub1}" alt=""></a>
                            </li>
                            <li class="color-item"><a href=""><img id="color-item2" src="${product.urlSub2}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="box-pro-detail">
                        <h3 class="pro-name">
                        <a id="product-name" href="">${product.name}</a>
                        </h3>
                        <div class="box-pro-price">
                            <p id="product-price" class="pro-price">${product.price}₫</p>
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
        `;
      container.appendChild(productBoder);
})

