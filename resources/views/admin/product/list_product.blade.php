@extends('master_layout.admin_master')
@section('title', 'Danh sách sản phẩm')
@section('main_admin')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12">
                <!-- form  -->
                <form method="POST" id="search-form" class="form-inline d-flex justify-content-center align-items-center" role="form" style="margin-bottom: 15px;">
                @csrf
                @method('PUT')
                <div class="form-group mr-2">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Tên sản phẩm..." style="border-radius:0%;width:200px">
                </div>
                <div class="form-group mr-2">
                    <input type="text" class="form-control" name="price_to" id="price_to" placeholder="Giá từ..." style="border-radius:0%;width:200px">
                </div>
                <div class="form-group mr-2">
                    <input type="text" class="form-control" name="price_from" id="price_from" placeholder="Giá đến..." style="border-radius:0%;width:200px">
                </div>
                <div class="form-group mr-2">
                    <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Người thêm..." style="border-radius:0%;width:200px">
                </div>
                <div class="form-group mr-2 mt-3">
                    <select name="category_id" id="category_id" class="form-control" style="border-radius:0%;width:200px;">
                        <option value=""> -- Danh mục --</option>
                        {!! $htmlOption !!}
                    </select>
                </div>
                <div class="form-group mr-2">
                    <select name="status" id="status" class="form-control mt-3" style="border-radius:0%;width:200px;">
                        <option value="">-- Status--</option>
                        <option value="0">Disable</option>
                        <option value="1">Active</option>
                    </select>
                </div>

                <div class="form-group mr-2">
                    <select name="highlight" id="highlight" class="form-control mt-3" style="border-radius:0%;width:200px;">
                        <option value="">-- Highlight --</option>
                        <option value="0">high</option>
                        <option value="1">show</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-info ml-2 mt-3">Search</button>
                <a href="{{route('product.index')}}" class="btn btn-danger ml-2 mt-3">Cancel</a>
            </form>

                <!-- table -->
                <table style="width:100%;font-size:13px;"
                    class="table table-bordered table-content dataTable no-footer dtr-inline text-center" id="post-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th width="50">Hình ảnh</th>
                            <th>Giá</th>
                            {{-- <th>Bản</th> --}}
                            <th>Giảm</th>
                            <th>SL</th>
                            {{-- <th width="150">Tiêu đề</th>
                        <th width="300">Mô tả</th> --}}
                            <th>Đặc biệt</th>
                            <th>Trạng thái</th>
                            <th>Danh mục</th>
                            <th>Người thêm</th>
                            <th>Action</th>
                            <th width="40" class="text-center">
                                <a href="{{ route('product.create') }}" class="btn btn-danger"><i
                                        class="fas fa-plus"></i></a>  
                            </th>
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
            var oTable = $('#post-table').removeAttr('width').DataTable({
                dom: 'Bfrtip',
                autoWidth: false,
                // scrollX: true,
                paging: true, // show
                searching: false,
                processing: true,
                serverSide: true,
                responsive: true,
                responsive: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                ajax: {
                    url: '{!! route("product.anyData") !!}',
                    data: function(d) {
                        d.name = $('input[name=name]').val();
                        d.price_to = $('input[name=price_to]').val();
                        d.price_from = $('input[name=price_from]').val();
                        d.user_name = $('input[name=user_name]').val();
                        d.status = $('#status').val();
                        d.highlight = $('#highlight').val();
                        d.category_id = $('#category_id').val();
                    }
                },
                columns: [{
                        data: 'id_product',
                        name: 'id_product'
                    },
                    {
                        data: 'name_product',
                        name: 'name_product',
                        // render: function(data, type, full, meta) {
                        //     return `<a href="" style="text-decoration:none;">${data}</a>` ;
                        // }
                    },
                    {
                        data: 'image',
                        name: 'image',
                        render: function(data, type, full, meta) {
                            return `<img src="{{ url('') }}${data}" width="70px">`;
                        }
                    },
                    {
                        data: 'price',
                        name: 'price',
                        render: function(data, type, full, meta) {
                            x = data.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                            return `${x}` ;
                        }
                    },
                    // {
                    //     data: 'attributes_name',
                    //     name: 'attributes_name',
                    // },
                    {
                        data: 'sale',
                        name: 'sale',
                        render: function(data, type, full, meta) {
                            return `${data} %`
                        }
                    },
                    {
                        data: 'amount',
                        name: 'amount',
                    },
                    {
                        data: 'highlight',
                        name: 'highlight',
                        render: function(data, type, full, meta) {
                            if (data == 0) {
                                return `<span class="badge badge-success">high</span>`;
                            } else if (data == 1) {
                                return `<span class="badge badge-danger">show</span>`;
                            } else {
                                return ``;
                            }
                        }
                    },
                    {
                        data: 'status_product',
                        name: 'status_product',
                        render: function(data, type, full, meta) {
                            if (data == 0) {
                                return `<span class="badge badge-success">Disable</span>`;
                            } else if (data == 1) {
                                return `<span class="badge badge-danger">Active</span>`;
                            } else {
                                return ``;
                            }
                        }
                    },
                    {
                        data: 'name_categories',
                        name: 'name_categories',
                    },
                    {
                        data: 'name_users',
                        name: 'name_users',
                    },
                    {
                        data: 'id_product',
                        name: 'id_product',
                        render: (data, type, full, meta) => {
                            return `
                            <div class="btn-group btn-group-sm">
                                <a href="./product_option/${data}" class="btn btn-warning"><i class="fas fa-cog"></i></a>
                                <a href="./product/create2/${data}" class="btn btn-dark"><i class="fas fa-plus-square"></i></i></a>
                            </div>
                            `;
                        }
                    },
                    {
                        data: 'id_product',
                        name: 'id_product',
                        render: (data, type, full, meta) => {
                             // url edit
                            let url_edit = '{!! route('product.edit',['product'=>'id_product']) !!}' ;
                            url_edit = url_edit.replace('id_product',data) ;
                            // url delete
                            let url_delete = '{!! route('product.destroy',['product'=>'id_product']) !!}' ;
                            url_delete = url_delete.replace('id_product',data) ;
                            return `
                            <div class="btn-group btn-group-sm">
                                <a href="${url_edit}" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                                <a data-url="${url_delete}" data-id="${data}" data-token="{{ csrf_token() }}" class="btn btn-info action_delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                            `
                        }
                    },
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
                                that.parent().parent().parent().remove();
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
                                that.parent().parent().remove();
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
