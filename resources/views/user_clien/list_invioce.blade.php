@extends('master_layout.home_master')
@section('title', 'Danh sách đơn hàng')
@section('content_clien')
<!-- ========== MAIN CONTENT ========== -->
<div class="container-fluid mt-4 list_invioce">
    <div class="row">
        @include('user_clien.sidebar_account')
        <div class="col-md-9">
            <div class="row" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="col-md-12">
                    <div class="position-relative position-md-static px-md-6">
                        <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0"
                            id="pills-tab-8" role="tablist">
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link active" id="Jpills-four-example1-tab" data-toggle="pill"
                                    href="#Jpills-four-example1" role="tab" aria-controls="Jpills-four-example1"
                                    aria-selected="true" style="font-size:14px;">Tất cả</a>
                            </li>
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link" id="Jpills-two-example1-tab" data-toggle="pill"
                                    href="#Jpills-two-example1" role="tab" aria-controls="Jpills-two-example1"
                                    aria-selected="false" style="font-size:14px;">Đang xử lý</a>
                            </li>
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link" id="Jpills-one-example1-tab" data-toggle="pill"
                                    href="#Jpills-one-example1" role="tab" aria-controls="Jpills-one-example1"
                                    aria-selected="false" style="font-size:14px;">Đang giao</a>
                            </li>
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link" id="Jpills-three-example1-tab" data-toggle="pill"
                                    href="#Jpills-three-example1" role="tab" aria-controls="Jpills-three-example1"
                                    aria-selected="false" style="font-size:14px;">Thành công</a>
                            </li>
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link" id="Jpills-five-example1-tab" data-toggle="pill"
                                    href="#Jpills-five-example1" role="tab" aria-controls="Jpills-five-example1"
                                    aria-selected="false" style="font-size:14px;">Đã huỷ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content" id="Jpills-tabContent">
                        <div class="tab-pane fade active show" id="Jpills-four-example1" role="tabpanel"
                            aria-labelledby="Jpills-four-example1-tab">
                            @if ($invioce->count() > 0)
                            <table class="table table-striped table-bordered mt-3 text-center" style="font-size:12px;">
                                <thead>
                                    <th width="250px">Tên sản phẩm</th>
                                    <th width="50px">Hình ảnh</th>
                                    <th>Giá</th>
                                    <th width="80px">Số lượng</th>
                                    <th width="90px">Mã hoá đơn</th>
                                    <th>Ngày đặt hàng</th>
                                </thead>
                                    @foreach ($invioce as $a)
                                        @foreach (\App\Models\InvioceDetail::where('invioce_id', $a->id)->get() as $value)
                                            <tr>
                                                <td>{{ $value->product->name }}</td>
                                                <td>
                                                    <img src="{{ url('') }}{{$value->image}}" width="70px">
                                                </td>
                                                <td>{{ number_format($value->price) }}đ</td>
                                                <td>{{ $value->quantity }}</td>
                                                <td>{{ $value->invioce_id }}</td>
                                                <td>{{ $value->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                            </table>
                            @else
                            <img src="{{ asset('no_cart.png') }}" alt="no_cart" width="300px" class="mt-3" style="margin-left:240px;">
                            @endif
                        </div>
                        <div class="tab-pane fade" id="Jpills-two-example1" role="tabpanel"
                            aria-labelledby="Jpills-two-example1-tab">
                            @if ($invioce_dang_xu_ly->count() > 0)
                            <table class="table table-striped table-bordered mt-3 text-center" style="font-size:12px;">
                                <thead>
                                    <th width="250px">Tên sản phẩm</th>
                                    <th width="50px">Hình ảnh</th>
                                    <th>Giá</th>
                                    <th width="80px">Số lượng</th>
                                    <th width="90px">Mã hoá đơn</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Chức năng</th>
                                </thead>
                                    @foreach ($invioce_dang_xu_ly as $a)
                                        @foreach (\App\Models\InvioceDetail::where('invioce_id', $a->id)->get() as $value)
                                            <tr>
                                                <td>{{ $value->product->name }}</td>
                                                <td>
                                                    <img src="{{ url('') }}{{$value->image}}" width="70px">
                                                </td>
                                                <td>{{ number_format($value->price) }}đ</td>
                                                <td>{{ $value->quantity }}</td>
                                                <td>{{ $value->invioce_id }}</td>
                                                <td>{{ $value->created_at->format('Y-m-d') }}</td>
                                                <td>
                                                    <a href="javascript:;" data-url="{{route('cancelInvioce',['id'=>$value->invioce_id])}}" data-id="{{ $value->invioce_id }}" data-token="{{ csrf_token() }}" class="btn action_delete" style="background-color:#fed700;color:white">Huỷ</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                            </table>
                            @else
                            <img src="{{ asset('no_cart.png') }}" alt="no_cart" width="300px" class="mt-3" style="margin-left:240px;">
                            @endif
                        </div>
                        <div class="tab-pane fade" id="Jpills-one-example1" role="tabpanel"
                            aria-labelledby="Jpills-one-example1-tab">
                            @if ($invioce_dang_giao->count() > 0)
                            <table class="table table-striped table-bordered mt-3 text-center" style="font-size:12px;">
                                <thead>
                                    <th width="250px">Tên sản phẩm</th>
                                    <th width="50px">Hình ảnh</th>
                                    <th>Giá</th>
                                    <th width="80px">Số lượng</th>
                                    <th width="90px">Mã hoá đơn</th>
                                    <th>Ngày đặt hàng</th>
                                </thead>
                                    @foreach ($invioce_dang_giao as $a)
                                        @foreach (\App\Models\InvioceDetail::where('invioce_id', $a->id)->get() as $value)
                                            <tr>
                                                <td>{{ $value->product->name }}</td>
                                                <td>
                                                    <img src="{{ url('') }}{{$value->image}}" width="70px">
                                                </td>
                                                <td>{{ number_format($value->price) }}đ</td>
                                                <td>{{ $value->quantity }}</td>
                                                <td>{{ $value->invioce_id }}</td>
                                                <td>{{ $value->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                            </table>
                            @else
                            <img src="{{ asset('no_cart.png') }}" alt="no_cart" width="300px" class="mt-3" style="margin-left:240px;">
                            @endif
                        </div>
                        <div class="tab-pane fade" id="Jpills-three-example1" role="tabpanel"
                            aria-labelledby="Jpills-three-example1-tab">
                            @if ($invioce_thanh_cong->count() > 0)
                            <table class="table table-striped table-bordered mt-3 text-center" style="font-size:12px;">
                                <thead>
                                    <th width="250px">Tên sản phẩm</th>
                                    <th width="50px">Hình ảnh</th>
                                    <th>Giá</th>
                                    <th width="80px">Số lượng</th>
                                    <th width="90px">Mã hoá đơn</th>
                                    <th>Ngày đặt hàng</th>
                                </thead>
                                    @foreach ($invioce_thanh_cong as $a)
                                        @foreach (\App\Models\InvioceDetail::where('invioce_id', $a->id)->get() as $value)
                                            <tr>
                                                <td>{{ $value->product->name }}</td>
                                                <td>
                                                    <img src="{{ url('') }}{{$value->image}}" width="70px">
                                                </td>
                                                <td>{{ number_format($value->price) }}đ</td>
                                                <td>{{ $value->quantity }}</td>
                                                <td>{{ $value->invioce_id }}</td>
                                                <td>{{ $value->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                            </table>
                            @else
                            <img src="{{ asset('no_cart.png') }}" alt="no_cart" width="300px" class="mt-3" style="margin-left:240px;">
                            @endif
                        </div>
                        <div class="tab-pane fade" id="Jpills-five-example1" role="tabpanel"
                            aria-labelledby="Jpills-five-example1-tab">
                            @if ($invioce_huy->count() > 0)
                            <table class="table table-striped table-bordered mt-3 text-center" style="font-size:12px;">
                                <thead>
                                    <th width="250px">Tên sản phẩm</th>
                                    <th width="50px">Hình ảnh</th>
                                    <th>Giá</th>
                                    <th width="80px">Số lượng</th>
                                    <th width="90px">Mã hoá đơn</th>
                                    <th>Ngày đặt hàng</th>
                                </thead>
                                    @foreach ($invioce_huy as $a)
                                        @foreach (\App\Models\InvioceDetail::where('invioce_id', $a->id)->get() as $value)
                                            <tr>
                                                <td>{{ $value->product->name }}</td>
                                                <td>
                                                    <img src="{{ url('') }}{{$value->image}}" width="70px">
                                                </td>
                                                <td>{{ number_format($value->price) }}đ</td>
                                                <td>{{ $value->quantity }}</td>
                                                <td>{{ $value->invioce_id }}</td>
                                                <td>{{ $value->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                            </table>
                            @else
                            <img src="{{ asset('no_cart.png') }}" alt="no_cart" width="300px" class="mt-3" style="margin-left:240px;">
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('css')
<style>
    .text {
        color: #fed700 !important;
    }

</style>
@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // ----------- code xoa bang ajax -------------
    function actionDelete(event) {
        event.preventDefault();
        var id = $(this).data("id");
        let token = $(this).data("token");
        let requestUrl = $(this).data('url');
        let that = $(this); // laays za cais the a dang xoa
        Swal.fire({
            title: 'Bạn có chắc chắn muốn huỷ ?',
            text: "Huỷ đơn hàng sẽ không giao hàng được !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có, đồng ý!',
            cancelButtonText: 'Huỷ'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: "POST",
                    url: requestUrl,
                    data: {
                        "id" : id,
                        "_token": token,
                    },
                    success: function(data) {
                        if(data.code == 200) {
                            that.parent().parent().remove();
                            $(".list_invioce").load('{{route('listInvioce')}} .list_invioce');
                            Swal.fire(
                                'Thành công !',
                                'Huỷ đơn hàng thành công .',
                                'success'
                            )
                        }
                    },
                });
            }
        })
    }

    $(function() {
        $(document).on('click', '.action_delete', actionDelete);
    })
</script>
@endsection
