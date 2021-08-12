@extends('master_layout.admin_master')
@section('title', 'Dashboard')
@section('main_admin')
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="info-box bg-gradient-info">
                <span class="info-box-icon"> <i class="fa fa-user text-gray-300" aria-hidden="true"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Người dùng</span>
                    <span class="info-box-number">{{ $user }}</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>

        <!-- category s -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="info-box bg-gradient-warning">
                <span class="info-box-icon"> <i class="fas fa-dollar-sign text-gray-300"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Doanh thu</span>
                    <span class="info-box-number">{{number_format($price_doanh_thu) . 'đ'}}</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>

        <!-- product -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="info-box bg-gradient-success">
                <span class="info-box-icon"> <i class="fa fa-shopping-cart text-gray-300" aria-hidden="true"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sản phẩm</span>
                    <span class="info-box-number">{{ $product }}</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>

        <!-- comment -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="fas fa-file-invoice-dollar"></i></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Đơn hàng</span>
                    <span class="info-box-number">{{ $invioces }}</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>

    <div class="row">
        <p class="font-weight-bold">Danh sách hoá đơn</p>
    </div>

    <div class="row">
       <div class="col-md-12">
        <table style="width:100%;font-size:13px;"
        class="table table-bordered table-content dataTable no-footer dtr-inline text-center" id="category-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Email</th>
                <th>SDT</th>
                <th>Địa chỉ</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
       </div>
    </div>


</div>

@endsection

@section('js')
<script>
    $(function() {
        var oTable = $('#category-table').removeAttr('width').DataTable({
            autoWidth: false,
            paging: true, // show
            processing: true,
            searching: false,
            serverSide: true,
            responsive: true,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            ajax: {
                url: '{!! route('invioce.anyData') !!}',
                data: function(d) {
                    d.name = $('input[name=name]').val();
                    d.phone = $('input[name=phone]').val();
                    d.email = $('input[name=email]').val();
                    d.address = $('input[name=address]').val();
                    d.status = $('#status').val();
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'total_price',
                    name: 'total_price',
                    render: function(data, type, full, meta) {
                        let price = data.toLocaleString('vi', {
                            style: 'currency',
                            currency: 'VND'
                        });
                        return `${price}`;
                    }
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, full, meta) {
                        if (data == 1) {
                            return `<span class="badge badge-danger">Đang xử lí</span>`;
                        } else if (data == 2) {
                            return `<span class="badge badge-warning">Đang giao</span>`;
                        } else if (data == 3) {
                            return `<span class="badge badge-success">Thành công</span>`;
                        } else if (data == 4) {
                            return `<span class="badge badge-dark">Đã huỷ</span>`;
                        } else {
                            return ``;
                        }
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function(data, type, full, meta) {
                          // url edit
                          let url_deatil = '{!! route('invioce.detail',['id'=>'id_detail']) !!}' ;
                          url_deatil = url_deatil.replace('id_detail',data) ;
                        return `<a href="${url_deatil}" class="btn btn-warning"><i class="fas fa-share-square"></i></a>` ;
                    }
                }
            ]
        });

        $('#search-form').on('submit', function(e) {
            oTable.draw();
            e.preventDefault();
        });
    });
</script>
@include('sweetalert::alert')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
