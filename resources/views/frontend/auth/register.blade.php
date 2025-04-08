@extends('frontend.layout.master')
@section('content')
@section('page-id', 'contact')
@section('page-class', 'user-register blog')

<style>
    /* Nền tổng quan */
    body {
        background: url('/assets/frontend/img/home/backgroundRegister.png') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
    }

    /* Lớp phủ */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    /* Tiêu đề và nội dung chính */
    .title-page {
        font-family: 'Dancing Script', cursive;
        font-size: 2.5rem;
        color: #4CAF50;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        margin-bottom: 2rem;
    }

    .register-form {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #ddd;
        padding: 0.75rem;
        margin-bottom: 1rem;
    }

    .form-control:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    .btn-primary {
        background-color: #4CAF50;
        border: none;
        border-radius: 10px;
        padding: 0.75rem 2rem;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #43A047;
        transform: scale(1.05);
    }

    .btn-primary:active {
        transform: scale(0.95);
    }

    .forgot-password a {
        color: #4CAF50;
        text-decoration: none;
        transition: color 0.3s;
    }

    .forgot-password a:hover {
        color: #43A047;
    }

    /* Breadcrumb */
    .breadcrumb {
        margin-bottom: 2rem;
    }

    .breadcrumb-bg {
        background: rgba(255, 255, 255, 0.8);
        padding: 1rem;
        border-radius: 10px;
    }

    .breadcrumb ol li a {
        color: #4CAF50;
        text-decoration: none;
    }

    .breadcrumb ol li a:hover {
        text-decoration: underline;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .register-form {
            padding: 1.5rem;
        }

        .title-page {
            font-size: 2rem;
        }
    }
    .breadcrumb {
    color: none !important; /* Ensure breadcrumb text color is inherited from the parent */
    background: none !important;
}
</style>

<div class="main-content">
    <div class="wrap-banner">
        <!-- Breadcrumb -->
        <nav class="breadcrumb-bg">
            <div class="container no-index">
                <div class="breadcrumb">
                    <ol>
                        <li>
                            <a href="/">
                                <b>Trang chủ</b>
                            </a>
                        </li>
                        <li>
                            <span>
                                <b>Đăng ký</b>
                            </span>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>
    </div>

    <!-- Main register form -->
    <div id="wrapper-site">
        <div class="container position-relative">
            <div class="overlay"></div>
            <div class="row">
                <div id="content-wrapper" class="col-lg-12 onecol">
                    <div id="main">
                        <div id="content" class="page-content">
                            <div class="register-form mx-auto">
                                <h1 class="text-center title-page">Tạo tài khoản</h1>
                                <form action="{{route('registerPost')}}" id="customer-form" class="js-customer-form" method="post">
                                    @csrf
                                    <div>
                                        <div class="form-group">
                                            <input class="form-control" name="name" type="text" value="{{old('name')}}" placeholder="Họ tên">
                                            @error('name')
                                                <p class="text-left text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" type="email" value="{{old('email')}}" placeholder="Email">
                                            @error('email')
                                                <p class="text-left text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control js-visible-password" name="password" type="password" placeholder="Mật khẩu">
                                            @error('password')
                                                <p class="text-left text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control js-visible-password" name="password_confirmation" type="password" placeholder="Nhập lại mật khẩu">
                                            @error('password_confirmation')
                                                <p class="text-left text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="no-gutters text-center">
                                            <div class="forgot-password">
                                                <a href="{{route('login')}}" rel="nofollow">
                                                    Đăng nhập tài khoản!
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="text-center no-gutters">
                                            <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                                Đăng ký
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
