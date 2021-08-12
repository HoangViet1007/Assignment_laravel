@extends('master_layout.admin_master')
@section('title','Chỉnh sửa hoá đơn')
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
                <form method="POST" action="{{route('invioce.update',$data->id)}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for=""><b>Tên</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Name..." class="form-control" id="name" name="name" value="{{$data->name}}">
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Email</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Email" class="form-control" id="email" name="email"  value="{{ $data->email }}">
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Địa chỉ</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Địa chỉ" class="form-control" id="address" name="address"  value="{{ $data->address }}">
                                    @if($errors->has('address'))
                                    <span class="text-danger">{{$errors->first('address')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Số điện thoại</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Số điện thoạ" class="form-control" id="phone" name="phone"  value="{{ $data->phone }}">
                                    @if($errors->has('phone'))
                                    <span class="text-danger">{{$errors->first('phone')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Trạng thái</b><span class="text-danger ml-1">*</span></label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="">-- status--</option>
                                        <option value="1" @if($data->status == 1) {{'selected'}} @endif>Đang xử lí</option>
                                        <option value="2" @if($data->status == 2) {{'selected'}} @endif>Đang giao</option>
                                        <option value="3" @if($data->status == 3) {{'selected'}} @endif>Thành công</option>
                                        <option value="4" @if($data->status == 4) {{'selected'}} @endif>Đã huỷ</option>
                                    </select>
                                    @if($errors->has('status'))
                                    <span class="text-danger">{{$errors->first('status')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('category_post.index')}}" class="btn btn-danger">Cancel</a>
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
