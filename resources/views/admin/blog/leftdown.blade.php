<li class="nav-item has-treeview">
    <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-th"></i>
        <p>Giáo Viên<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('giaovien.index')}}" class="nav-link ">
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
