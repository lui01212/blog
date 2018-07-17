<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    @include('admin.custumMasterAdmin.userInfo',['user' =>$user])
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ url('/home') }}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li class="{{ request()->is('admin/storymaster') ? 'active' : '' }}" >
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_list</i>
                    <span>Tables</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ request()->is('admin/storymaster') ? 'active' : '' }}">
                        <a href="{{ route('storymaster.index') }}">Thể Loại</a>
                    </li>
                    <!-- <li>
                        <a href="../pages/tables/jquery-datatable.html">Jquery Datatables</a>
                    </li>
                    <li>
                        <a href="../pages/tables/editable-table.html">Editable Tables</a>
                    </li> -->
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2018 <a href="javascript:void(0);">Admin - TruyenTienHiepFull</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>