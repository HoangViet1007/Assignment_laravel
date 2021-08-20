@extends('master_layout.home_master')
@section('title', 'Danh sách giỏ hàng')
@section('content_clien')
<div class="container">
    <div class="row">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="">Giỏ hàng</a></li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->
    </div>
    <div class="mb-4">
        <h1 class="text-center">Giỏ hàng</h1>
    </div>
    <div class="mb-10 cart-table">
        @if (!empty(Session::get('cart')))
            <form class="mb-4" action="#" method="post">
                <table class="table table-bordered" cellspacing="0" id="table_list_cart">
                    <thead>
                        <th>#</th>
                        <th width="100px">Hình ảnh</th>
                        <th width="250px">Tên sản phẩm</th>
                        <th>Bản</th>
                        <th>Màu</th>
                        <th>Giá</th>
                        <th class="product-quantity w-lg-15">Số lượng</th>
                        <th class="product-subtotal">Tổng</th>
                    </thead>
                    <tbody>
                        @foreach ($cart as $a)
                            <tr class="row_pro_cart">
                                <td class="text-center">
                                    <a href="#" class="text-gray-32 font-size-26 delete_item_cart"
                                        onclick="delete_item_cart({{ $a['option_id'] }})">×</a>
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <a href="{{ route('product_detail', ['slug' => $a['slug'], 'id' => $a['id']]) }}"><img
                                            class="img-fluid max-width-100 p-1 border border-color-1"
                                            src="{{ url('') }}{{ $a['image'] }}" alt="Image Description"></a>
                                </td>
                                <td>
                                    <a href="{{ route('product_detail', ['slug' => $a['slug'], 'id' => $a['id']]) }}"
                                        style="color:black">{{ $a['name'] }}</a>
                                </td>
                                <td>
                                    @if ($a['name_attribute'] == 0)
                                        {{ 'Bản Full' }}
                                    @else
                                        {{ $a['name_attribute'] }}
                                    @endif
                                </td>
                                <td>{{ $a['option_name'] }}</td>
                                <td class="text-danger price_in_cart">{{ number_format($a['price']) }} <u>đ</u> </td>
                                <td data-title="Quantity">
                                    <span class="sr-only">Quantity</span>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-2 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center box_price">
                                            <div class="col">
                                                <input
                                                    class="js-result form-control h-auto border-0 rounded p-0 shadow-none"
                                                    type="number" value="{{ $a['quantity'] }}" name="quantity"
                                                    class="quantity" min="1" id="quantity-{{ $a['option_id'] }}"
                                                    onchange="updateCart({{ $a['option_id'] }})">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- End Quantity -->
                                </td>
                                <td data-title="Total">
                                    <span class="total_row text-danger">{{ number_format($a['price'] * $a['quantity']) }} <u>đ</u></span>
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td colspan="6" class="border-top space-top-2 justify-content-center">
                                    <div class="pt-md-3">
                                        <div class="d-block d-md-flex flex-center-between">
                                            <div class="mb-3 mb-md-0 w-xl-40">
                                                <!-- Apply coupon Form -->

                                                <label class="sr-only" for="subscribeSrEmailExample1">Mã giảm giá</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="text" id="subscribeSrEmailExample1"
                                                        placeholder="Mã giảm giá" aria-label="Coupon code"
                                                        aria-describedby="subscribeButtonExample2" required="">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-block btn-dark px-4" type="button"
                                                            id="subscribeButtonExample2"><i class="fas fa-tags d-md-none"></i><span
                                                                class="d-none d-md-inline">Xác nhận</span></button>
                                                    </div>
                                                </div>

                                                <!-- End Apply coupon Form -->
                                            </div>
                                            <div class="d-md-flex">
                                                <button type="button" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto delete_cart" onclick="deleteCart()">Xoá giỏ hàng</button>
                                                <a href="{{ route('getcheckout') }}" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-none d-md-inline-block">Thanh toán</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </form>
            @else
                <p class="text-center"><img src="{{asset('cart.png')}}" alt=""></p>
                <p class="text-center">Chưa có sản phẩm nào trong giỏ hàng !</p>
            @endif
        </div>
        <div class="mb-8 cart-total">
            @if(!empty(Session::get('cart')))
            <div class="row">
                <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7 col-md-8 offset-md-4">
                    <div class="border-bottom border-color-1 mb-3">
                        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Tổng tiền</h3>
                    </div>
                    <table class="table mb-3 mb-md-0">
                        <tbody>
                            <tr class="cart-subtotal">
                                <th>Ship</th>
                                <td data-title="Subtotal"><span class="amount">30.000 <u>đ</u> </span></td>
                            </tr>
                            @php
                                $number = 0;
                                $total = 0;
                                if (!empty(Session::get('cart'))) {
                                    foreach (Session::get('cart') as $a) {
                                        $number += $a['quantity'];
                                        $total += $a['price'] * $a['quantity'];
                                    }
                                }
                            @endphp
                            <tr class="order-total">
                                <th>Tổng tiền</th>
                                <td data-title="Total" class="d-flex justify-content-end total"><strong><span class="amount">
                                            @if (isset($total)) {{ number_format($total) }}
                                                <u>đ</u>
                                            @endif
                                        </span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button"
                        class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-md-none">Proceed to
                        checkout</button>
                </div>
            </div>
            @endif
        </div>
    </div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function updateCart(id) {
        var quantity = $('#quantity-' + id).val();
        let _token = $('input[name="_token"]').val();
        var option_id = id;
        var url = '{!! route('updateCart') !!}';

        $.post(url, {
                quantity,
                option_id,
                _token: _token
            })
            .done(function(response) {
                // load lại div bằng jquery
                //load lại price ở table và tổng tiền
                $("#table_list_cart").load('{{ route('card') }} #table_list_cart');
                $(".total").load('{{ route('card') }} .total');
                $(".cart-table").load('{{ route('card') }} .cart-table');
                $(".checkout-table").load('{{ route('getcheckout') }} .checkout-table');


                // load lại 2 cái ở header
                $(".ul_list_cart").load('{{ route('home') }} .ul_list_cart');
                $(".price_in_cart").load('{{ route('home') }} .price_in_cart');
            });

    }

    function delete_item_cart(id) {
        let _token = $('input[name="_token"]').val();
        let option_id = id;
        var url = '{!! route('delete_items_card') !!}';
        $.post(url, {
                option_id,
                _token: _token
            })
            .done(function(response) {
                // load lại div bằng jquery
                //load lại price ở table và tổng tiền
                $("#table_list_cart").load('{{ route('card') }} #table_list_cart');
                $(".total").load('{{ route('card') }} .total');
                $(".checkout-table").load('{{ route('getcheckout') }} .checkout-table');


                // load lại 2 cái ở header
                $(".ul_list_cart").load('{{ route('home') }} .ul_list_cart');
                $(".price_in_cart").load('{{ route('home') }} .price_in_cart');
            });

    }

    function deleteCart() {
        let _token = $('input[name="_token"]').val();
        var url = '{!! route('delete_card') !!}';

        Swal.fire({
            title: 'bạn có muốn xoá giỏ hàng?',
            text: "Xoá sẽ mất hết sản phẩm trong giỏ hàng !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có, đồng ý!',
            cancelButtonText: 'Huỷ'
        }).then((result) => {
            if (result.isConfirmed) {
                $.post(url, {
                        _token: _token
                    })
                    .done(function(response) {
                        // load lại div bằng jquery
                        //load lại price ở table và tổng tiền
                        $("#table_list_cart").load('{{ route('card') }} #table_list_cart');
                        $(".total").load('{{ route('card') }} .total');
                        $(".checkout-table").load('{{ route('getcheckout') }} .checkout-table');
                        $(".cart-total").load('{{ route('card') }} .cart-total');
                        $(".cart-table").load('{{ route('card') }} .cart-table');


                        // load lại 2 cái ở header
                        $(".ul_list_cart").load('{{ route('home') }} .ul_list_cart');
                        $(".price_in_cart").load('{{ route('home') }} .price_in_cart');
                    });
            }
        })

    }
</script>
@endsection
