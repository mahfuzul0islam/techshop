<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/simple-tw/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jan 2024 13:16:00 GMT -->
<head>
    <meta charset="utf-8">
    <title>Dashboard | Simple - Tailwind HTML Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Simple - Tailwind HTML Admin Dashboard Template, A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{asset('admin/assets/js/config.js')}}"></script>
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- toster --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    {{-- custom css  --}}
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
 
    <div class="wrapper">

        <!-- Sidenav Menu Start  -->
        @include('agent.layout.sidenav')
        <!-- Sidenav Menu End  -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content bg-white dark:bg-slate-700">

            <!-- Topbar Start -->
            @include('agent.layout.topnav')
            <!-- Topbar End -->

            @yield('agent')

            <!-- Footer Start -->
            <footer class="footer border-t border-gray-200 dark:border-gray-600 mt-auto">
                <div class="h-16 flex items-center px-8 rounded-none">
                    <div class="flex justify-center w-full gap-4">
                        <div>
                            <script>document.write(new Date().getFullYear())</script> © Simple  theme by <a href="https://coderthemes.com/" target="_blank" class="text-primary">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    
    
    <!-- Plugin Js -->
    <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/lucide/umd/lucide.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/preline/preline.js')}}"></script>

    <!-- App Js -->
    <script src="{{asset('admin/assets/js/app.js')}}"></script>

    <script src="{{asset('admin/assets/libs/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>

    <!-- init js -->
    <script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

    {{-- toster --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
     @if(Session::has('message'))
     var type = "{{ Session::get('alert-type','info') }}"
     switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
    
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
    
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
    
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break; 
     }
     @endif 
    </script>
</body>


<!-- Mirrored from coderthemes.com/simple-tw/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jan 2024 13:16:00 GMT -->
</html>
