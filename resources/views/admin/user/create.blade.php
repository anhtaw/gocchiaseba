@extends('admin.layout')
@section('active')
@include('admin.user.leftforuser')
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
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới tài khoản</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form role="form" id="form" action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label >Tên tài khoản</label>
                    <input type="text" class="form-control form-control-lg name "  id ="name" name ="name"  placeholder="Nhập tên tài khoản" required onkeyup='check();'>
                </div>
                <div class="form-group">
                    <label >Mật khẩu</label>
                    <input type="password" class="form-control form-control-lg "  id="password"  name ="password"  placeholder="Nhập mật khẩu" required onkeyup='check();'>
                </div>
                <div class="form-group">
                    <label >Nhập lại mật khẩu</label>
                    <input type="password" class="form-control form-control-lg "   id="confirm_password" name ="confirm_password"  placeholder="Nhập mật lại khẩu" required>
                    <span id='message'></span>
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="text" class="form-control form-control-lg"   name ="email"  placeholder="Nhập email" required>
                </div>
                <div class="form-group">
                    <label >Level</label>
                    <select name="loaisp" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                        <option value="0" >Checker</option>
                        <option value="1" >Admin</option>
                </select>
                </div>
                <div class="form-group">
                    <label >role</label>
                    <select name="role" class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option value="0" >User</option>
                        <option value="1" >Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >Active</label>
                    <input type="text" class="form-control form-control-lg"   name ="active"   placeholder="Nhập active" >
                </div>
                <div class="form-group">
                    <strong>Ảnh :</strong>
                    <input type="file"  id="inputFile" cept="image/*" onchange="preview_image(event) "   class="form-control box-image" name="image">
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-danger" value="registration"  id="submit" disabled>Thêm</button>
            <span class="focus-input100"></span>
            <div class=" float-md-right col-md-3">
                <img id="output_image" alt="" class="img-circle" src=""
                     style="width: 300px; height: 300px"/>
            </div>
        </div>
{{--            <div class="card-footer">--}}
{{--                <button type="submit" class="btn btn-primary">--}}
{{--                    Gửi đi</button></div>--}}
{{--            </div>--}}
        </form>
    </div>
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
<script>
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
            document.getElementById('submit').disabled = false;
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
            document.getElementById('submit').disabled = true;
        }
    }
</script>
