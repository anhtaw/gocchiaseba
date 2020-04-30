
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
            <a href="{{ route('products_category.index')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm loại sản phẩm</p>
            </a>
        </li>

    </ul>
</li>
@include('admin.products.leftforproduct')
@include('admin.products.leftforprodbyblog')
@endsection
@section('content')
    <div class="card">
        <div class="card-header " >
            <a href="{{route('products_category.create')}}"> <h3 class="card-title btn btn-block btn-success alignRight" >Tạo Mới</h3></a>
        </div>
        <div class="card-header">
            <h3 class="card-title">Danh Sách Sản Phẩm</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width:5%;">ID</th>
                    <th style="width:15%;">Tên loại sản phẩm</th>

                </tr>
            </thead>
            @foreach ($products_category as $product_category)
            <tbody>
                <tr>
                    <td>{{$product_category ->id }}</td>
                    <td>{{$product_category ->name_category }}</td>
                    <td>
                        <form action="{{ route('products_category.destroy',$product_category->id) }}" method="POST">
                            {{-- <a class="btn btn-info" href="{{ route('products.show',$products->id) }}"></a> --}}
                            <a class="btnindex  glyphicon glyphicon-edit" id="hover"  href="{{ route('products_category.edit',$product_category->id) }}"><span>Sửa</span></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btnindex fa fa-trash"id="hover"><span>Xóa</span> </button>
                        </form>
                    </td>

                </tr>
              </tbody>
              @endforeach
            </table>

           {!! $products_category->links() !!}
        </div>
        <script>
            var products_category =dd($products_category);
        $(document).ready(function() {
            $('#example').DataTable( {
                data: products_category,
                columns: [
                    { title: "ID" },
                    { title: "Tên sản phẩm" },


                ]
            } );
        } );
</script>
        <!-- /.card-body -->
    </div>

@endsection


