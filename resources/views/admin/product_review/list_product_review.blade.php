@extends('master_layout.admin_master')
@section('title', 'Danh sách đánh giá')
@section('main_admin')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12">
                <div class="row d-flex justify-content-center align-items-center">
                    <form method="POST" id="search-form" class="form-inline d-flex justify-content-center align-items-center" role="form" style="margin-bottom: 15px;">
                        @csrf
                        @method('PUT')
                        <div class="form-group mr-2">
                            <input type="text" class="form-control" name="name_product" id="name_product" placeholder="Tên sản phẩm..." style="border-radius:0%;width:300px;">
                        </div>

                        <button type="submit" class="btn btn-info ml-2">Search</button>
                        <a href="{{route('product_review.index')}}" class="btn btn-danger ml-2">Cancel</a>
                    </form>
                </div>
                <!-- table -->
                <table style="width:100%;font-size:13px;"
                    class="table table-bordered table-content dataTable no-footer dtr-inline text-center" id="banner-table">
                    <thead>
                        <tr>
                            <th>ID sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Tổng số đánh giá</th>
                            <th>Bình luận mới nhất</th>
                            <th>Bình luận cũ nhất</th>
                            <th width="100" class="text-center">
                                Hành động
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
                    url: '{!! route("product_review.anyData") !!}',
                    data: function(d) {
                    d.name_product = $('input[name=name_product]').val();

                }
                },
                columns: [

                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'sdg',
                        name: 'sdg'
                    },
                    {
                        data: 'max',
                        name: 'max'
                    },
                    {
                        data: 'min',
                        name: 'min'
                    },
                    {
                        data: 'id',
                        name: 'id',
                        render: function(data, type, full, meta) {
                            let url = '{!! route('product_review.list_product_review',['id'=>'id_product']) !!}' ;
                            url = url.replace('id_product',data) ;
                            return `<a href="${url}" class="btn btn-warning text-white"><i class="fas fa-share-square"></i></a>` ;
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
