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
@extends('admin.giaovien.layout')
@section('active')
@include('admin.giaovien.leftforteacher')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-th"></i>
            <p>Giáo viên<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('giaovien.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách giáo viên</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('giaovien.create')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm giáo viên</p>
                </a>
            </li>
        </ul>
    </li>

@endsection
@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tạo mới</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
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
            <form role="form" id="form" action="{{ route('giaovien.store') }}" enctype="multipart/form-data"
                  method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Tên giáo viên </label>
                        <input type="text" id="inputName" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Môn học</label>
                        <textarea name="mon" id="inputDescription" class="form-control" rows="4"></textarea>
    </div>
    <div class="col-md-12">
        <div class="col-md-8 float-md-left">

            <div class="form-group">
                <strong>Ảnh :</strong>
                <input type="file" id="inputFile" cept="image/*" onchange="preview_image(event) "
                       class="form-control box-image" name="image">
            </div>

        </div>
        <div class=" float-md-right col-md-3">
            <img id="output_image" alt="" class="img-circle" src="#" style="width: 300px; height: 300px"/>
        </div>
    </div>

@endsection
<!-- /.card -->
@section('button')
<div class="row">
    <div class="col-12">
    <a href="{{ route('giaovien.index')}}" class="btn btn-secondary">Cancel</a>
    <input type="submit" value="Create new Porject" class="btn btn-success float-right">
    </div>
</div>
</form>
        </div><!-- /.card-body -->
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
