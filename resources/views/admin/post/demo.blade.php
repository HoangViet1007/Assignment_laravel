<!-- dependencies (Summernote depends on Bootstrap & jQuery) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>


<div class="input-group">
    <span class="input-group-btn">
      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Choose
      </a>
    </span>
    <input id="thumbnail" class="form-control" type="text" name="filepath">
</div>

<textarea name="content" id="content" cols="30" rows="10" placeholder="content"></textarea> <br>
<textarea name="content2" id="content2" cols="30" rows="10" placeholder="content2"></textarea>

<img id="holder" style="margin-top:15px;max-height:100px;">


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
 CKEDITOR.replace('content2') ;
 $('#lfm').filemanager('file');
</script>


