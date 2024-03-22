<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image">
                @if( auth()->user()->avatar != null )
                    <img src="{{asset('storage/avatars/'.auth()->user()->avatar)}}" alt="">
                @else
                    <img src="{{asset('default/users/img/default-avatar.png')}}" alt="">
                @endif 
            </div>
            <div class="admin-action-info"> <span>Welcome</span>
                @php
                    $firstName = Str::before(auth()->user()->name, ' ');
                @endphp
                <h3>{{$firstName}}</h3>
                <ul>
                    <li><a href="{{ url('/chatify') }}" title="Go to Inbox"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a href="{{ route('profile') }}" title="Go to Profile"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="sign out" ><i class="zmdi zmdi-sign-in"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>
                </ul>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu mt-5">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{ Route::is('home') ? 'active' : ''}} open"><a href="{{route('home')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>                                               
                <li class="{{ Route::is('appointments.index', 'appointments.create', 'appointments.edit') ? 'active' : '' }} open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('appointments.index')}}">Appointments</a></li>
                        <li><a href="{{route('appointments.create')}}">Book Appointment</a></li>
                    </ul>
                </li>
                <li class="{{ Route::is('health_providers', 'health_providers.profile') ? 'active' : ''}}"><a href="{{route('health_providers')}}" class="toggled waves-effect waves-block"><i class="zmdi zmdi-account-add"></i><span>Healthcare Providers</span></a>
                </li>
                <li class="{{ Route::is('treatments.index', 'treatments.create', 'treatments.edit') ? 'active' : '' }} open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Treatments</span> </a>
                    <ul class="ml-menu">
                        <li class="{{ Route::is('treatments.index','treatments.edit') ? 'active' : '' }}"><a href="{{route('treatments.index')}}">Treatments</a></li>
                        <li class="{{ Route::is('treatments.create') ? 'active' : '' }}"><a href="{{route('treatments.create')}}">Add Treatment</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="payments.html">Payments</a></li>
                        <li> <a href="add-payments.html">Add Payment</a></li>
                        <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                    </ul>
                </li>
                <li><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red"><div class="red"></div><span>Red</span> </li>
                    <li data-theme="purple"><div class="purple"></div><span>Purple</span> </li>
                    <li data-theme="blue"><div class="blue"></div><span>Blue</span> </li>
                    <li data-theme="cyan" class="active"><div class="cyan"></div><span>Cyan</span> </li>
                    <li data-theme="green"><div class="green"></div><span>Green</span> </li>
                    <li data-theme="deep-orange"><div class="deep-orange"></div><span>Deep Orange</span> </li>
                    <li data-theme="blue-grey"><div class="blue-grey"></div><span>Blue Grey</span> </li>
                    <li data-theme="black"><div class="black"></div><span>Black</span> </li>
                    <li data-theme="blush"><div class="blush"></div><span>Blush</span> </li>
                </ul>
            </div>
        </div>
    </aside>
    
</section>