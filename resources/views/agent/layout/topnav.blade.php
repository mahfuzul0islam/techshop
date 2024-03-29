<header class="app-header">
    @php
        $id = Auth::user()->id;
        $data = App\Models\User::find($id);
    @endphp
    <div class="flex items-center px-3 gap-3">
        <!-- Brand Logo -->
        <a href="index.html" class="logo-box">
            <!-- Light Brand Logo -->
            <div class="logo-light">
                <img src="{{ asset('admin/assets/images/logo-light.png') }}" class="logo-lg" alt="Light logo">
                <img src="{{ asset('admin/assets/images/logo-sm.png') }}" class="logo-sm" alt="Small logo">
            </div>

            <!-- Dark Brand Logo -->
            <div class="logo-dark">
                <img src="{{ asset('admin/assets/images/logo-dark.png') }}" class="logo-lg" alt="Dark logo">
                <img src="{{ asset('admin/assets/images/logo-sm.png') }}" class="logo-sm" alt="Small logo">
            </div>
        </a>

        <!-- Sidenav Menu Toggle Button -->
        <button id="button-toggle-menu" class="nav-link p-2">
            <span class="sr-only">Menu Toggle Button</span>
            <span class="flex items-center justify-center h-6 w-6">
                <i data-lucide="menu" class="w-6 h-6 text-xl"></i>
            </span>
        </button>

        <!-- Topbar Search Input -->
        <div class="me-auto">
            <div class="md:flex hidden items-center relative">
                <div class="absolute inset-y-0 end-3 flex items-center pointer-events-none">
                    <i class="mdi mdi-magnify text-base text-slate-500 z-10"></i>
                </div>
                <input type="search"
                    class="form-input pe-8 ps-4 rounded-full bg-white border-transparent focus:border-transparent placeholder:opacity-60"
                    placeholder="Search...">
            </div>
        </div>

        <!-- Language -->
        <div class="md:flex hidden">
            <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle nav-link flex items-center">
                    <img src="{{ asset('admin/assets/images/flags/us.jpg') }}" alt="user-image" class="h-4 w-6 me-2">
                    English
                    <i class="mdi mdi-chevron-down ms-2"></i>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] hs-dropdown-open:opacity-100 opacity-0 hidden z-10 mt-2 min-w-[10rem] bg-white dark:bg-slate-700 border border-gray-200 dark:border-slate-500/70 shadow-md rounded py-2"
                    aria-labelledby="hs-dropdown-default">
                    <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                        href="#">
                        <img src="{{ asset('admin/assets/images/flags/germany.jpg') }}" alt="user-image" class="h-4">
                        <span class="align-middle">German</span>
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                        href="#">
                        <img src="{{ asset('admin/assets/images/flags/italy.jpg') }}" alt="user-image" class="h-4">
                        <span class="align-middle">Italian</span>
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                        href="#">
                        <img src="{{ asset('admin/assets/images/flags/spain.jpg') }}" alt="user-image" class="h-4">
                        <span class="align-middle">Spanish</span>
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                        href="#">
                        <img src="{{ asset('admin/assets/images/flags/russia.jpg') }}" alt="user-image" class="h-4">
                        <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Light/Dark Toggle Button -->
        <div class="flex">
            <button id="light-dark-mode" type="button" class="nav-link p-2">
                <span class="sr-only">Light/Dark Mode</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i data-lucide="moon" class="block dark:hidden"></i>
                    <i data-lucide="sun" class="hidden dark:block"></i>
                </span>
            </button>
        </div>

        <!-- Notification Bell Button -->
        <div class="hs-dropdown relative inline-flex">
            <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle nav-link p-2">
                <span class="sr-only">View notifications</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i data-lucide="bell"></i>
                    <span
                        class="absolute top-3 end-1.5 w-4 h-4 flex items-center justify-center rounded-full bg-danger text-white font-medium text-[10px]">4</span>
                </span>
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] hs-dropdown-open:opacity-100 opacity-0 hidden z-10 mt-2 w-96 min-w-[10rem] bg-white dark:bg-slate-700 border border-gray-200 dark:border-slate-500/70 shadow-md rounded py-2"
                aria-labelledby="hs-dropdown-default">
                <div class="p-4">
                    <div class="flex items-center justify-between">
                        <h6 class="text-sm"> Notification</h6>
                        <a href="javascript: void(0);" class="text-gray-500">
                            <small>Clear All</small>
                        </a>
                    </div>
                </div>

                <div class="p-4 h-80" data-simplebar>
                    <h5 class="text-xs text-gray-500 dark:text-gray-300 mb-2">Today</h5>

                    <a href="javascript:void(0);" class="block mb-4">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <div
                                        class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary">
                                        <i class="mdi mdi-comment-account-outline text-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Datacorp <small
                                            class="font-normal text-gray-500 ms-1">1 min ago</small></h5>
                                    <small class="noti-item-subtitle text-gray-400">Caleb Flakelar commented on
                                        Admin</small>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript:void(0);" class="block mb-4">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <div
                                        class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white">
                                        <i class="mdi mdi-heart text-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Admin <small
                                            class="font-normal text-gray-500 ms-1">1 hr ago</small></h5>
                                    <small class="noti-item-subtitle text-gray-400">New user registered</small>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript:void(0);" class="block mb-4">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('admin/assets/images/users/avatar-2.jpg') }}"
                                        class="rounded-full h-9 w-9" alt="">
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Cristina Pride <small
                                            class="font-normal text-gray-500 ms-1">1 day ago</small></h5>
                                    <small class="noti-item-subtitle text-gray-400">Hi, How are you? What about our
                                        next meeting</small>
                                </div>
                            </div>
                        </div>
                    </a>

                    <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                    <a href="javascript:void(0);" class="block mb-4">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <div
                                        class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white">
                                        <i class="mdi mdi-account-plus text-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                    <small class="noti-item-subtitle text-gray-400">Caleb Flakelar commented on
                                        Admin</small>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript:void(0);" class="block">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('admin/assets/images/users/avatar-4.jpg') }}"
                                        class="rounded-full h-9 w-9" alt="">
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Karen Robinson</h5>
                                    <small class="noti-item-subtitle text-gray-400">Wow ! this admin looks good and
                                        awesome design</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <a href="javascript:void(0);"
                    class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold">
                    View All
                </a>
            </div>
        </div>

        <!-- Profile Dropdown Button -->
        <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
            <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle nav-link flex items-center">
                <img src="{{(!empty($data->photo)) ? url('upload/profileimage/'.$data->photo): url('upload/default.jpg')}}" alt="user-image"
                    class="rounded-full h-8 w-8">
                <div class="lg:flex hidden">
                    <span class="text-sm mx-2">{{$data->name}}</span>
                    <i class="mdi mdi-chevron-down"></i>
                </div>
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] hs-dropdown-open:opacity-100 opacity-0 hidden z-10 mt-2 min-w-[10rem] bg-white dark:bg-slate-700 border border-gray-200 dark:border-slate-500/70 shadow-md rounded py-2"
                aria-labelledby="hs-dropdown-default">
                <h6 class="py-2 px-5">Welcome !</h6>

                <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                    href="{{route('agent.profile')}}">
                    <i data-lucide="user" class="w-4 h-4 me-2"></i>
                    <span>My Account</span>
                </a>
               
                <hr class="my-2 border-gray-200 dark:border-gray-700">
                <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                    href="{{route('agent.logout')}}">
                    <i data-lucide="log-out" class="w-4 h-4 me-2"></i>
                    <span>Logout</span>
                </a>

            </div>
        </div>

        <!-- Customization Button -->
       
    </div>
</header>
