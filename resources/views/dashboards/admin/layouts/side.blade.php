   
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="{{ Route::is('admin.home') ? 'active' : ''}}">
                    <a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="{{ Route::is('admin.health_providers.index','admin.health_providers.create','admin.health_providers.show','admin.health_providers.edit') ? 'active' : ''}}">
                    <a href="{{route('admin.health_providers.index')}}"><i class="fa fa-user-md"></i> <span>Healthcare Providers</span></a>
                </li>
                <li class="{{ Route::is('admin.patients.index','admin.patients.create','admin.patients.edit') ? 'active' : ''}}">
                    <a href="{{route('admin.patients.index')}}"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                </li>
                <li class="{{ Route::is('admin.appointments.index','admin.appointments.create','admin.appointments.edit') ? 'active' : ''}}">
                    <a href="{{route('admin.appointments.index')}}"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                </li>
                <li class="{{ Route::is('admin.specialities.index','admin.specialities.create','admin.specialities.edit') ? 'active' : ''}}">
                    <a href="{{route('admin.specialities.index')}}"><i class="fa fa-hospital-o"></i> <span>Specialities</span></a>
                </li>
                <li class="{{ Route::is('admin.treatments.index','admin.treatments.create','admin.treatments.edit') ? 'active' : ''}}">
                    <a href="{{route('admin.treatments.index')}}"><i class="fa fa-calendar-check-o"></i> <span>Treatments</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="employees.html">Employees List</a></li>
                        <li><a href="leaves.html">Leaves</a></li>
                        <li><a href="holidays.html">Holidays</a></li>
                        <li><a href="attendance.html">Attendance</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/chatify') }}"><i class="fa fa-comments"></i> <span>Chat</span> 
                        <!-- <span class="badge badge-pill bg-primary float-right">5</span> -->
                    </a>
                </li>
                <!-- <li class="submenu">
                    <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog View</a></li>
                        <li><a href="add-blog.html">Add Blog</a></li>
                        <li><a href="edit-blog.html">Edit Blog</a></li>
                    </ul>
                </li> -->
                <li class="{{ Route::is('admin.settings') ? 'active' : ''}}">
                    <a href="{{ route('admin.settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>