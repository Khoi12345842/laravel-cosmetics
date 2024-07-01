@extends('frontend.layout.master')
@section('content')
@section('page-id', 'contact')
@section('page-class', 'blog')
@push('css')
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/compare.css">
@endpush
<div class="main-content">
    <div id="wrapper-site">
        <div id="content-wrapper">
            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="/">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <span>
                                    <span>So sánh sản phẩm</span>
                                </span>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
            <div class="container py-5 mb-2">
                <div class="content comparison-table">
                    <table class="table table-bordered">
                        <thead class="bg-secondary">
                            <tr>
                                <td class="align-middle"></td>
                                <td class="product-column"></td>
                                <td class="product-column"></td>
                                <td class="product-column"></td>
                            </tr>
                        </thead>
                        <tbody id="summary" data-filter="target">
                            <tr class="bg-secondary">
                                <th class="">Tên sản phẩm</th>
                                <td class="product-name"></td>
                                <td class="product-name"></td>
                                <td class="product-name"></td>
                            </tr>
                            <tr>
                                <th>Giá bán</th>
                                <td class="product-price"></td>
                                <td class="product-price"></td>
                                <td class="product-price"></td>
                            </tr>
                            <tr>
                                <th>Danh mục</th>
                                <td class="product-cate"></td>
                                <td class="product-cate"></td>
                                <td class="product-cate"></td>
                            </tr>
                            <tr>
                                <th>Thương hiệu</th>
                                <td class="product-brand"></td>
                                <td class="product-brand"></td>
                                <td class="product-brand"></td>
                            </tr>
                            <tr>
                                <th>Nơi sản xuất</th>
                                <td class="product-origin"></td>
                                <td class="product-origin"></td>
                                <td class="product-origin"></td>
                            </tr>
                            <tr>
                                <th>Loại da</th>
                                <td class="product-skin_type"></td>
                                <td class="product-skin_type"></td>
                                <td class="product-skin_type"></td>
                            </tr>
                            <tr>
                                <th>Kết cấu</th>
                                <td class="product-texture"></td>
                                <td class="product-texture"></td>
                                <td class="product-texture"></td>
                            </tr>
                            <tr>
                                <th>Đánh giá</th>
                                <td class="product-rating"></td>
                                <td class="product-rating"></td>
                                <td class="product-rating"></td>
                            </tr>
                            <tr>
                                <th>Mô tả</th>
                                <td class="product-description"></td>
                                <td class="product-description"></td>
                                <td class="product-description"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
    <script>
        $(document).ready(function() {
            let compareProducts = JSON.parse(localStorage.getItem('compareProducts')) || [];

            function renderCompareProducts() {
                let productColumns = $('.product-column');
                let productNames = $('td.product-name');
                let productPrices = $('td.product-price');
                let productCates = $('td.product-cate');
                let productBrands = $('td.product-brand');
                let productOrigins = $('td.product-origin');
                let productSkinTypes = $('td.product-skin_type');
                let productTextures = $('td.product-texture');
                let productRatings = $('td.product-rating');
                let productDescriptions = $('td.product-description');

                // Lặp qua danh sách sản phẩm và hiển thị chúng trong bảng
                for (let i = 0; i < 3; i++) {
                    if (compareProducts[i]) {
                        let product = compareProducts[i];
                        var shortDescription = (product.description).substring(0, 150);
                        var productDetailLink = '/san-pham/' + product.id;

                        // Hiển thị thông tin sản phẩm trong cột
                        $(productColumns[i]).html(`
                            <div class="comparison-item">
                                <span class="remove-item" data-id="${product.id}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </span>
                                <a class="comparison-item-thumb" href="${productDetailLink}"><img src="${product.image_url}" alt="${product.name}"></a>
                                <a class="comparison-item-title" href="${productDetailLink}">${product.name}</a>
                                <a href="/cart/add/${product.id}" class="btn btn-primary add-to-cart add-item" data-toggle="toast" data-target="#cart-toast">Thêm vào giỏ hàng</a>
                            </div>
                        `);

                        $(productNames[i]).html(`<span class="text-dark font-weight-semibold">${product.name}</span>`);
                        $(productPrices[i]).html(`
                            <span class="price">${product.price_sale}</span>
                            <del class="regular-price">${product.price}</del>
                        `)
                        $(productCates[i]).text(product.category)
                        $(productBrands[i]).text(product.brand)
                        $(productOrigins[i]).text(product.origin)
                        $(productSkinTypes[i]).text(product.skin_type)
                        $(productTextures[i]).text(product.texture)
                        if(product.point == 0){
                            $(productRatings[i]).text('Chưa có đánh giá')
                        }
                        else{
                            $(productRatings[i]).text(product.point)
                        }
                        $(productDescriptions[i]).html(shortDescription + '... <a class="text-primary" href="' + productDetailLink + '">[Đọc thêm]</a>')
                    } else {
                        // Để trống cột nếu không có sản phẩm
                        $(productColumns[i]).html(`
                            <div class="text-center">
                                <a href="/cua-hang" class="btn btn-secondary btn-dashed" data-toggle="toast" data-target="#cart-toast">Thêm sản phẩm</a>
                            </div>
                        `);
                        $(productNames[i]).html('')
                        $(productPrices[i]).html('')
                        $(productCates[i]).text('')
                        $(productBrands[i]).text('')
                        $(productOrigins[i]).text('')
                        $(productSkinTypes[i]).text('')
                        $(productTextures[i]).text('')
                        $(productRatings[i]).text('')
                        $(productDescriptions[i]).html('')

                    }

                    if (compareProducts.length <= 1) {
                        $('.remove-item').hide();
                    } else {
                        $('.remove-item').show();
                    }
                }
            }

            renderCompareProducts();

            $(document).on('click', '.remove-item', function() {
                var productId = $(this).data('id');

                compareProducts = compareProducts.filter(function(product) {
                    return product.id !== productId;
                });

                localStorage.setItem('compareProducts', JSON.stringify(compareProducts));

                renderCompareProducts();

                toastr.success('Sản phẩm đã được xóa khỏi danh sách so sánh.', 'Success', {timeout:3000})
            })
           
        })

        
    
    </script>
@endpush
