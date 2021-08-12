@extends('master_layout.admin_master')
@section('title','Danh sách thuộc tính')
@section('main_admin')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-12">
            <div class="row d-flex justify-content-center align-items-center">
                <form method="POST" id="search-form" class="form-inline d-flex justify-content-center align-items-center" role="form" style="margin-bottom: 15px;">
                    @csrf
                    @method('PUT')
                    <div class="form-group mr-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name..." style="border-radius:0%;width:150px;">
                    </div>
                    <div class="form-group mr-2">
                        <input type="text" class="form-control" name="value" id="value" placeholder="Value..." style="border-radius:0%;">
                    </div>
                    <div class="form-group mr-1">
                        <select name="status" id="status" class="form-control" style="border-radius:0%;">
                            <option value="">-- status--</option>
                            <option value="0">Disable</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    <div class="form-group mr-2">
                        <select name="id_type" id="id_type" class="form-control" style="border-radius:0%;">
                            <option value="">-- Type Attribute --</option>
                            @foreach($model as $a)
                            <option value="{{$a->id}}">{{$a->name}}</option>
                           @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info ml-2">Search</button>
                    <a href="{{route('attribute.list')}}" class="btn btn-danger ml-2">Cancel</a>
                </form>
            </div>
            <!-- form  -->


            <!-- table -->
            <table style="width:100%;font-size:13px;" class="table table-bordered table-content dataTable no-footer dtr-inline text-center" id="websetting-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Giá trị</th>
                        <th>Kiểu thuộc tính</th>
                        <th>Trạng thái</th>
                        <th class="text-center">
                            <a href="{{route('attribute.create')}}" class="btn btn-danger"><i class="fas fa-plus"></i></a>  
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
        var oTable = $('#websetting-table').removeAttr('width').DataTable({
            dom: 'Bfrtip',
            autoWidth: false,
            paging: true, // show
            processing: true,
            serverSide: true,
            searching : false ,
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
                url: '{!! route("attribute.anyData") !!}',
                data: function(d) {
                    d.name = $('input[name=name]').val();
                    d.value = $('input[name=value]').val();
                    d.status = $('#status').val();
                    d.id_type = $('#id_type').val();
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
                    data: 'value',
                    name: 'value',
                    render: function(data) {
                        if (data.indexOf('#') != -1) {
                            return `<span style="background-color:${data};text-align: center;color:white;">${data}</span>`;
                        } else {
                            return `${data}`;
                        }
                    }
                },
                {
                    data: 'name_att',
                    name: 'name_att',
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
                        let url_edit = '{!! route('attribute.edit',['id'=>'id_attribute']) !!}' ;
                        url_edit = url_edit.replace('id_attribute',data) ;
                        // url delete
                        let url_delete = '{!! route('attribute.delete',['id'=>'id_attribute']) !!}' ;
                        url_delete = url_delete.replace('id_attribute',data) ;
                        return `
                                <div class="btn-group btn-group-sm">
                                    <a href="${url_edit}" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                                    <a data-url="${url_delete}" class="btn btn-info action_delete"><i class="fas fa-trash-alt"></i></a>
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
