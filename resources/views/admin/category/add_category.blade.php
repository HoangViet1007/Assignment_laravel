@extends('master_layout.admin_master')
@section('title','Thêm danh mục')
@section('main_admin')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('thongbao'))
            <div class="alert alert-info" style="background-color: #D1ECF1;border: none;color: black;">
                successfully ! {{session('thongbao')}}
            </div>
            @endif
            <div class="card card-primary">
                <!-- form start -->
                <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for=""><b>Tên</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Name..." class="form-control" id="name" name="name" onkeyup="Slug();">
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Đường dẫn</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Slug..." class="form-control" id="slug" name="slug" readonly>
                                    @if($errors->has('slug'))
                                    <span class="text-danger">{{$errors->first('slug')}}</span>
                                    @endif
                                </div>



                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Trạng thái</b><span class="text-danger ml-1">*</span></label>
                                    <div class="form-control">
                                        <input type="radio" name="status" value="0" @if (old('status') == "0") {{ 'checked' }} @endif> Disabled &ensp;&ensp;
                                        <input type="radio" name="status" value="1" @if (old('status') == "1") {{ 'checked' }} @endif> Active
                                    </div>
                                    @if($errors->has('status'))
                                    <span class="text-danger">{{$errors->first('status')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Danh mục cha</b><span class="text-danger ml-1">*</span></label>
                                    <select name="parent_id" name="parent_id" class="form-control select2_cate" id="parent_id">
                                    <option value="0">Danh mục cha</option>
                                     {!! $htmlOption !!}
                                    </select>
                                    @if($errors->has('parent_id'))
                                    <span class="text-danger">{{$errors->first('parent_id')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                 <p><span class="text-danger ml-1">(Lưu ý : Không chọn parent thì mặc định là danh mục cha)</span></p>
                                </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('category.index')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div>
@include('sweetalert::alert')

<script language="javascript">
    function Slug() {
        var title, slug;

        //Lấy text từ thẻ input title
        title = document.getElementById("name").value;

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;

    }
</script>

@endsection

@section('css')
    <!-- link css của seletc 2  -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-selection__choice {
            background-color: #ffc107 !important;
        }

        .select2-selection {
            height: 38px !important;
            border: 1px solid #ced4da !important;
        }

    </style>
@endsection
@section('js')
    {{-- link button filemanager và ckedittor --}}
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    {{-- link tag --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".select2_cate").select2({
                placeholder: "Category",
                allowClear: true
            })
        })
    </script>
@endsection

