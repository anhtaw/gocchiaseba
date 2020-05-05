
    <title>Trang Quản Trị</title>
    <meta name="_token" content="{{csrf_token()}}" />
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    <style>
        .btnindex {
            background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 12px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Darker background on mouse-over */
        .btn:hover {
            background-color: RoyalBlue;
        }
        button#hover {
            background-color: RoyalBlue;
        }
        #hover span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        #hover span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        #hover:hover span {
            padding-right: 25px;
        }

        #hover:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
    <style>
        div#nz-div {
            border-bottom: 2px solid red;
            margin-bottom: 40px;
            display: block;
        }

        #nz-div h3.tde {
            margin: 0;
            font-size: 16px;
            line-height: 20px;
            display: inline-block;
            text-transform: uppercase;
        }

        #nz-div h3.tde :after {
            content: "";
            width: 0;
            height: 0;
            border-top: 40px solid transparent;
            border-left: 20px solid #EA3A3C;
            border-bottom: 0px solid transparent;
            border-right: 0 solid transparent;
            position: absolute;
            top: 0px;
            right: -20px;
        }

        #nz-div h3.tde span {
            background: #EA3A3C;
            padding: 10px 20px 8px 20px;
            color: white;
            position: relative;
            display: inline-block;
            margin: 0;
        }

        .sub-cat {
            display: inline-block;
            margin: 0;
            line-height: 45px;
            margin-left: 100px;
            float: right;
        }

        /* 2  ========================= */

        #nz-div-2 h3.tde :after {
            content: "";
            width: 0;
            height: 0;
            border-top: 19px solid transparent;
            border-left: 15px solid #EA3A3C;
            border-bottom: 19px solid transparent;
            border-right: 0 solid transparent;
            position: absolute;
            top: 0px;
            right: -15px;
        }

        #nz-div-2 h3.tde span {
            background: #EA3A3C;
            padding: 10px 20px 8px 20px;
            color: white;
            position: relative;
            display: inline-block;
            margin: 0;
        }

        #nz-div-2 h3.tde {
            margin: 15px 0;
            font-size: 16px;
            line-height: 20px;
            text-transform: uppercase;
        }

        #nz-div-2 hr {
            margin: -34px 0px 54px 0px;
            border: 1px solid red;
        }

        /* 3  ========================= */

        #nz-div-3 h3.tde span {
            background: #EA3A3C;
            padding: 10px 20px 8px 20px;
            color: white;
            position: relative;
            display: inline-block;
            margin: 0;
            border-radius: 23px 23px 0px 0px;
        }

        #nz-div-3 h3.tde {
            margin: 15px 0;
            border-bottom: 2px solid #ea3a3c;
            font-size: 16px;
            line-height: 20px;
            text-transform: uppercase;
        }

        /* 4  ========================= */

        #nz-div-4 h3.tde :after {
            content: "";
            width: 0;
            height: 0;
            border-top: 40px solid transparent;
            border-left: 20px solid #EA3A3C;
            border-bottom: 0px solid transparent;
            border-right: 0 solid transparent;
            position: absolute;
            top: 0px;
            right: -20px;
        }


        #nz-div-4 h3.tde :before {
            content: "";
            width: 0;
            height: 0;
            border-width: 40px 20px 0px 0px;
            border-style: solid;
            border-color: transparent;
            border-right-color: #EA3A3C;
            position: absolute;
            top: 0px;
            left: -20px;
        }

        #nz-div-4 h3.tde span {
            background: #EA3A3C;
            padding: 10px 20px 8px 20px;
            color: white;
            position: relative;
            display: inline-block;
            margin: 0;

        }

        #nz-div-4 h3.tde {
            text-align: center;
            margin: 45px 0;
            border-bottom: 2px solid #ea3a3c;
            font-size: 16px;
            line-height: 20px;
            text-transform: uppercase;
        }

        /*6  ========================= */

        #nz-div-6 {
            text-align: center;
        }

        #nz-div-6 h3.tde {
            display: inline-block;
            background: #ea3a3c;
            color: white;
            height: 50px;
            line-height: 50px;
            padding: 0 30px;
            width: auto;
        }
        #box {
            /*border: 2px solid red;*/
            position: absolute;
            width: 80px;
            height: 160px;
            left: 50%;
            top: 106%;
            transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
        }

        /*5 ========================= */


        #nz-div-5 h3.tde {    text-align: center;    margin: 45px 0;    font-size: 16px;    line-height: 20px;    text-transform: uppercase;}
        #nz-div-5 h3.tde span {    background: #8CC63F;    height: 50px;    line-height: 50px;    padding: 0px 20px;    color: white;    position: relative;    display: inline-block;    margin: 0;    z-index: 45;    border-radius: 10px 10px 0px 0px;    border: 1px solid #8bb54b;}
        #nz-div-5 h3.tde :before,#nz-div-5 h3.tde :after {    content: "";    background: url(http://web.ncnncn.com/wp-content/uploads/2017/06/bgh-nz1-l.png);    width: 87px;    height: 50px;    position: absolute;    top: 19px;    z-index: -1;}
        #nz-div-5 h3.tde :before {    left: -44px;    }
        #nz-div-5 h3.tde :after {    transform: rotateY(180deg);    right: -44px !important;}

        /*7========================= */
        .nz-div-7 {    position: relative;    margin: 50px 0; text-align: center;}
        .nz-div-7 .box-title-name {    font-size: 24px;    font-weight: 900;    text-transform: uppercase;    color: #333;    display: inline-block;    vertical-align: top;    position: relative;    z-index: 1;    padding-bottom: 28px;}
        .nz-div-7 .box-title-name:before {    content: "";    position: absolute;    border-top: 10px solid #00aa46;    border-left: 15px solid transparent;    border-bottom: 7px solid transparent;    border-right: 15px solid transparent;  left: calc(50% - 40px);
            bottom: -7px;
            width: 50px;}
        .nz-div-7 .box-title-name:after {    content: "";    position: absolute;    z-index: 2;    bottom: 0;    height: 9px;    width: 200px;    left: calc(50% - 100px);    border-top: 2px solid #00aa46;}

    </style>
    @extends('admin.layout')
@section('active')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-th"></i>
            <p>Sản Phẩm<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('products.index')}}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách sản phẩm</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('products.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm sản phẩm</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('products_category.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm loại sản phẩm</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('upload.create')}}" class="nav-link active red">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm ảnh phụ sản phẩm</p>
                </a>
            </li>
        </ul>
    </li>
    @include('admin.products.leftforproduct')
    @include('admin.products.leftforprodbyblog')
