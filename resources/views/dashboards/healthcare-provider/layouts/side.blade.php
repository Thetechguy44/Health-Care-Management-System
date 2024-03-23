<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image">
                @if( auth()->user()->avatar != null )
                    <img src="{{asset('storage/users-avatar/'.auth()->user()->avatar)}}" alt="">
                @else
                    <img src="{{asset('default/users/img/default-avatar.png')}}" alt="">
                @endif 
            </div>
            <div class="admin-action-info"> <span>Welcome</span>
                @php
                    $firstName = Str::before(auth()->user()->name, ' ');
                @endphp
                @if(auth()->user()->healthProvider)
                    @if(auth()->user()->healthProvider->role === 'Doctor')
                        <h3>Dr. {{$firstName }}</h3>
                    @elseif(auth()->user()->healthProvider->role === 'Nurse')
                        <h3>Nr. {{$firstName }}</h3>
                    @elseif(auth()->user()->healthProvider->role === 'Community Health')
                        <h3>Ch. {{$firstName }}</h3>
                    @endif
                @else
                    <h3>{{$firstName }}</h3>
                @endif
                <ul>
                    <li><a href="{{ url('/chatify') }}" title="Go to Inbox"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a href="{{route('healthcare_provider.profile')}}" title="Go to Profile"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="sign out" ><i class="zmdi zmdi-sign-in"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>
                </ul>
            </div>
            <div class="quick-stats">
                <h5>Today Report</h5>
                <ul>
                    <li><span>16<i>Patient</i></span></li>
                    <li><span>20<i>Panding</i></span></li>
                    <li><span>04<i>Visit</i></span></li>
                </ul>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{ Route::is('healthcare_provider.home') ? 'active' : ''}} open"><a href="{{ route('healthcare_provider.home') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>                                               
                <li class="{{ Route::is('healthcare_provider.appointments') ? 'active' : ''}} open"><a href="{{route('healthcare_provider.appointments')}}"><i class="zmdi zmdi-calendar-check"></i><span>Appointments</span> </a>
                </li>
                <li class="{{ Route::is('healthcare_provider.treatments') ? 'active' : ''}} open"><a href="{{route('healthcare_provider.treatments')}}"><i class="zmdi zmdi-file-text"></i><span>Treatments</span></a></li>
                <li><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
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