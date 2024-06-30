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
                                <td class="align-middle">
                                    
                                </td>
                                <td>
                                    <div class="comparison-item"><span class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                        <a class="comparison-item-thumb" href="shop-single.html"><img src="https://www.bootdey.com/image/160x160/FF0000/000000" alt="Apple iPhone Xs Max"></a><a class="comparison-item-title" href="shop-single.html">Apple iPhone Xs Max</a>
                                        <button class="btn btn-pill btn-outline-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="comparison-item"><span class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                        <a class="comparison-item-thumb" href="shop-single.html"><img src="https://www.bootdey.com/image/160x160/1E90FF/000000" alt="Google Pixel 3 XL"></a><a class="comparison-item-title" href="shop-single.html">Google Pixel 3 XL</a>
                                        <button class="btn btn-pill btn-outline-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="comparison-item"><span class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                        <a class="comparison-item-thumb" href="shop-single.html"><img src="https://www.bootdey.com/image/160x160/FF8C00/000000" alt="Samsung Galaxy S10+"></a><a class="comparison-item-title" href="shop-single.html">Samsung Galaxy S10+</a>
                                        <button class="btn btn-pill btn-outline-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody id="summary" data-filter="target">
                            <tr class="bg-secondary">
                                <th class="text-uppercase">Summary</th>
                                <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                                <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                                <td><span class="text-dark font-weight-semibold">Samsung Galaxy S10+</span></td>
                            </tr>
                            <tr>
                                <th>Giá bán</th>
                                <td>200,000 VNĐ</td>
                                <td>200,000 VNĐ</td>
                                <td>200,000 VNĐ</td>
                            </tr>
                            <tr>
                                <th>Danh mục</th>
                                <td>6.5-inch</td>
                                <td>6.3-inch</td>
                                <td>6.4-inch</td>
                            </tr>
                            <tr>
                                <th>Thương hiệu</th>
                                <td>64 GB</td>
                                <td>64 GB</td>
                                <td>128 GB</td>
                            </tr>
                            <tr>
                                <th>Nơi sản xuất</th>
                                <td>Dual 12-megapixel</td>
                                <td>12.2-megapixel</td>
                                <td>12,16,12-megapixel</td>
                            </tr>
                            <tr>
                                <th>Loại da</th>
                                <td>3,174 mAh</td>
                                <td>3,430 mAh</td>
                                <td>4,100 mAh</td>
                            </tr>
                            <tr>
                                <th>Kết cấu</th>
                                <td>3,174 mAh</td>
                                <td>3,430 mAh</td>
                                <td>4,100 mAh</td>
                            </tr>
                            <tr>
                                <th>Đánh giá</th>
                                <td>3,174 mAh</td>
                                <td>3,430 mAh</td>
                                <td>4,100 mAh</td>
                            </tr>
                            <tr>
                                <th>Mô tả</th>
                                <td>3,174 mAh</td>
                                <td>3,430 mAh</td>
                                <td>4,100 mAh</td>
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
                if (compareProducts.length === 0) {
                    return;
                }

                let compareHtml = '';

                compareProducts.forEach(function(product) {
                    compareHtml += `
                        <div class="product-item">
                            <h3>${product.name}</h3>
                            <p>Price: ${product.price}</p>
                            <img src="${product.image}" alt="${product.name}" />
                            <button class="remove-compare-btn" data-id="${product.id}">Xóa</button>
                        </div>
                    `;
                });

                $('#compare-container').html(compareHtml);
            }
        })
    
        qrenderCompareProducts();

    </script>
@endpush
