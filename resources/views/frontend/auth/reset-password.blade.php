@extends('frontend.layout.master')
@section('content')
@section('page-id', 'contact')
@section('page-class', 'user-reset-password blog')

<div class="main-content">
    <div class="wrap-banner">

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
                                <span>Đặt lại mật khẩu</span>
                            </span>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>
    </div>

    <!-- main -->
    <div id="wrapper-site">
        <div class="container">
            <div class="row">
                <div id="content-wrapper" class="onecol">
                    <div id="main">
                        <div class="page-content">
                            <form action="{{route('password.update')}}" class="forgotten-password" method="post" id="customer-form">
                                @csrf
                                <input type="hidden" value="{{$token}}" name="token">
                                <h1 class="text-center title-page">Đặt lại mật khẩu</h1>
                                <div class="form-fields text-center ">
                                    <div class="form-group center-email-fields">
                                        <div class="email mb-3">
                                            <input type="email" name="email" id="email" value="" class="form-control" placeholder="Nhập email">
                                            @error('email')
                                                <p class="text-danger text-left">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="password mb-3">
                                            <input type="password" name="password" id="password" value="" class="form-control" placeholder="Mật khẩu mới">
                                            @error('password')
                                                <p class="text-danger text-left">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="password">
                                            <input type="password" name="password_confirmation" id="password_confirmation" value="" class="form-control" placeholder="Nhập lại mật khẩu">
                                            @error('password_confirmation')
                                                <p class="text-danger text-left">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <button class="form-control-submit btn btn-primary" name="submit"
                                                type="submit">
                                                Xác nhận
                                            </button>
                                        </div>
                                    </div>
                                    <a href="{{route('login')}}" class="account-link">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span class="text-center">Quay lại đăng nhập</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection