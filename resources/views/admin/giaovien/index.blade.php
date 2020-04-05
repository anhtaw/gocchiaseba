
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
@include('admin.giaovien.leftforteacher')

<li class="nav-item has-treeview">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-th"></i>
        <p>Giáo Viên<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('giaovien.index')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách Giáo viên</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('giaovien.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm giáo viên</p>
            </a>
        </li>
    </ul>
</li>

@endsection
@section('content')
<div class="card">
    <div class="card-header" >
        <a href="{{route('giaovien.create')}}"><h3 class="card-title btn btn-block btn-success alignRight" >Tạo Mới</h3></a>
    </div>
    <div class="card-header"><h3 class="card-title">Danh Sách giáo viên</h3>
    </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên giáo viên</th>
                    <th>Môn</th>
                    <th>Ảnh</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            @foreach ($teacher as $teachers)
            <tbody>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $teachers ->name }}</td>
                    <td style="width:50%;">{{ $teachers ->mon }}</td>

                    {{-- @foreach($teacher->teacherimage as $image) --}}
                    <td> <img src="{{asset('img/'.$teachers->image)}}"  style="width: 50px; height: auto"  /> </td>
{{-- @endforeach --}}

                    <td>
                        <form action="{{ route('giaovien.destroy',$teachers->id) }}" method="POST">
                            {{-- <a class="btn btn-info" href="{{ route('giaovien.show',$teacher->id) }}"></a> --}}
                            <a class="btnindex  glyphicon glyphicon-edit" id="hover"  href="{{ route('giaovien.edit',$teachers->id) }}"><span>Sửa</span></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btnindex fa fa-trash"id="hover"><span>Xóa</span> </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
            </table>
            {!! $teacher->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection

