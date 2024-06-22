<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-home back-icon"></i> <span>Back to Home</span></a>
                </li>
                <li class="menu-title">Settings</li>
                <li class="{{ Route::is('admin.settings') ? 'active' : ''}}">
                    <a href="{{ route('admin.settings') }}"><i class="fa fa-building"></i> <span>Company Settings</span></a>
                </li>
                <li >
                <li class="{{ Route::is('admin.services') ? 'active' : ''}}">
                    <a href="{{ route('admin.services') }}"><i class="fa fa-clock-o"></i> <span>Services</span></a>
                </li>
                <li>
                    <a href="theme-settings.html"><i class="fa fa-picture-o"></i> <span>Theme Settings</span></a>
                </li>
                <li>
                    <a href="roles-permissions.html"><i class="fa fa-key"></i> <span>Roles & Permissions</span></a>
                </li>
                <li>
                    <a href="email-settings.html"><i class="fa fa-envelope-o"></i> <span>Email Settings</span></a>
                </li>
                <!-- <li>
                    <a href="invoice-settings.html"><i class="fa fa-pencil-square-o"></i> <span>Invoice Settings</span></a>
                </li> -->
                <!-- <li>
                    <a href="notifications-settings.html"><i class="fa fa-globe"></i> <span>Notifications</span></a>
                </li> -->
            </ul>
        </div>
    </div>
</div>