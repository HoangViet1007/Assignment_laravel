@extends('master_layout.admin_master')
@section('title', 'Danh sách user')
@section('main_admin')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12">
                <!-- form  -->
                <form method="POST" id="search-form" class="form-inline d-flex justify-content-center align-items-center"
                    role="form" style="margin-bottom: 15px;">
                    @csrf
                    @method('PUT')
                    <div class="form-group mr-2 mb-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Họ tên..."
                            style="border-radius:0%;width:200px">
                    </div>
                    <div class="form-group mr-2 mb-2">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email..."
                            style="border-radius:0%;width:200px">
                    </div>
                    <div class="form-group mr-2 mb-2">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Địa chỉ..."
                            style="border-radius:0%;width:200px">
                    </div>
                    <div class="form-group mr-2 mb-2">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại..."
                            style="border-radius:0%;width:200px">
                    </div>
                    <div class="form-group mr-2 mb-2">
                        <select name="status" id="status" class="form-control" style="border-radius:0%;width:200px;">
                            <option value="">-- status--</option>
                            <option value="0">Disable</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    <div class="form-group mr-2 mb-2">
                        <select name="gender" id="gender" class="form-control" style="border-radius:0%;width:200px;">
                            <option value="">-- gender--</option>
                            <option value="0">Nữ</option>
                            <option value="1">Nam</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info ml-2">Search</button>
                    <a href="{{ route('user.index') }}" class="btn btn-danger ml-2">Cancel</a>
                </form>

                <!-- table -->
                <table style="width:100%;font-size:13px;"
                    class="table table-bordered table-content dataTable no-footer dtr-inline text-center" id="banner-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Hình ảnh</th>
                            <th>Email</th>
                            <th>SDT</th>
                            <th>Địa chỉ</th>
                            <th>Giới tính</th>
                            <th>Trạng thái</th>
                            <!-- <th>Created_at</th>
                                            <th>Updated_at</th> -->
                            <th width="100" class="text-center">
                                <a href="{{ route('user.create') }}" class="btn btn-danger"><i
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
            var oTable = $('#banner-table').removeAttr('width').DataTable({
                dom: 'Bfrtip',
                autoWidth: false,
                // scrollX: true,
                paging: true, // show
                searching: false,
                processing: true,
                serverSide: true,
                responsive: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                ajax: {
                    url: '{!! route("user.anyData") !!}',
                    data: function(d) {
                        d.name = $('input[name=name]').val();
                        d.email = $('input[name=email]').val();
                        d.address = $('input[name=address]').val();
                        d.phone = $('input[name=phone]').val();
                        d.status = $('#status').val();
                        d.gender = $('#gender').val();
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
                        data: 'image',
                        name: 'image',
                        render: function(data, type, full, meta) {
                            return `<img src="{{ url('') }}${data}" width="100px">`;
                        }
                    },

                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                    },
                    {
                        data: 'address',
                        name: 'address',
                    },
                    {
                        data: 'gender',
                        name: 'gender',
                        render: function(data, type, full, meta) {
                            if (data == 0) {
                                return `<span class="badge badge-warning">Nữ</span>`;
                            } else if (data == 1) {
                                return `<span class="badge badge-dark">Nam</span>`;
                            } else {
                                return ``;
                            }
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
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
                        data: 'id',
                        name: 'id',
                        render: (data, type, full, meta) => {
                            // url edit
                            let url_edit = '{!! route('user.edit',['user'=>'id_user']) !!}' ;
                            url_edit = url_edit.replace('id_user',data) ;
                            // url delete
                            let url_delete = '{!! route('user.destroy',['user'=>'id_user']) !!}' ;
                            url_delete = url_delete.replace('id_user',data) ;
                            console.log(url_delete) ;

                            return `
                                <div class="btn-group btn-group-sm">
                                    <a href="${url_edit}" class="btn btn-danger "><i class="fas fa-edit"></i></a>
                                    <a data-url="${url_delete}" data-id="${data}" data-token="{{ csrf_token() }}" class="btn btn-info action_delete"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            `
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
                            }else{
                                Swal.fire(
                                    'Xoa không thành công !',
                                    'Xoá dữ liệu không thành công .',
                                    'warning'
                                )
                            }
                        },
                        error: function(data) {
                            if (data.code == 500) {
                                that.parent().parent().parent().remove();
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
