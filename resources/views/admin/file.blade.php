@extends('master_layout.admin_master')
@section('title', 'File Mannager')
@section('main_admin')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="/filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
            </div>
        </div>
    </div>
@endsection
