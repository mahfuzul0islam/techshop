<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/simple-tw/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jan 2024 13:18:38 GMT -->

<head>
    <meta charset="utf-8">
    <title>admin | Simple - Tailwind HTML Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="Simple - Tailwind HTML Admin Dashboard Template, A fully featured admin theme which can be used to build CRM, CMS, etc."
        name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">



    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- toster --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    {{-- custom css  --}}
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="relative bg-cover bg-center">
        <div class="relative flex flex-col my-12 pt-12">
            <div class="flex justify-center">
                <div class="px-4">
                    <div class="card overflow-hidden">
                        <div class="p-9">

                            <div class="mb-6 mt-2">
                                <a href="index.html">
                                    <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt=""
                                        class="h-8 mx-auto block dark:hidden">
                                    <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt=""
                                        class="h-8 mx-auto hidden dark:block">
                                </a>
                            </div>

                            <div class="mb-3 mt-2">
                                <h1>just loging with</h1>
                                <h1>email : admin@gmail.com</h1>
                                <h1>password : password</h1>
                            </div>

                            <form action="{{ route('login') }}" enctype="multipart/form-data" method="POST"
                                class="xl:w-[30rem] sm:w-96 py-2">
                                @csrf
                                <div class="mb-4">
                                    <label class="mt-1 mb-2" for="email">Email address</label>
                                    <input class="form-input" type="email" name="email" id="email"
                                        required="">
                                </div>

                                <div class="mb-4">
                                    <div class="flex items-center justify-between">
                                        <label class="mt-1 mb-2" for="password">Password</label>
                                    </div>
                                    <input type="password" id="password" name="password" class="form-input"
                                        placeholder="Enter your password">
                                </div>
                                <div class="text-center mb-2">
                                    <button class="btn bg-primary w-full text-white" type="submit"> Sign In </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="text-center mt-6">
                        <p>Don't have an account?
                            <a href="pages-register.html" class="ms-1 font-bold">
                                Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/preline/preline.js') }}"></script>

    <!-- App Js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/raphael/raphael.min.js') }}"></script>




    <!-- init js -->
    <script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script>

    {{-- toster --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('admin/assets/js/customcode.js') }}"></script>
</body>


<!-- Mirrored from coderthemes.com/simple-tw/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jan 2024 13:18:38 GMT -->

</html>
