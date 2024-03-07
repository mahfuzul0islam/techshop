<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/simple-tw/layouts/pages-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jan 2024 13:18:38 GMT -->

<head>
    <meta charset="utf-8">
    <title>Error 404 | Simple - Tailwind HTML Admin Dashboard Template</title>
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
</head>

<body>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="relative bg-cover bg-center">
        <div class="relative flex flex-col my-12 pt-12">
            <div class="flex justify-center">
                <div class="px-4">
                    <div class="card overflow-hidden xl:w-[36rem] sm:w-96">
                        <div class="p-9">
                            <div class="mb-6 mt-2">
                                <a href="index.html">
                                    <img src="assets/images/logo-dark.png" alt=""
                                        class="h-8 mx-auto block dark:hidden">
                                    <img src="assets/images/logo-light.png" alt=""
                                        class="h-8 mx-auto hidden dark:block">
                                </a>
                            </div>

                            <div class="mt-6 pt-4 text-center">
                                <img src="{{ asset('admin/assets/images/cancel.svg') }}" title="invite.svg"
                                    class="h-16 w-16 mx-auto">
                                <h3 class="text-2xl font-normal mb-6 mt-4">Page Not Found</h3>
                                <p class="mt-3"> It's looking like you may have taken a wrong turn. Don't worry... it
                                    happens to the best of us. You might want to check your internet connection. </p>
                            </div>

                            <div class="text-center mt-6 mb-2">
                                <a href="{{ route('admin.dashboard') }}" class="btn bg-primary w-full text-white"
                                    type="submit">
                                    Back to
                                    Home </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</body>


<!-- Mirrored from coderthemes.com/simple-tw/layouts/pages-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jan 2024 13:18:38 GMT -->

</html>
