@extends('admin.giaovien.layout')
@section('active')
@include('admin.giaovien.leftforteacher')



<style>
    .ui-widget *, .ui-widget input, .ui-widget select, .ui-widget button {
            font-family: 'Helvetica Neue Light', 'Open Sans', Helvetica;
            font-size: 14px;
            font-weight: 300 !important;
        }

        .details-form-field input,
        .details-form-field select {
            width: 250px;
            float: right;
        }

        .details-form-field {
            margin: 30px 0;
        }

        .details-form-field:first-child {
            margin-top: 10px;
        }

        .details-form-field:last-child {
            margin-bottom: 10px;
        }

        .details-form-field button {
            display: block;
            width: 100px;
            margin: 0 auto;
        }

        input.error, select.error {
            border: 1px solid #ff9999;
            background: #ffeeee;
        }

        label.error {
            float: right;
            margin-left: 100px;
            font-size: .8em;
            color: #ff6666;
        }
    </style>

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-th"></i>
            <p>giáo viên<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('giaovien.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách giáo viên</p>
                </a>
            </li>
            <li class="nav-item">
                <a  href="{{ route('giaovien.create')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm giáo viên</p>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('giaovien.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sửa tài khoản</p>
                </a>
            </li> --}}
        </ul>
    </li>
@endsection
@section('content')
    <div class="card card-primary">
        {{-- <div  class="card-title "> --}}
        <div class="card-header">
            <h3 class="btn btn-primary" >Sửa giáo viên</h3>
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
        <form role="form" id="form" action="{{ route('giaovien.update',$giaovien->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label >Tên giáo viên</label>
                    <input type="text" class="form-control form-control-lg name " value="{{ $giaovien->name }}"  id ="name" name ="name"  placeholder="Nhập tên tài khoản" required>
                </div>
                <div class="form-group">
                    <label >Loại giáo viên</label>
                    <input type="text" class="form-control form-control-lg"   name ="mon" value="{{$giaovien->mon }}"    required>
                </div>
                
                <div class="form-group">
                    <label >ẢNH</label>
                    <input type="text" class="form-control form-control-lg"   name ="image" value="{{$giaovien->image }}"    >
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </form>
    </div>
    </div>

@endsection


