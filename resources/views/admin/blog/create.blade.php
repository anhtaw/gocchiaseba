@extends('admin.blog.layout')
@section('active')
@include('admin.blog.leftforblog')
{{--<style>--}}
{{--    .ui-widget *, .ui-widget input, .ui-widget select, .ui-widget button {--}}
{{--            font-family: 'Helvetica Neue Light', 'Open Sans', Helvetica;--}}
{{--            font-size: 14px;--}}
{{--            font-weight: 300 !important;--}}
{{--        }--}}

{{--        .details-form-field input,--}}
{{--        .details-form-field select {--}}
{{--            width: 250px;--}}
{{--            float: right;--}}
{{--        }--}}

{{--        .details-form-field {--}}
{{--            margin: 30px 0;--}}
{{--        }--}}

{{--        .details-form-field:first-child {--}}
{{--            margin-top: 10px;--}}
{{--        }--}}

{{--        .details-form-field:last-child {--}}
{{--            margin-bottom: 10px;--}}
{{--        }--}}

{{--        .details-form-field button {--}}
{{--            display: block;--}}
{{--            width: 100px;--}}
{{--            margin: 0 auto;--}}
{{--        }--}}

{{--        input.error, select.error {--}}
{{--            border: 1px solid #ff9999;--}}
{{--            background: #ffeeee;--}}
{{--        }--}}

{{--        label.error {--}}
{{--            float: right;--}}
{{--            margin-left: 100px;--}}
{{--            font-size: .8em;--}}
{{--            color: #ff6666;--}}
{{--        }--}}
{{--    </style>--}}

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
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
                <a  href="{{ route('blog.create')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Blog</p>
                </a>
            </li>
        </ul>
    </li>
    @include('admin.blog.leftdown')
@endsection
@section('content')

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

            <div class="col-md-12">
                <div class="card card-outline card-info">
                <form role="form" id="form" action="{{ route('blog.store') }}" method="POST">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới blog</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>

            @csrf
            <div class="card-body pad">
                <div class="form-group">
                    <label >Tên Blog</label>
                    <input type="text" class="form-control form-control-lg name "  id ="name" name ="name"  placeholder="Nhập tên Blog" required>
                </div>
{{--                <div class="form-group">--}}
{{--                   --}}
{{--                    <input type="text" class="form-control form-control-lg"   name ="detail"  placeholder="Nhập Nội dung" >--}}
{{--                </div>--}}
                <div class="form-group">
                    <label >Nội dung</label>
                <textarea class="textarea" placeholder="Place some text here"  name ="detail" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                </textarea>
                    </div>

            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Gửi đi</button>
            </div>

        <!-- /.card-body -->
    </div>
    </form>
            </div>
            </div>

@endsection


