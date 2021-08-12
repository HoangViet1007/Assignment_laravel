@extends('master_layout.admin_master')
@section('title', 'Thêm mới người dùng')
@section('main_admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('thongbao'))
                    <div class="alert alert-info" style="background-color: #D1ECF1;border: none;color: black;">
                        successfully ! {{ session('thongbao') }}
                    </div>
                @endif
                <div class="card card-primary">
                    <!-- form start -->
                    <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for=""><b>Họ và tên</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Họ và tên..."
                                            class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                            value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Số điện thoại</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Số điện thoại..."
                                            class="form-control @error('phone') is-invalid @enderror" id="phone"
                                            name="phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Địa chỉ</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Địa chỉ..."
                                            class="form-control @error('address') is-invalid @enderror" id="address"
                                            name="address" value="{{ old('address') }}">
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Email</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Email..."
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Mật khẩu</b><span class="text-danger ml-1">*</span></label>
                                        <input type="password" placeholder="Mật khẩu..."
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""><b>Trạng thái hoạt động</b><span
                                                class="text-danger ml-1">*</span></label>
                                        <div class="form-control @error('status') is-invalid @enderror">
                                            <input type="radio" name="status" value="0" @if (old('status') == '0') {{ 'checked' }} @endif> Disabled &ensp;&ensp;
                                            <input type="radio" name="status" value="1" @if (old('status') == '1') {{ 'checked' }} @endif> Active
                                        </div>
                                        @if ($errors->has('status'))
                                            <span class="text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Giới tính</b><span class="text-danger ml-1">*</span></label>
                                        <div class="form-control @error('gender') is-invalid @enderror">
                                            <input type="radio" name="gender" value="0" @if (old('gender') == '0') {{ 'checked' }} @endif> Nữ &ensp;&ensp;
                                            <input type="radio" name="gender" value="1" @if (old('gender') == '1') {{ 'checked' }} @endif> Nam
                                        </div>
                                        @if ($errors->has('gender'))
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Hình ảnh</b><span class="text-danger ml-1">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                            <input id="thumbnail" type="text" name="image"
                                                class="form-control  @error('image') is-invalid @enderror"
                                                value="{{ old('image') }}">
                                        </div>
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b></b></label>
                                        <img src="{{ asset('imageDefault.png') }}" alt="" class="img-responsive" id="ig"
                                            height="160px" style="margin-top:20px;margin-left:40px;">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><b>Chức vụ</b><span class="text-danger ml-1">*</span></label>
                                        <select name="roles[]" id="roles" multiple="multiple"
                                            class="form-control @error('roles') is-invalid @enderror select_role">
                                            <option value="">-- Chọn chức vụ --</option>
                                            @if($role)
                                            @foreach($role as $a)
                                            <option value="{{$a->id}}">{{$a->name}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        @if ($errors->has('roles'))
                                            <span class="text-danger">{{ $errors->first('roles') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                    </form>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
@section('css')
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
    <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>

    <script>
        $('#lfm').filemanager('file');

        $(document).ready(function() {
            $(".select_role").select2({
                placeholder: "Chức vụ",
                allowClear: true
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            var imageDefault = `{{ asset('imageDefault.png') }}`;
            $('#thumbnail').on('change', function() {
                var link_image = $('input#thumbnail').val();
                if (link_image.length > 0) {
                    var image = "{{ env('APP_URL') }}" + link_image;
                    $('#ig').attr('src', image);
                } else {
                    $('#ig').attr('src', imageDefault);
                }

            });
        });
    </script>
@endsection
