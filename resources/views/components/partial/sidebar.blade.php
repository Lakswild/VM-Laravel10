<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ route('app.outstanding.request') }}" class="active"><i class="fa fa-solid fa-list"></i> Outstanding</a>
            </li>
            {{-- <li>
                <a href="{{ route('form.index') }}" class="active"><i class="fa fa-solid fa-list"></i> Form</a>
            </li>
                      <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Master<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('kategori.index') }}">Kategori</a>
                    </li>
                    <li>
                        <a href="{{ route('jenis.index') }}">Jenis</a>
                    </li>
                    <li>
                        <a href="{{ route('tipeinput.index') }}">Tipe Input</a>
                    </li>
                    <li>
                        <a href="{{ route('kategoritipeinput.index') }}">Kategori Tipe Input</a>
                    </li>
                    <li>
                        <a href="{{ route('status.index') }}">Status</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-solid fa-gear"></i> Setting<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('per.index') }}">Per</a>
                    </li>
                    <li>
                        <a href="{{ route('lokasi.index') }}">Lokasi</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-solid fa-users"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('user.index') }}">User</a>
                        <!-- Jenis Vendor / Perusahaan -->
                    </li>
                    <li>
                        <a href="{{ route('level.index') }}">Level</a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>
