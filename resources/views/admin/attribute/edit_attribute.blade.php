@extends('master_layout.admin_master')
@section('title', 'Chỉnh sửa thuộc tính')
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
                    <form method="POST" action="{{ route('attribute.update', ['id' => $attribute->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $attribute->id }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for=""><b>Tên</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Name..." class="form-control" id="name" name="name"
                                            onkeyup="Slug();" value="{{ $attribute->name }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Đường dẫn</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Slug..." value="{{ $attribute->slug }}"
                                            class="form-control" id="slug" name="slug" readonly>
                                        @if ($errors->has('slug'))
                                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <p><span class="text-danger ml-1">(Lưu ý : Chọn Type Attribute để thêm giá trị
                                                attribute)</span></p>
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""><b>Kiểu thuộc tính</b><span class="text-danger ml-1">*</span></label>
                                        <select name="id_type" id="id_type" class="form-control">
                                            <option value="">Type Attribute</option>
                                            @foreach ($type_attribute as $a)
                                                <option value="{{ $a->id }}" @if ($a->id == $attribute->id_type) ? selected : "" @endif>
                                                    {{ $a->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('id_type'))
                                            <span class="text-danger">{{ $errors->first('id_type') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Giá trị</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Value..." name="value" id="value"
                                            value="{{ $attribute->value }}" class="form-control">
                                        @if ($errors->has('value'))
                                            <span class="text-danger">{{ $errors->first('value') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Trạng thái</b><span class="text-danger ml-1">*</span></label>
                                        <div class="form-control">
                                            <input type="radio" name="status" value="0" @if($attribute->status == 0) ? checked : "" @endif > Disabled &ensp;&ensp;
                                            <input type="radio" name="status" value="1" @if($attribute->status == 1) ? checked : "" @endif > Active
                                        </div>

                                        @if ($errors->has('status'))
                                            <span class="text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('attribute.list') }}" class="btn btn-danger">Cancel</a>
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
@section('js')
    <script>
        $('#id_type').change(function(event) {
            // lấy giá trị type
            $type = $('#id_type').val();
            if ($type == "") {
                $('#value').attr('readonly', true);
            } else if ($type == "1") {
                $('#value').attr('readonly', false);
                $('#value').attr('type', 'color');

            } else if ($type == "2") {
                $('#value').attr('readonly', false);
                $('#value').attr('type', 'text');
                $('#value').val("");
            } else {
                $('#value').attr('readonly', false);
                $('#value').attr('type', 'text');
                $('#value').val("");
            }
        })
    </script>
@endsection
