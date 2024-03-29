<div class="app-menu">

    <!-- Sidenav Brand Logo -->
    <a href="{{ route('agent.dashboard') }}" class="logo-box">
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
                <a href="{{ route('agent.dashboard') }}" class="font-semibold mb-1">{{ $data->name }}</a>
                <p class="text-xs">{{ $data->role }}</p>
            </div>
        </div>

        <ul class="menu" data-hs-collapse="accordion">
            <li class="menu-title">Navigation</li>

            <li class="menu-item">
                <a href="{{ route('agent.dashboard') }}" class="menu-link">
                    <i data-lucide="home" class="menu-icon"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <a href="extras-calendar.html" class="menu-link">
                    <i data-lucide="calendar" class="menu-icon"></i>
                    <span class="menu-text"> Calender </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="extras-contacts.html" class="menu-link">
                    <i data-lucide="users" class="menu-icon"></i>
                    <span class="menu-text"> Contacts </span>
                </a>
            </li>


            <li class="menu-item">
                <a href="extras-invoice.html" class="menu-link">
                    <i data-lucide="file-text" class="menu-icon"></i>
                    <span class="menu-text"> Invoice </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('agent.profile') }}" class="menu-link">
                    <i data-lucide="user-circle" class="menu-icon"></i>
                    <span class="menu-text">User Profile</span>
                </a>
            </li>

            <li class="menu-title">Components</li>

            <li class="menu-item">
                <a href="ui-elements.html" class="menu-link">
                    <i data-lucide="paint-bucket" class="menu-icon"></i>
                    <span class="menu-text"> UI Elements </span>
                    <span class="badge bg-primary text-white rounded">11</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuComponents">
                    <i data-lucide="lightbulb" class="menu-icon"></i>
                    <span class="menu-text"> Components </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden" id="menuComponents">
                    <li class="menu-item">
                        <a href="components-range-slider.html" class="menu-link">
                            <span class="menu-text">Range Slider</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="components-alerts.html" class="menu-link">
                            <span class="menu-text">Alerts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="components-icons.html" class="menu-link">
                            <span class="menu-text">Icons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="components-widgets.html" class="menu-link">
                            <span class="menu-text">Widgets</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="typography.html" class="menu-link">
                    <i data-lucide="spray-can" class="menu-icon"></i>
                    <span class="menu-text"> Typography </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuForms">
                    <i data-lucide="pencil-line" class="menu-icon"></i>
                    <span class="menu-text"> Forms </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden" id="menuForms">
                    <li class="menu-item">
                        <a href="forms-general.html" class="menu-link">
                            <span class="menu-text">General Elements</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-advanced.html" class="menu-link">
                            <span class="menu-text">Advanced Form</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuTables">
                    <i data-lucide="menu" class="menu-icon"></i>
                    <span class="menu-text"> Tables </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden" id="menuTables">
                    <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                            <span class="menu-text">Basic Tables</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="tables-advanced.html" class="menu-link">
                            <span class="menu-text">Advanced Tables</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="charts.html" class="menu-link">
                    <i data-lucide="pie-chart" class="menu-icon"></i>
                    <span class="menu-text"> Charts </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="maps.html" class="menu-link">
                    <i data-lucide="map-pin" class="menu-icon"></i>
                    <span class="menu-text"> Maps </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuPages">
                    <i data-lucide="files" class="menu-icon"></i>
                    <span class="menu-text"> Pages </span>
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
                <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuExtraPages">
                    <i data-lucide="target" class="menu-icon"></i>
                    <span class="menu-text"> Extra Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden" id="menuExtraPages">
                    <li class="menu-item">
                        <a href="extras-timeline.html" class="menu-link">
                            <span class="menu-text">Timeline</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extras-faqs.html" class="menu-link">
                            <span class="menu-text">FAQs</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extras-pricing.html" class="menu-link">
                            <span class="menu-text">Pricing</span>
                        </a>
                    </li>
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
