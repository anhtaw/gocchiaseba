@extends('admin.layout')
@section('active')
@include('admin.user.leftforuser')
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
            <i class="nav-icon fa fa-fw fa-user"></i>
            <p>Tài khoản<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('user.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách tài khoản</p>
                </a>
            </li>
            <li class="nav-item">
                <a  href="{{ route('user.create')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm tài khoản</p>
                </a>
            </li>

        </ul>
    </li>
    @include('admin.user.leftforuserbyblog')
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới tài khoản</h3>
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
        <form role="form" id="form" action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label >Tên tài khoản</label>
                    <input type="text" class="form-control form-control-lg name "  id ="name" name ="name"  placeholder="Nhập tên tài khoản" required>
                </div>

                <div class="form-group">
                    <label >Mật khẩu</label>
                    <input type="password" class="form-control form-control-lg ,$password = Hash::make('secret');"   name ="password"  placeholder="Nhập mật khẩu" required>
                </div>
                <div class="form-group">
                    <label >Nhập lại mật khẩu</label>
                    <input type="password" class="form-control form-control-lg ,$password = Hash::make('secret');"   name ="password"  placeholder="Nhập mật khẩu" required>
                    if (Hash::needsRehash($hashed))
                    {
                        $hashed = Hash::make('secret');
                    }
                </div>

                <div class="form-group">
                    <label >Email</label>
                    <input type="text" class="form-control form-control-lg"   name ="email"  placeholder="Nhập email" required>
                </div>
                <div class="form-group">
                    <label >Level</label>
                    <input type="text" class="form-control form-control-lg"   name ="level"  placeholder="Nhập level" >
                </div>
                <div class="form-group">
                    <label >Active</label>
                    <input type="text" class="form-control form-control-lg"   name ="active"   placeholder="Nhập active" >
                </div>
                <div class="form-group">
                    <strong>Ảnh :</strong>
                    <input type="file"  id="inputFile" cept="image/*" onchange="preview_image(event) "   class="form-control box-image" name="image">
                </div>
            </div>
            </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-danger">Sửa</button>
            <span class="focus-input100"></span>
            <div class=" float-md-right col-md-3">
                <img id="output_image" alt="" class="img-circle" src=""
                     style="width: 300px; height: 300px"/>
            </div>
        </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Gửi đi</button>
            </div>
        </form>
    </div>

@endsection

<script type='text/javascript'>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

