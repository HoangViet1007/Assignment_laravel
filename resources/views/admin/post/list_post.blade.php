@extends('master_layout.admin_master')
@section('title','Danh sách bài viết')
@section('main_admin')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-12">
            <!-- form  -->
            <form method="POST" id="search-form" class="form-inline d-flex justify-content-center align-items-center" role="form" style="margin-bottom: 15px;">
                @csrf
                @method('PUT')
                <div class="form-group mr-2">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title..." style="border-radius:0%;width:200px">
                </div>
                <div class="form-group mr-2">
                    <select name="category_posts_id" id="category_posts_id" class="form-control" style="border-radius:0%;">
                        <option value=""> -- Category Post --</option>
                        @foreach ($cate_post as $a)
                            <option value="{{$a->id}}">{{$a->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mr-2">
                    <select name="status" id="status" class="form-control" style="border-radius:0%;width:150px;">
                        <option value="">-- Status--</option>
                        <option value="0">Disable</option>
                        <option value="1">Active</option>
                    </select>
                </div>

                <div class="form-group mr-2">
                    <select name="highlight" id="highlight" class="form-control" style="border-radius:0%;width:150px;">
                        <option value="">-- Highlight --</option>
                        <option value="0">high</option>
                        <option value="1">show</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-info ml-2">Search</button>
                <a href="{{route('post.index')}}" class="btn btn-danger ml-2">Cancel</a>
            </form>

            <!-- table -->
            <table style="width:100%;font-size:13px;" class="table table-bordered table-content dataTable no-footer dtr-inline" id="post-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th width="150">Tiêu đề</th>
                        <th width="120">Hình ảnh</th>
                        <th width="300">Mô tả</th>
                        <th>Đặc biệt</th>
                        <th>Trạng thái</th>
                        <th>Danh mục</th>
                        <!-- <th>Created_at</th>
                        <th>Updated_at</th> -->
                        <th width="135" class="text-center">
                            <a href="{{route('post.create')}}" class="btn btn-danger"><i class="fas fa-plus"></i></a>  
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
            searching : false ,
            processing: true,
            serverSide: true,
            responsive: true,
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
                url: '{!! route("post.anyData") !!}',
                data: function(d) {
                    d.title = $('input[name=title]').val();
                    d.status = $('#status').val();
                    d.highlight = $('#highlight').val();
                    d.category_posts_id = $('#category_posts_id').val();
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return `<img src="{{ url('')}}${data}" width="125px">`;
                    }
                },
                {
                    data: 'short_description',
                    name: 'short_description',
                    render : function(data, type, full, meta){
                        var parser = new DOMParser();
                        var doc = parser.parseFromString(data, 'text/html');
                        return doc.body.innerText;
                    }
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
                    data: 'name_category_posts',
                    name: 'name_category_posts' ,
                },
                {
                    data: 'id',
                    name: 'id',
                    render: (data, type, full, meta) => {
                        // url edit
                        let url_edit = '{!! route('post.edit',['post'=>'id_post']) !!}' ;
                        url_edit = url_edit.replace('id_post',data) ;
                        // url delete
                        let url_delete = '{!! route('post.destroy',['post'=>'id_post']) !!}' ;
                        url_delete = url_delete.replace('id_post',data) ;
                        return `
                            <div class="btn-group btn-group-sm">
                                <a href="${url_edit}" class="btn btn-danger"><i class="fas fa-edit"></i></a>
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
    input[type=search]{
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
