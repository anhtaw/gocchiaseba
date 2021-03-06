<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Sản phẩm<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('products.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.create')}}"class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm sản phẩm</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products_category.index')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm loại sản phẩm</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('upload.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm ảnh phụ sản phẩm</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-icon nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-fw fa-user"></i>
        <p>Tài khoán<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('user.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách tài khoản</p>
            </a>
        </li>
        @if(Auth::user()-> level==1)
        <li class="nav-item">
            <a href="{{ route('user.create')}}"class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm tài khoản</p>
            </a>
        </li>
@endif
        {{-- <li class="nav-item">
            <a href="../../index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sửa tài khoản</p>
            </a>
        </li> --}}
    </ul>
</li>
