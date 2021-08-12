@extends('master_layout.admin_master')
@section('title', 'Danh sách đánh giá')
@section('main_admin')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12">
                <!-- table -->
                <table style="width:100%;font-size:13px;"
                    class="table table-bordered table-content dataTable no-footer dtr-inline text-center" id="banner-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Người</th>
                            <th width="80">Số sao</th>
                            <th>Email</th>
                            <th>Nội dung</th>
                            <th>TT</th>
                            <th>Sản phẩm</th>
                            <th class="text-center">
                                Hành động
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($review_product as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->name }}</td>
                                <td>
                                    @if ($a->rating == 5)
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                    @elseif($a->rating ==4)
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="far fa-star text-muted"></small>
                                    @elseif($a->rating ==3)
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="far fa-star text-muted"></small>
                                        <small class="far fa-star text-muted"></small>
                                    @elseif($a->rating ==2)
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="far fa-star text-muted"></small>
                                        <small class="far fa-star text-muted"></small>
                                        <small class="far fa-star text-muted"></small>
                                    @elseif($a->rating ==1)
                                        <small class="fas fa-star text-warning"></small>
                                        <small class="far fa-star text-muted"></small>
                                        <small class="far fa-star text-muted"></small>
                                        <small class="far fa-star text-muted"></small>
                                        <small class="far fa-star text-muted"></small>
                                    @else
                                    @endif
                                </td>
                                <td>{{ $a->email }}</td>
                                <td>{{ $a->description }}</td>
                                <td>
                                    @if ($a->status == 0)
                                        <label class="switch">
                                            <input type="checkbox" class="status" data-id="{{ $a->id }}"
                                                data-active="disable" data-url="{{ route('product_review.edit', $a->id) }}">
                                            <span class="slider round"></span>
                                        </label>
                                    @elseif($a->status == 1)
                                        <label class="switch">
                                            <input type="checkbox" checked class="status" data-id="{{ $a->id }}"
                                                data-active="active" data-url="{{ route('product_review.edit', $a->id) }}">
                                            <span class="slider round"></span>
                                        </label>
                                    @else
                                    @endif
                                </td>
                                <td>{{ $a->name_pro }}</td>

                                <td>
                                    <a data-url="{{route('product_review.destroy', $a->id) }}" data-id="{{$a->id}}" data-token="{{ csrf_token() }}"
                                        class="btn btn-info action_delete"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="{{ route('product_review.index') }}" class="btn btn-warning text-white"><i
                        class="fas fa-backward"></i> &ensp; Quay lại trang</a>
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
            var id = $(this).data("id");
            let token = $(this).data("token");
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
                        method: "DELETE",
                        url: requestUrl,
                        data: {
                            "_token": token,
                        },
                        success: function(data) {
                            if (data.code == 200) {
                                that.parent().parent().remove();
                                Swal.fire(
                                    'Thành công !',
                                    'Xoá dữ liệu thành công .',
                                    'success'
                                )
                            } else {
                                Swal.fire(
                                    'Xoa không thành công !',
                                    'Xoá dữ liệu không thành công .',
                                    'warning'
                                )
                            }
                        },
                        error: function(data) {
                            if (data.code == 500) {
                                Swal.fire(
                                    'Xoa không thành công !',
                                    'Xoá dữ liệu không thành công .',
                                    'warning'
                                )
                            }
                        }
                    });
                }
            })
        }

        $(function() {
            $(document).on('click', '.action_delete', actionDelete);
        })

        $(document).ready(function() {
            var status = $('.status');
            // url edit
            let url_edit = '{!! route('product_review.edit', ['product_review' => 'id_pro']) !!}';
            status.on('click', function(e) {
                let url_edit = '{!! route('product_review.edit', ['product_review' => 'id_pro']) !!}';
                var data_status = $(this).data("active");
                var id_review = $(this).data("id");

                url_edit = url_edit.replace('id_pro', id_review) ;
                $.ajax({
                    type: 'GET',
                    url: url_edit,
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
            })
        });
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

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #ffc107;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #ffc107;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

    </style>
@endsection
