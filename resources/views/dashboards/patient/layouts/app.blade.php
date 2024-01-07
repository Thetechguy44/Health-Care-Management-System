<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>@yield('title')</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.css')}}"/>
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('default/users/croptool/CropTool.min.css')}}">
@livewireStyles
</head>

<body class="theme-cyan">
<!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-cyan">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <!-- #Float icon -->
        <ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
            <li class="mfbc_wrap">
                <a href="javascript:void(0);" class="mfbcb-main g-bg-cyan">
                    <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
                    <i class="mfbcm-icon-active zmdi zmdi-close"></i>
                </a>
                <ul class="mfbc_list">
                    <li><a href="doctor-schedule.html" data-mfb-label="Doctor Schedule" class="mfb-child bg-blue"><i class="zmdi zmdi-calendar mfbc_icon"></i></a></li>
                    <li><a href="patients.html" data-mfb-label="Patients List" class="mfb-child bg-orange"><i class="zmdi zmdi-account-o mfbc_icon"></i></a></li>
                    <li><a href="payments.html" data-mfb-label="Payments" class="mfb-child bg-purple"><i class="zmdi zmdi-balance-wallet mfbc_icon"></i></a></li>
                </ul>
            </li>
        </ul>

        <div>
            @yield('content')
        </div>
  
 <!-- <div class="color-bg"></div> -->
 <div class="theme-bg"></div>
<!-- Jquery Core Js --> 
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{asset('assets/bundles/chartscripts.bundle.js')}}"></script> <!-- Chart Plugins Js -->
<script src="{{asset('assets/bundles/sparklinescripts.bundle.js')}}"></script> <!-- Chart Plugins Js -->

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
<script src="{{asset('assets/js/pages/index.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/sparkline.min.js')}}"></script>
<script src="{{asset('default/users/croptool/CropTool.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    window.addEventListener('showToastr', function(event){
        toastr.remove();
        if(  event.detail.type === 'info' ){ toastr.info(event.detail.message); }
        else if( event.detail.type === 'success' ){ toastr.success(event.detail.message); }
        else if( event.detail.type === 'error' ){ toastr.error(event.detail.message); }
        else if( event.detail.type === 'warning' ){ toastr.warning(event.detail.message); }
        else{ return false; }
    });
</script>
@livewireScripts
    @if(session('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @endif

    @if(session('error'))
        <script>
            toastr.error('{{ session('error') }}');
        </script>
    @endif

    @if(session('warning'))
        <script>
            toastr.warning('{{ session('warning') }}');
        </script>
    @endif

    @if(session('info'))
        <script>
            toastr.info('{{ session('info') }}');
        </script>
    @endif
</body>
</html>