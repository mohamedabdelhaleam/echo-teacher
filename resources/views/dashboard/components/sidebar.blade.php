<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li>
                    <a href="{{ route('dashboard.index') }}" class="">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard</span>
                        {{-- <span class="toggle-icon"></span> --}}
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.sections.index') }}" class="">
                        <span class="nav-icon fas fa-cart-plus"></span>
                        <span class="menu-text">الصفوف الدراسية</span>
                        <span class="toggle-icon"></span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
