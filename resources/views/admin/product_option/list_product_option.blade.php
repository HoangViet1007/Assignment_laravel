@extends('master_layout.admin_master')
@section('title', 'Danh sách các option của sản phẩm')
@section('main_admin')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12">
                <!-- table -->
                <table style="width:100%;font-size:13px;"
                    class="table table-bordered table-content dataTable no-footer dtr-inline text-center" id="product_option-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên Option</th>
                            <th width="50">Giá trị</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Giảm</th>
                            <th>Số lượng</th>
                            <th>Trạng thái</th>
                            <th>Tên sản phẩm</th>
                            <th width="40" class="text-center">
                                <a href="{{route('product_option.create2',$id)}}" class="btn btn-danger"><i
                                        class="fas fa-plus"></i></a>  
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $a)
                            <tr>
                                <td>{{$a->id_product_option}}</td>
                                <td>{{$a->option_name}}</td>
                                <td>
                                    <span style="background-color:{{$a->option_value}};padding:3px;color:white;" >{{$a->option_value}}</span>
                                </td>
                                <td>
                                    <img src="{{ url('') }}{{$a->image_product_option}}" width="70px">
                                </td>
                                <td>{{number_format($a->price)}}</td>
                                <td>{{$a->sale}}%</td>
                                <td>{{$a->amount}}</td>
                                <td>
                                    @if($a->is_main ==1)
                                    <span class="badge badge-success">True</span>
                                    @elseif($a->is_main ==0)
                                    <span class="badge badge-danger">False</span>
                                    @else
                                    <span>Null</span>
                                    @endif
                                </td>
                                <td>{{$a->name_product}}</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{route('product_option.edit',$a->id_product_option)}}" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                                        <a data-url="./delete/{{$a->id_product_option}}" data-id="${data}" data-token="{{ csrf_token() }}" class="btn btn-info action_delete"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <a href="{{route('product.index')}}" class="btn btn-warning"><i class="fas fa-backward"></i> &ensp; Quay lại trang danh sách sản phẩm</a>
            </div>
        </div>
    </div>

@endsection
@section('js')
    @include('sweetalert::alert')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
          // ----------- code xoa bang ajax -------------
          function actionDelete(event) {
            event.preventDefault();
            let requestUrl = $(this).data('url');
            let that = $(this); // laays za cais the a dang xoa
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xoá ?',
                text: "Xoá dữ liệu sẽ không lấy lại được !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, đồng ý!',
                cancelButtonText: 'Huỷ'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'GET',
                        url: requestUrl,
                        success: function(data) {
                            if (data.code == 200) {
                                that.parent().parent().parent().remove();
                                Swal.fire(
                                    'Thành công !',
                                    'Xoá dữ liệu thành công .',
                                    'success'
                                )
                            }
                        },
                        error: function(data) {

                        }
                    });

                }
            })
        }

        $(function() {
            $(document).on('click', '.action_delete', actionDelete);
        })
    </script>
@endsection

@section('css')
    <style>
        label {
            display: flex;
            margin-bottom: .5rem;
            float: left;
            padding: 0px 10px;
        }

        input[type=search] {
            border: 1px solid #ccc;
        }

        .custom-select-sm {
            margin: 0px 10px
        }

        table.dataTable tbody th,
        table.dataTable tbody td:last-child {
            text-align: center;
        }

        .page-item.active .page-link {
            background-color: lightgrey !important;
            border: 1px solid black;
        }

        .page-link {
            color: black !important;
        }

    </style>
@endsection
