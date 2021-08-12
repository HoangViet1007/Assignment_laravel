@extends('master_layout.admin_master')
@section('title','Chỉnh sửa chức vụ')
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
                <form method="POST" action="{{route('role.update',$role->id)}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT"/>
                    <input type="hidden" name="id" value="{{$role->id}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for=""><b>Tên chức vụ</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Name..." class="form-control" id="name" name="name" value="{{$role->name}}">
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Mô tả</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Mô tả..." class="form-control" id="display_name" name="display_name" value="{{$role->display_name}}">
                                    @if($errors->has('display_name'))
                                    <span class="text-danger">{{$errors->first('display_name')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Trạng thái</b><span class="text-danger ml-1">*</span></label>
                                    <div class="form-control">
                                        <input type="radio" name="status" value="0" @if ($role->status == 0) {{ 'checked' }} @endif> Disabled &ensp;&ensp;
                                        <input type="radio" name="status" value="1" @if ($role->status == 1) {{ 'checked' }} @endif> Active
                                    </div>
                                    @if($errors->has('status'))
                                    <span class="text-danger">{{$errors->first('status')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for=""><b>Quyền của chức vụ </b></label>
                                <label for=""><b>Quyền của chức vụ </b></label>
                                <div class="col-md-12">
                                    <div class="card-header row mb-2">
                                        <div class="col-md-12" style="margin-left:-7px">
                                            <input type="checkbox" class="checkall">  Chọn tất cả
                                        </div>
                                    </div>
                                </div>
                                @if($permissionParent)
                                @foreach($permissionParent as $a)
                                <div class="card border-primary mb-3 col-md-12">
                                    <div class="card-header bg-warning row">
                                        <div class="col-md-12" style="margin-left:-7px;"><input type="checkbox" value="{{$a->id}}" class="checkbox_wraper"> {{$a->name}}</div>
                                    </div>
                                    <div class="row">
                                        @foreach($a->permissionsChildrens as $b)
                                        <div class="card-body text-primary col-md-3">
                                            <h5 class="card-title">
                                                <input type="checkbox" {{ $permissionChecked->contains('id',$b->id) ? 'checked' : '' }} value="{{$b->id}}" name="permission_id[]" class="checkbox_childrent"> {{$b->name}}
                                            </h5>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('role.index')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div>
@include('sweetalert::alert')
@endsection
@section('js')
   <script>
       $('.checkbox_wraper').on('click', function(){
           $(this).parent().parent().parent().find('.checkbox_childrent').prop('checked',$(this).prop('checked')) ;
       })
       $('.checkall').on('click', function(){
           $(this).parents().find('.checkbox_childrent').prop('checked',$(this).prop('checked')) ;
           $(this).parents().find('.checkbox_wraper').prop('checked',$(this).prop('checked')) ;
       })
   </script>
@endsection
