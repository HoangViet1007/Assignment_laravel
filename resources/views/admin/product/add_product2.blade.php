@extends('master_layout.admin_master')
@section('title', 'Thêm mới sản phẩm(con)')
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
                    <form method="POST" action="{{ route('product.store2',$model->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for=""><b>Tên</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Name..."
                                            class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                            onkeyup="Slug();" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Đường dẫn</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Slug..."
                                            class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug"
                                            value="{{ old('slug') }}">
                                        @if ($errors->has('slug'))
                                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                                        @endif
                                    </div>

                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Thuộc tính</legend>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for=""><b>Kiểu thuộc tính</b><span
                                                        class="text-danger ml-1">*</span></label>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10">
                                                    <select name="type_attribute" id="type_attribute" class="form-control">
                                                        <option value="">-- Kiểu --</option>
                                                        @foreach ($type_attribute as $a)
                                                            <option value="{{ $a->id }}">{{ $a->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <button class="btn btn-warning btn_select" type="button"
                                                        name="chon">Chọn</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label for=""><b>Giá trị thuộc tính</b><span
                                                        class="text-danger ml-1">*</span></label>
                                            </div>
                                            <div class="row show_value" style="display:none;">
                                                <div class="col-md-12 ">
                                                    <div class="form-control value"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @if ($errors->has('attribute'))
                                        <span class="text-danger">{{ $errors->first('attribute') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""><b>Trạng thái đặc biệt</b><span
                                                class="text-danger ml-1">*</span></label>
                                        <div class="form-control @error('highlight') is-invalid @enderror">
                                            <input type="radio" name="highlight" value="0" @if (old('highlight') == '0') {{ 'checked' }} @endif> High &ensp;&ensp;
                                            <input type="radio" name="highlight" value="1" @if (old('highlight') == '1') {{ 'checked' }} @endif> Show
                                        </div>
                                        @if ($errors->has('highlight'))
                                            <span class="text-danger">{{ $errors->first('highlight') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Trạng thái</b><span class="text-danger ml-1">*</span></label>
                                        <div class="form-control @error('status') is-invalid @enderror">
                                            <input type="radio" name="status" value="0" @if (old('status') == '0') {{ 'checked' }} @endif> Disabled &ensp;&ensp;
                                            <input type="radio" name="status" value="1" @if (old('status') == '1') {{ 'checked' }} @endif> Active
                                        </div>
                                        @if ($errors->has('status'))
                                            <span class="text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Danh mục sản phẩm</b><span
                                                class="text-danger ml-1">*</span></label>
                                        <select name="category_id" id="category_id"
                                            class="form-control @error('category_id') is-invalid @enderror select2_cate">
                                            <option value=""> -- Category_id -- </option>
                                            {!! $htmlOption !!}
                                        </select>
                                        @if ($errors->has('category_id'))
                                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                        @endif
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for=""><b>Image</b><span class="text-danger ml-1">*</span></label>
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
                                            width="100%" height="200px" style="margin-top:13px">
                                    </div> --}}
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><b>Tags</b><span class="text-danger ml-1">*</span></label>
                                        <select class="form-control tag_sp @error('category_id') is-invalid @enderror"
                                            multiple="multiple" name="tags[]"></select>
                                        @if ($errors->has('tags'))
                                            <span class="text-danger">{{ $errors->first('tags') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Tiêu đề</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Title..."
                                            class="form-control @error('title') is-invalid @enderror" id="title"
                                            name="title" value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Mô tả</b><span class="text-danger ml-1">*</span></label>
                                        <textarea name="short_description" id="short_description" cols="30" rows="10"
                                            placeholder="Short Description..."
                                            class="form-control">{{ old('short_description') }}</textarea>
                                        @if ($errors->has('short_description'))
                                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for=""><b>Nôi dung</b><span class="text-danger ml-1">*</span></label>
                                        <textarea name="description" id="description" cols="30" rows="10"
                                            placeholder="Content..."
                                            class="form-control">{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="card card-header bg-warning col-md-12" style="height:50px;">
                                    <p>Thêm option mặc định cho sản phẩm</p>
                                </div>
                            </div>

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
                                </div>

                                <div class="col-md-4">
                                    {{-- <div class="form-group">
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
                                    </div> --}}

                                    <div class="form-group">
                                        <label for=""><b>Số lượng</b><span class="text-danger ml-1">*</span></label>
                                        <input type="text" placeholder="Amount..." name="amount" id="amount"
                                            class="form-control @error('amount') is-invalid @enderror"
                                            value="{{ old('amount') }}">
                                        @if ($errors->has('amount'))
                                            <span class="text-danger">{{ $errors->first('amount') }}</span>
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
                            <a href="{{ route('product.index') }}" class="btn btn-danger">Cancel</a>
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
    <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>

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

    <script>
        // lấy za các value atttribute
        $(document).ready(function() {
            $('.btn_select').on('click', function() {
                var type_attribute = $('#type_attribute').val();
                if (type_attribute == "") {
                    $('.show_value').html('');
                } else {
                    $.ajax({
                        type: 'GET',
                        url: `http://127.0.0.1:8000/admin/product/getAttribute/${type_attribute}`,
                        success: function(data) {
                            if (data.code == 200) {
                                $('.show_value').show();
                                var attribute = data.data.map(x =>
                                    `<input type="radio" name="attribute" value="${x.id}" class="">&ensp;${x.name}<span class="mr-2"></span>`
                                )
                                return $('.value').html(attribute);
                            }
                        },
                        error: function(data) {

                        }
                    });
                }
            })
        });
    </script>
@endsection