@endsection
@section('content')
    <div class="card card-primary">
        {{-- <div  class="card-title "> --}}
{{--        <div class="card-header">--}}
{{--            <h3 class="btn btn-primary" >Thêm Ảnh</h3>--}}
{{--        </div>--}}
        <div id='nz-div-4'>
            <h3 class="tde">
                <span>Thêm ảnh phụ cho sản phẩm</span>
            </h3>
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
<div class="container">
    <div></br></div>
    <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
        @csrf
<div>
    <label for="">Nhập id sản phẩm</label>
    <input type="text" name="id"> </div>
{{--        <button  style="max-height:200%;max-width:100px;height: 40px" type="submit" class=" btn btn-danger"></button>--}}

    </form>
    </div>
    <div class=”container”>

                <div id='box' style="max-height:200%;max-width:100px;height: 40px "  >
                    <a href="{{ route('products.index')}}" class=" tde btn btn-secondary" >Cancel</a>
                </div>


    </div>

        <style>
            .dropzone {
                border: 2px dashed #0087F7;
                border-radius: 5px;
                background: white;
            }
        </style>
        @endsection

    <script type="text/javascript">
        Dropzone.options.dropzone =
            {
                maxFilesize: 12,
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time+file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 50000,
                removedfile: function(file)
                {
                    var name = file.upload.filename;
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                        type: 'POST',
                        url: '{{ url("image/delete") }}',
                        data: {filename: name},
                        success: function (data){
                            console.log("File has been successfully removed!!");
                        },
                        error: function(e) {
                            console.log(e);
                        }});
                    var fileRef;
                    return (fileRef = file.previewElement) != null ?
                        fileRef.parentNode.removeChild(file.previewElement) : void 0;
                },

                success: function(file, response)
                {
                    console.log(response);
                },
                error: function(file, response)
                {
                    return false;
                }
            };
    </script>
