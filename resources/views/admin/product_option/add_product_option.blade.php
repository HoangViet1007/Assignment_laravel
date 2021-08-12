@extends('master_layout.admin_master')
@section('title', 'Thêm mới option cho sản phẩm')
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
                    <form method="POST" action="{{ route('product_option.store2',$product_id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for=""><b>Tên option</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Option name..." name="option_name" id="option_name"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('option_name') }}">
                                        @if ($errors->has('option_name'))
                                            <span class="text-danger">{{ $errors->first('option_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Giá trị option</b><span class="text-danger ml-1">*</span></label>
                                        <input type="color" placeholder="Option value..." name="option_value"
                                            id="option_value"
                                            class="form-control @error('option_value') is-invalid @enderror"
                                            value="{{ old('option_value') }}">
                                        @if ($errors->has('option_value'))
                                            <span class="text-danger">{{ $errors->first('option_value') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Giá</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Price..." name="price" id="price"
                                            class="form-control @error('price') is-invalid @enderror"
                                            value="{{ old('price') }}">
                                        @if ($errors->has('price'))
                                            <span class="text-danger">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Giảm giá (%)</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Sale..." name="sale" id="sale"
                                            class="form-control @error('sale') is-invalid @enderror"
                                            value="{{ old('sale') }}">
                                        @if ($errors->has('sale'))
                                            <span class="text-danger">{{ $errors->first('sale') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Số lượng</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Amount..." name="amount" id="amount"
                                            class="form-control @error('amount') is-invalid @enderror"
                                            value="{{ old('amount') }}">
                                        @if ($errors->has('amount'))
                                            <span class="text-danger">{{ $errors->first('amount') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""><b>Trạng thái mặc định</b><span
                                                class="text-danger ml-1">*</span></label>
                                        <select name="is_main" id="is_main" class="form-control">
                                            <option value="">-- Trạng thai --</option>
                                            <option value="0" @if (old('is_main') == '0') {{ 'selected' }} @endif>False</option>
                                            <option value="1" @if (old('is_main') == '1') {{ 'selected' }} @endif>True</option>
                                        </select>
                                        @if ($errors->has('is_main'))
                                            <span class="text-danger">{{ $errors->first('is_main') }}</span>
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
                                            width="90%" height="90%" style="margin-top:33px;margin-left:20px;">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ route('product_option.index_id',$product_id) }}" class="btn btn-danger">Cancel</a>
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

        fieldset.scheduler-border {
            border: 1px solid #ced4da !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow: 0px 0px 0px 0px #000;
            box-shadow: 0px 0px 0px 0px #000;
            border-radius: 4px;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
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
            $(".tag_sp").select2({
                tags: true,
                tokenSeparators: [','],
                placeholder: "Tag...",
                allowClear: true
            })
            $(".select2_cate").select2({
                placeholder: "Category",
                allowClear: true
            })
        })
    </script>

    {{-- config ckeditor --}}
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>

    <script>
        CKEDITOR.replace('description', options);
        CKEDITOR.replace('short_description', options);
        $('#lfm').filemanager('file');
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
