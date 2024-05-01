<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.ico')}}">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/default/users/croptool/ijaboCropTool.min.css')}}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    @livewireStyles
</head>
<body >
  
<!-- header start -->
<div class="main-wrapper">

    @livewire('admin.admin-header-nav')
    @include('dashboards.admin.layouts.side')

    @yield('content')
</div>
<!-- main content end -->
<div class="sidebar-overlay" data-reff=""></div>
<script src="{{asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/assets/js/Chart.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/chart.js')}}"></script>
<script src="{{asset('admin/assets/js/app.js')}}"></script>
<script src="{{asset('default/users/croptool/ijaboCropTool.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
<script>
    $('#adminPictureFile').ijaboCropTool({
        preview : '#adminPicture',
        setRatio:1,
        allowedExtensions: ['jpg', 'jpeg','png'],
        buttonsText:['CROP','QUIT'],
        buttonsColor:['#30bf7d','#ee5155', -15],
        processUrl:'',
        onSuccess:function(message, element, status){
            alert(message);
        },
        onError:function(message, element, status){
        alert(message);
        }
    });
</script>

@livewireScripts
</body>
</html>