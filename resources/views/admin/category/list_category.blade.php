@extends('master_layout.admin_master')
@section('title','Danh mục sản phẩm')
@section('main_admin')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-12">
            <div class="row d-flex justify-content-center align-items-center">
                <form method="POST" id="search-form" class="form-inline d-flex justify-content-center align-items-center" role="form" style="margin-bottom: 15px;">
                    @csrf
                    @method('PUT')
                    <div class="form-group mr-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name..." style="border-radius:0%;width:250px;">
                    </div>
                    <div class="form-group mr-1">
                        <select name="status" id="status" class="form-control" style="border-radius:0%;width:250px;">
                            <option value="">-- status--</option>
                            <option value="0">Disable</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info ml-2">Search</button>
                    <a href="{{route('category.index')}}" class="btn btn-danger ml-2">Cancel</a>
                </form>
            </div>
            <!-- form  -->


            <!-- table -->
            <table style="width:100%;font-size:13px;" class="table table-bordered table-content dataTable no-footer dtr-inline text-center" id="category-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên danh mục</th>
                        <th>Trạng thái</th>
                        {{-- <th>Parent</th> --}}
                        <th class="text-center" style="width:140px;">
                            <a href="{{route('category.create')}}" class="btn btn-danger"><i class="fas fa-plus"></i></a>  
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
                url: '{!! route("category.anyData") !!}',
                data: function(d) {
                    d.name = $('input[name=name]').val();
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
                // {
                //   data: 'parent_id',
                //   name: 'parent_id',
                // },
                {
                    data: 'id',
                    name: 'id',
                    render: (data, type, full, meta) => {
                        // url edit
                        let url_edit = '{!! route('category.edit',['category'=>'id_category']) !!}' ;
                        url_edit = url_edit.replace('id_category',data) ;
                        // url delete
                        let url_delete = '{!! route('category.destroy',['category'=>'id_category']) !!}' ;
                        url_delete = url_delete.replace('id_category',data) ;

                        return `
                        <div class="btn-group btn-group-sm">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="${url_edit}" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                                </div>
                                <div class="col-md-6">
                                    <form action="${url_delete}" method="POST" enctype="multipart/form-data" style="float:right; margin-right:20px;">
                                    @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-info" onclick="return confirm('Bạn có chắc chắn muốn xóa dữ liệu này không ?')">
                                        <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
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
