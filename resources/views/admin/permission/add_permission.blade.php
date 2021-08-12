@extends('master_layout.admin_master')
@section('title','Thêm mới quyền')
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
                <form method="POST" action="{{route('permission.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Tên quyền</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Tên quyền..." class="form-control" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Key code</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="key code..." class="form-control" name="key_code" value="{{ old('key_code') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Mô tả</b><span class="text-danger ml-1">*</span></label>
                                    <input type="text" placeholder="Mô tả..." class="form-control" name="display_name" value="{{ old('display_name') }}">
                                    @if ($errors->has('display_name'))
                                        <span class="text-danger">{{ $errors->first('display_name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Quyền cha</b><span class="text-danger ml-1">*</span></label>
                                    <select name="parent_id" id="" class="form-control">
                                        <option value="0">-- Không chọn sẽ mặc định là cha --</option>
                                        @foreach($permission_parent as $a)
                                            <option value="{{$a->id}}" @if(old('parent_id') == $a->id) ? {{'selected'}} : {{''}} @endif>{{$a->name}}</option>
                                        @endforeach
                                    </select>
                                    {{-- @if ($errors->has('parent_id'))
                                        <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                    @endif --}}
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('permission.index')}}" class="btn btn-danger">Cancel</a>
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
