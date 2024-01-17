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
</head>

<body>
 
    <div class="wrapper">

        <!-- Sidenav Menu Start  -->
        @include('admin.layout.sidenav')
        <!-- Sidenav Menu End  -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content bg-white dark:bg-slate-700">

            <!-- Topbar Start -->
            @include('admin.layout.topnav')
            <!-- Topbar End -->

            @yield('main')

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

    <!-- Theme Settings -->
    <div>
        <!-- Theme Settings Offcanvas -->

        <div id="theme-customization" class="hs-overlay hs-overlay-open:translate-x-0 translate-x-full fixed top-0 right-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white dark:bg-gray-800 hidden" tabindex="-1">
            <div class="h-16 bg-primary text-white flex items-center px-6 gap-3">
                <h5 class="text-base text-white grow">Theme Customizer</h5>
                <button type="button" class="h-6 w-6 flex items-center justify-center rounded-full bg-dark text-white" data-hs-overlay="#theme-customization">
                    <i class="mdi mdi-close text-sm"></i>
                </button>
            </div>

            <div class="h-[calc(100vh-64px)]" data-simplebar>
                <div class="p-6">
                    <div class="py-3 px-5 border border-warning/25 bg-warning/20 text-warning rounded mb-6" role="alert">
                        <span class="font-medium">Customize </span> the overall color scheme, Layout, etc.
                    </div>

                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Color Scheme</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-mode" id="layout-color-light" value="light">
                                <label class="ms-2" for="layout-color-light">Light</label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-mode" id="layout-color-dark" value="dark">
                                <label class="ms-2" for="layout-color-dark"> Dark </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Direction</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir" id="direction-ltr" value="ltr">
                                <label class="ms-2" for="direction-ltr"> LTR </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir" id="direction-rtl" value="rtl">
                                <label class="ms-2" for="direction-rtl"> RTL </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4" id="leftSidebarSize">
                        <h5 class="font-semibold text-sm mb-3">Left Sidebar Size</h5>
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-default" value="default">
                                <label class="ms-2" for="sidenav-view-default"> Default </label>
                            </div>


                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-condensed" value="condensed">
                                <label class="ms-2" for="sidenav-view-condensed"> Condensed (Small) </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-compact" value="compact">
                                <label class="ms-2" for="sidenav-view-compact"> Compact </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-mobile" value="mobile">
                                <label class="ms-2" for="sidenav-view-mobile"> Mobile </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-hidden" value="hidden">
                                <label class="ms-2" for="sidenav-view-hidden">Hidden </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Sidenav Color</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-color" id="sidenav-color-light" value="light">
                                <label class="ms-2" for="sidenav-color-light"> Light </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-color" id="sidenav-color-dark" value="dark">
                                <label class="ms-2" for="sidenav-color-dark"> Dark </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-color" id="sidenav-color-brand" value="brand">
                                <label class="ms-2" for="sidenav-color-brand"> Brand </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="ms-2" for="topbar-color-light"> Light </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="ms-2" for="topbar-color-dark"> Dark </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn bg-primary text-white w-full" id="reset-layout">Reset</button>
                    </div>
                </div>
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
