<div class="app-menu">

    <!-- Sidenav Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="logo-box">
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

    @php
        $id = Auth::user()->id;
        $data = App\Models\User::find($id);
    @endphp

    <!--- Menu -->
    <div data-simplebar>
        <!-- User Box -->
        <div class="relative flex flex-wrap items-center justify-center gap-3 mt-5 px-[25px] py-2.5 user-box">
            <img src="{{ !empty($data->photo) ? url('upload/profileimage/' . $data->photo) : url('upload/default.jpg') }}"
                alt="user-image" class="h-12 w-12 rounded-full">
            <div class="user-text">
                <a href="{{ route('admin.dashboard') }}" class="font-semibold mb-1">{{ $data->name }}</a>
                <p class="text-xs">{{ $data->role }}</p>
            </div>
        </div>

        <ul class="menu" data-hs-collapse="accordion">
            <li class="menu-title">Navigation</li>

            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <i data-lucide="home" class="menu-icon"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-title">Admin</li>
            <li class="menu-item">
                <a href="{{ route('admin.profile') }}" class="menu-link">
                    <i data-lucide="user-circle" class="menu-icon"></i>
                    <span class="menu-text">User Profile</span>
                </a>
            </li>

            <li class="menu-title">Controlls</li>

            {{-- <li class="menu-item">
                <a href="ui-elements.html" class="menu-link">
                    <i data-lucide="paint-bucket" class="menu-icon"></i>
                    <span class="menu-text"> UI Elements </span>
                    <span class="badge bg-primary text-white rounded">11</span>
                </a>
            </li> --}}
            @if (Auth::user()->can('category.manu'))
                <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuComponents">
                        <i data-lucide="chevron-down-square" class="menu-icon"></i>
                        <span class="menu-text"> Categories </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="sub-menu hidden" id="menuComponents">
                        @if (Auth::user()->can('all.category'))
                            <li class="menu-item">
                                <a href="{{ route('show.categories') }}" class="menu-link">
                                    <span class="menu-text">All Category</span>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->can('add.category'))
                            <li class="menu-item">
                                <a href="{{ route('add.category') }}" class="menu-link">
                                    <span class="menu-text">Add Category</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (Auth::user()->can('tags.manu'))
                <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuComponents">
                        <i data-lucide="chevron-down-square" class="menu-icon"></i>
                        <span class="menu-text"> Tags </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="sub-menu hidden" id="menuComponents">
                        <li class="menu-item">
                            <a href="{{ route('show.tags') }}" class="menu-link">
                                <span class="menu-text">All Tags</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('add.tags') }}" class="menu-link">
                                <span class="menu-text">Add Tags</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="menu-title">demo item</li>
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuPages">
                    <i data-lucide="files" class="menu-icon"></i>
                    <span class="menu-text"> demo1 </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden" id="menuPages">
                    <li class="menu-item">
                        <a href="pages-login.html" class="menu-link">
                            <span class="menu-text">Login</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-register.html" class="menu-link">
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-forget-password.html" class="menu-link">
                            <span class="menu-text">Forget Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-lock-screen.html" class="menu-link">
                            <span class="menu-text">Lock-screen</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-blank.html" class="menu-link">
                            <span class="menu-text">Blank page</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-404.html" class="menu-link">
                            <span class="menu-text">Error 404</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-confirm-mail.html" class="menu-link">
                            <span class="menu-text">Confirm Mail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-session-expired.html" class="menu-link">
                            <span class="menu-text">Session Expired</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuPages">
                    <i data-lucide="files" class="menu-icon"></i>
                    <span class="menu-text"> demo2 </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden" id="menuPages">
                    <li class="menu-item">
                        <a href="pages-login.html" class="menu-link">
                            <span class="menu-text">Login</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-register.html" class="menu-link">
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-forget-password.html" class="menu-link">
                            <span class="menu-text">Forget Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-lock-screen.html" class="menu-link">
                            <span class="menu-text">Lock-screen</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-blank.html" class="menu-link">
                            <span class="menu-text">Blank page</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-404.html" class="menu-link">
                            <span class="menu-text">Error 404</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-confirm-mail.html" class="menu-link">
                            <span class="menu-text">Confirm Mail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-session-expired.html" class="menu-link">
                            <span class="menu-text">Session Expired</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuPages">
                    <i data-lucide="files" class="menu-icon"></i>
                    <span class="menu-text"> demo3 </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden" id="menuPages">
                    <li class="menu-item">
                        <a href="pages-login.html" class="menu-link">
                            <span class="menu-text">Login</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-register.html" class="menu-link">
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-forget-password.html" class="menu-link">
                            <span class="menu-text">Forget Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-lock-screen.html" class="menu-link">
                            <span class="menu-text">Lock-screen</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-blank.html" class="menu-link">
                            <span class="menu-text">Blank page</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-404.html" class="menu-link">
                            <span class="menu-text">Error 404</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-confirm-mail.html" class="menu-link">
                            <span class="menu-text">Confirm Mail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-session-expired.html" class="menu-link">
                            <span class="menu-text">Session Expired</span>
                        </a>
                    </li>
                </ul>
            </li>





            <li class="menu-title">Product</li>

            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuExtraPages">
                    <i data-lucide="target" class="menu-icon"></i>
                    <span class="menu-text"> Role & Permission </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden" id="menuExtraPages">

                    <li class="menu-item">
                        <a href="{{ route('show.permission') }}" class="menu-link">
                            <span class="menu-text">Premissions</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('show.roles') }}" class="menu-link">
                            <span class="menu-text">Roles</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('add.roles.permission') }}" class="menu-link">
                            <span class="menu-text">Roles in Premission</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('all.roles.permission') }}" class="menu-link">
                            <span class="menu-text">All Roles in Premission</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#allAdmin">
                    <i data-lucide="files" class="menu-icon"></i>
                    <span class="menu-text"> Manage admin </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden" id="allAdmin">
                    <li class="menu-item">
                        <a href="{{ route('all.admin') }}" class="menu-link">
                            <span class="menu-text">all admin</span>
                        </a>
                    </li>
                    {{-- <li class="menu-item">
                        <a href="{{ route('add.admin') }}" class="menu-link">
                            <span class="menu-text">add admin</span>
                        </a>
                    </li> --}}
                </ul>
            </li>


            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuLayouts">
                    <i data-lucide="layout" class="menu-icon"></i>
                    <span class="menu-text"> Layouts </span>
                    <span class="badge bg-danger text-white rounded-full">New</span>
                </a>

                <ul class="sub-menu hidden" id="menuLayouts">
                    <li class="menu-item">
                        <a href="layouts-dark-sidebar.html" target="_blank" class="menu-link">
                            <span class="menu-text">Dark Sidebar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-brand-sidebar.html" target="_blank" class="menu-link">
                            <span class="menu-text">Brand Sidebar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-small-sidebar.html" target="_blank" class="menu-link">
                            <span class="menu-text">Small Sidebar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-compact-sidebar.html" target="_blank" class="menu-link">
                            <span class="menu-text">Compact Sidebar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-mobile-sidebar.html" target="_blank" class="menu-link">
                            <span class="menu-text">Mobile Sidebar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-hidden-sidebar.html" target="_blank" class="menu-link">
                            <span class="menu-text">Hidden Sidebar</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-hs-collapse="#menuDemoItem" class="menu-link">
                    <i data-lucide="share-2" class="menu-icon"></i>
                    <span class="menu-text">Demo Item </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul id="menuDemoItem" class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="javascript: void(0)" class="menu-link">
                            <span class="menu-text">Item 1</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript: void(0)" class="menu-link">
                            <span class="menu-text">Item 2</span>
                            <span class="badge bg-info rounded">New</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
