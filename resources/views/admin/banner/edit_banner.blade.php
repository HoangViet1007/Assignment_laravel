@extends('master_layout.admin_master')
@section('title','Chỉnh sửa slide')
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
                <form method="POST" action="{{route('banner.update', $model->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" id="id" name="id" value="{{$model->id}}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for=""><b>Tiêu đề</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Title..." class="form-control" id="title" value="{{$model->title}}" name="title" onkeyup="Slug();">
                                    @if($errors->has('title'))
                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Đường dẫn</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Slug..." class="form-control" id="slug" value="{{$model->slug}}" name="slug" readonly>
                                    @if($errors->has('slug'))
                                    <span class="text-danger">{{$errors->first('slug')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Nội dung</b><span class="text-danger ml-1">*</span></label>
                                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Content..." class="form-control">{{$model->content}}</textarea>
                                    @if($errors->has('content'))
                                    <span class="text-danger">{{$errors->first('content')}}</span>
                                    @endif
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Link</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Link..." name="link" id="link" value="{{$model->link}}" class="form-control">
                                    @if($errors->has('slug'))
                                    <span class="text-danger">{{$errors->first('slug')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Trạng thái</b><span class="text-danger ml-1">*</span></label>
                                    <div class="form-control">
                                        <input type="radio" name="status" value="0" @if($model->status == 0) ? checked : "" @endif > Disabled &ensp;&ensp;
                                        <input type="radio" name="status" value="1" @if($model->status == 1) ? checked : "" @endif > Active
                                    </div>
                                    @if($errors->has('status'))
                                    <span class="text-danger">{{$errors->first('status')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Hình ảnh</b><span class="text-danger ml-1">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                          </a>
                                        </span>
                                        <input id="thumbnail" type="text" name="image" class="form-control  @error('image') is-invalid @enderror" value="{{$model->image}}" readonly>
                                    </div>
                                    @if($errors->has('image'))
                                    <span class="text-danger">{{$errors->first('image')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b></b></label>
                                    @if($model->image != "")
                                        <img src="{{ env('APP_URL') }}{{$model->image}}" alt="" class="img-responsive" id="ig" width="200px" height="200px" style="margin-top:31px;margin-left:30px">
                                    @else
                                        <img src="{{asset('imageDefault.png')}}" alt="" class="img-responsive" id="ig" width="200px" height="200px" style="margin-top:31px;margin-left:30px">
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('banner.index')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div>

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content d-flex justify-content-center align-content-center" style="width: 1000px;height: 600px;margin-left: -135px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <h2>File Image Mannager</h2>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe src="{{url('file')}}/dialog.php?field_id=image" style="width: 100%;border: 2px solid #FAFAFA;height:100%;overflow-y: auto;"></iframe>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')

<script language="javascript">
    function Slug() {
        var title, slug;

        //Lấy text từ thẻ input title
        title = document.getElementById("title").value;

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
<!-- link css của content sumonot  -->
@endsection
@section('js')
{{-- link button filemanager và ckedittor  --}}
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
  </script>

<script>
 CKEDITOR.replace('content',options) ;
 $('#lfm').filemanager('file');
</script>
<script>
    $(document).ready(function() {
        var imageDefault = `{{asset('imageDefault.png')}}`;
        $('#thumbnail').on('change', function() {
            var link_image = $('input#thumbnail').val();
            if(link_image.length > 0){
                var image = "{{ env('APP_URL') }}" + link_image ;
                $('#ig').attr('src',image);
            }else{
                $('#ig').attr('src',imageDefault) ;
            }

        });
    });

</script>
@endsection
