@extends('frontend.layout.master')
@section('content')
@section('page-class', 'user-acount')
@push('css')
    <style>
        [class~=user-acount] [class~=btn][class~=btn-primary] {
            margin-top: 0;
            margin-bottom: 0;
        }
        .table td, .table th{
            vertical-align: middle;
        }
    </style>
@endpush
<div class="main-content">
    <div class="wrap-banner">

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
                                <span>Tài khoản</span>
                            </span>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>

        <div class="acount head-acount">
            <div class="container">
                <div id="main">
                    <h1 class="title-page">Thông tin tài khoản</h1>
                    <div class="content" id="block-history">
                        <table class="std table">
                            <tbody>
                                <tr>
                                    <th class="first_item">Họ tên :</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <th class="email">Email :</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th class="first_item">Address :</th>
                                    <td>123 canberra Street, New York, USA</td>
                                </tr>
                               
                                <tr>
                                    <th class="first_item">Số điện thoại :</th>
                                    <td>0123456789</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                        Cập nhật
                    </button>
                    <div class="order">
                        <h4>Lịch sử đặt hàng</h4>
                        @if ($orders->count() == 0)
                            <p>Bạn chưa đặt bất kỳ đơn đặt hàng nào.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col" class="text-center">Thời gian</th>
                                        <th scope="col" class="text-center">Phương thức thanh toán</th>
                                        <th scope="col" class="text-center">Trạng thái</th>
                                        <th scope="col" class="text-right">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <th scope="row">#{{$order->id}}</th>
                                            <td class="text-center">{{date_format($order->created_at, 'd-m-Y H:i:s')}}</td>
                                            <td class="text-center">{{$order->payment == 1 ? 'Ví VNPay' : 'Tiền mặt'}}</td>
                                            @if($order->status == 0)
                                                <td class="text-center"><span class="text-dark">Hủy đơn</span></td>
                                            @elseif($order->status == 1)
                                                <td class="text-center"><span class="text-danger">Trả hàng</span></td>
                                            @elseif($order->status == 2)
                                                <td class="text-center"><span class="text-warning">Chờ xác nhận</span></td>
                                            @elseif($order->status == 3)
                                                <td class="text-center"><span class="text-primary">Đang xử lý</span></td>
                                            @else
                                                <td class="text-center"><span class="text-success">Đã giao hàng</span></td>
                                            @endif
                                            <td class="text-center">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    @if($order->status == 2)
                                                    <form action="{{route('order.cancel', $order)}}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-secondary cancel mr-3">Hủy đơn</button>
                                                    </form>
                                                    @elseif($order->status == 3)
                                                    <form action="{{route('order.return', $order)}}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger return mr-3">Trả hàng</button>
                                                    </form>
                                                    <form action="{{route('order.receive', $order)}}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-info receive mr-3">Nhận hàng</button>
                                                    </form>
                                                    @endif
                                                    <a href="{{route('order.detail', $order)}}" class="btn btn-primary text-white">Xem chi tiết</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection