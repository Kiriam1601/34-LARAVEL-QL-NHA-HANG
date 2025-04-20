<!-- Sidebar -->
<style>
    .nav-item {
        font-weight: 600 !important;
    }
</style>

{{-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> --}}
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: black;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <i class="fa fa-cog" aria-hidden="true"></i>

        </div>
        <div class="sidebar-brand-text mx-3">Manage<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active"> --}}
    <li class="nav-item ">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
            Interface
        </div> --}}


    @hasanyroles(['admin','nhanvien_pv','nhanvien_bep'])
    {{-- Danh mục & Sản phẩm --}}
    @hasrole('admin')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
                aria-expanded="true" aria-controls="collapseCategory">
                <i class="fa fa-list" aria-hidden="true"></i>
                <span>Danh mục & Món ăn</span>
            </a>
            <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('category.index') }}">Danh mục</a>
                    <a class="collapse-item" href="{{ route('product.index') }}">Món ăn</a>
                    <a class="collapse-item" href="{{ route('coupon.index') }}">Giảm giá</a>
                </div>
            </div>
        </li>
    @endhasrole

    {{-- Quản lý đơn hàng & bàn --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"
            aria-expanded="true" aria-controls="collapseOrders">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span>Đơn hàng & bàn</span>
        </a>
        <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/all-order') }}">Hóa đơn</a>
                @hasrole('admin')
                    <a class="collapse-item" href="{{ url('/all-reservation') }}">Lịch đặt bàn</a>
                    <a class="collapse-item" href="{{ route('table.index') }}">Bàn</a>
                @endhasrole
            </div>
        </div>
    </li>

    {{-- Quản lý nội dung --}}
    @hasrole('admin')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContent"
                aria-expanded="true" aria-controls="collapseContent">
                <i class="fa fa-file-text" aria-hidden="true"></i>
                <span>Quản lý nội dung</span>
            </a>
            <div id="collapseContent" class="collapse" aria-labelledby="headingContent" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('post.index') }}">Bài viết</a>
                    <a class="collapse-item" href="{{ url('/all-comment') }}">Bình luận</a>
                </div>
            </div>
        </li>
    @endhasrole

    {{-- Quản lý kho & nhà cung cấp --}}
    @hasrole('admin')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInventory"
                aria-expanded="true" aria-controls="collapseInventory">
                <i class="fa fa-archive" aria-hidden="true"></i>
                <span>Kho & nhà cung cấp</span>
            </a>
            <div id="collapseInventory" class="collapse" aria-labelledby="headingInventory" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('/all-receipt') }}">Phiếu nhập hàng</a>
                    <a class="collapse-item" href="{{ route('ingredient.index') }}">Nguyên liệu</a>
                    <a class="collapse-item" href="{{ route('supplier.index') }}">Nhà cung cấp</a>
                    <a class="collapse-item" href="{{ url('/all-input-receipt') }}">Kho</a>
                    <a class="collapse-item" href="{{ route('quantitative.index') }}">Khai báo định lượng</a>
                </div>
            </div>
        </li>
    @endhasrole
    @endhasanyroles




    @hasanyroles(['admin','nhanvien_pv','nhanvien_bep'])

    {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo14"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-database" aria-hidden="true"></i>
                    <span>Quản lý dữ liệu</span>
                </a>
                <div id="collapseTwo14" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @hasrole('admin')
                            <a class="collapse-item" href="{{ route('category.index') }}">Danh mục</a>
                            <a class="collapse-item" href="{{ route('product.index') }}">Món ăn</a>
                            <a class="collapse-item" href="{{ route('table.index') }}">Bàn</a>
                            
                        @endhasrole
                        <a class="collapse-item" href="{{ url('/all-order') }}">Hóa đơn</a>
                        @hasrole('admin')
                            <a class="collapse-item" href="{{ url('/all-comment') }}">Bình luận</a>
                            <a class="collapse-item" href="{{ route('coupon.index') }}">Giảm giá</a>
                            <a class="collapse-item" href="{{ route('post.index') }}">Bài viết</a>
                            <a class="collapse-item" href="{{ url('/all-reservation') }}">Lịch đặt bàn</a>
                            
                            <a class="collapse-item" href="{{ url('/all-receipt') }}">Phiếu nhập hàng</a>
                            <a class="collapse-item" href="{{ route('ingredient.index') }}">Nguyên liệu</a>
                            <a class="collapse-item" href="{{ route('supplier.index') }}">Nhà cung cấp</a>
                            <a class="collapse-item" href="{{ url('/all-input-receipt') }}">Kho</a>
                            <a class="collapse-item" href="{{ route('quantitative.index') }}">Khai báo định lượng</a>
                        @endhasrole

                    </div>
                </div>
            </li> --}}



    {{-- <a class="collapse-item" href="{{ url('/config-email') }}">Cấu hình email</a> --}}

    @hasrole('admin')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Tài khoản</span>
            </a>
            <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    @hasrole('admin')
                        <a class="collapse-item" href="{{ route('staff.index') }}">Nhân viên</a>
                        <a class="collapse-item" href="{{ route('customer.index') }}">Khách hàng</a>
                        <a class="collapse-item" href="{{ url('/all-shift') }}">Phiên làm việc</a>
                    @endhasrole
                </div>
            </div>
        </li>
    @endhasrole
    @endhasanyroles

    @hasrole('admin')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo16"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa fa-list" aria-hidden="true"></i>
                <span>Thống kê báo cáo</span>
            </a>
            <div id="collapseTwo16" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('/statictical') }}">Doanh thu</a>
                    <a class="collapse-item" href="{{ url('/statictical-data') }}">Số liệu</a>

                    {{-- <a class="collapse-item" href="{{ url('/chat') }}">Nhắn tin</a> --}}

                </div>
            </div>
        </li>
    @endhasrole

    @hasanyroles(['nhanvien_bep','nhanvien_pv','admin'])

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo15"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-comment" aria-hidden="true"></i>
            <span>Hoạt động</span>
        </a>
        <div id="collapseTwo15" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ url('/chat') }}">Nhắn tin</a>

            </div>
        </div>
    </li>


    @endhasanyroles


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
<!-- End of Sidebar -->
