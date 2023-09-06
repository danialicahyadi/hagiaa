<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mb-2 mt-2">
            <a href="{{ route('admin-dashboard') }}"><img src="{{ asset('uploads/dakota.png') }}" width="150"
                    alt=""></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin-dashboard') }}"><img src="{{ asset('uploads/dakota.png') }}" width="50"
                    alt=""></a>
        </div>

        <ul class="sidebar-menu mt-4">

            <li class=""><a class="nav-link" href="{{ route('admin-dashboard') }}"><i
                        class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Dropdown
                        Items</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i>
                            Item 1</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>
                            Item 2</a></li>
                </ul>
            </li> --}}
            {{-- <li class=""><a class="nav-link" href="{{ route('admin-setting') }}"><i
                        class="fas fa-hand-point-right"></i> <span>Setting</span></a></li> --}}

            <li class=""><a class="nav-link" href="{{ route('admin-resi') }}"><i
                        class="fas fa-hand-point-right"></i>
                    <span>Resi</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin-packing') }}"><i
                        class="fas fa-hand-point-right"></i>
                    <span>Packing</span></a></li>
            {{-- <li class=""><a class="nav-link" href="{{ route('admin-form') }}"><i
                        class="fas fa-hand-point-right"></i>
                    <span>Form</span></a></li> --}}

            {{-- <li class=""><a class="nav-link" href="{{ route('admin-table') }}"><i
                        class="fas fa-hand-point-right"></i>
                    <span>Table</span></a></li> --}}

            {{-- <li class=""><a class="nav-link" href="{{ route('admin-invoice') }}"><i
                        class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li> --}}

        </ul>
    </aside>
</div>
