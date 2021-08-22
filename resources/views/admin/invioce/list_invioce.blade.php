@extends('master_layout.admin_master')
@section('title','Danh sách đơn hàng')
@section('main_admin')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-12">
            <div class="row d-flex justify-content-center align-items-center">
                <form method="POST" id="search-form" class="form-inline d-flex justify-content-center align-items-center" role="form" style="margin-bottom: 15px;">
                    @csrf
                    @method('PUT')
                    <div class="form-group mr-2 mt-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Tên..." style="border-radius:0%;width:250px;">
                    </div>
                    <div class="form-group mr-2 mt-2">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại..." style="border-radius:0%;width:250px;">
                    </div>
                    <div class="form-group mr-2 mt-2">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email.." style="border-radius:0%;width:250px;">
                    </div>
                    <div class="form-group mr-2 mt-2">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address.." style="border-radius:0%;width:250px;">
                    </div>
                    <div class="form-group mr-1 mt-2">
                        <select name="status" id="status" class="form-control" style="border-radius:0%;width:250px;">
                            <option value="">-- status--</option>
                            <option value="1">Đăng xử lí</option>
                            <option value="2">Đang giao</option>
                            <option value="3">Thành công</option>
                            <option value="4">Đã huỷ</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info ml-2 mt-2">Search</button>
                    <a href="{{route('invioce.index')}}" class="btn btn-danger ml-2 mt-2">Cancel</a>
                </form>
            </div>
            <!-- form  -->


            <!-- table -->
            <table style="width:100%;font-size:13px;" class="table table-bordered table-content dataTable no-footer dtr-inline text-center" id="category-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>SDT</th>
                        <th>Địa chỉ</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        {{-- <th>Parent</th> --}}
                        <th class="text-center">
                            Chức năng
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
        var oTable = $('#category-table').removeAttr('width').DataTable({
            dom: 'Bfrtip',
            autoWidth: false,
            paging: true, // show
            processing: true,
            searching : false ,
            serverSide: true,
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
                url: '{!! route("invioce.anyData") !!}',
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
                    render : function(data, type, full, meta) {
                        let price = data.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                        return `${price}` ;
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
                        }else if (data == 3) {
                            return `<span class="badge badge-success">Thành công</span>`;
                        }else if (data == 4) {
                            return `<span class="badge badge-dark">Đã huỷ</span>`;
                        }
                        else {
                            return ``;
                        }
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: (data, type, full, meta) => {
                        //detail
                        let url_deatil = '{!! route('invioce.detail',['id'=>'id_detail']) !!}' ;
                        url_deatil = url_deatil.replace('id_detail',data) ;
                        // url edit
                        let url_edit = '{!! route('invioce.edit',['invioce'=>'id_invioce']) !!}' ;
                        url_edit = url_edit.replace('id_invioce',data) ;
                        // url delete
                        let url_delete = '{!! route('invioce.destroy',['invioce'=>'id_invioce']) !!}' ;
                        url_delete = url_delete.replace('id_invioce',data) ;
                        return `
                                <div class="btn-group btn-group-sm">
                                    <a href="${url_edit}" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                                    <a data-url="${url_delete}" data-id="${data}" data-token="{{ csrf_token() }}" class="btn btn-info action_delete"><i class="fas fa-trash-alt"></i></a>
                                    <a href="${url_deatil}" class="btn btn-warning"><i class="fas fa-share-square"></i></a>
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
