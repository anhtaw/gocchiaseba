@extends('admin.blog.layout')
@section('active')
@include('admin.blog.leftforblog')


    <li class="nav-item has-treeview">
        <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-edit"></i>
            <p>Blog<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('blog.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách Blog</p>
                </a>
            </li>
            <li class="nav-item">
                <a  href="{{ route('blog.create')}}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Blog</p>
                </a>
            </li>
        </ul>
    </li>
@include('admin.blog.leftdown')
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <form role="form" id="form" action="{{ route('blog.update',$blog->id) }}" method="POST">
    <div class="card card-primary">
        {{-- <div  class="card-title "> --}}
        <div class="card-header">
            <h3 class="btn btn-primary" >Sửa Blog</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

            @csrf
            @method('PUT')
            <div class="card-body pad">
                <div class="form-group">
                    <label >Tên Blog</label>
                    <input type="text" class="form-control form-control-lg name " value="{{ $blog->name }}"  id ="name" name ="name"  placeholder="Nhập tên Blog" required>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label >Nội dung</label>--}}
{{--                    <input type="text" class="form-control form-control-lg"   name ="detail" v  placeholder="Nhập Nội dung" >--}}
{{--                </div>--}}
                <div class="form-group">
                    <label >Nội dung</label>
                    <textarea class="textarea" placeholder="Place some text here"   name ="detail" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
{{$blog->detail }}
                </textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </form>
    </div>
</div>
    </div>
@endsection


