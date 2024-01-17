@extends('admin.dashboard')
@section('main')
    <main class="p-6">
        <div class="mt-14">
            <div class="border-b border-gray-200 dark:border-slate-500/70">
                <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                    <button type="button"
                        class="hs-tab-active:border-primary py-4 px-5 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all font-normal whitespace-nowrap active"
                        id="tabs-with-underline-item-1" data-hs-tab="#tabs-with-underline-1"
                        aria-controls="tabs-with-underline-1" role="tab">
                        Profile
                    </button>
                </nav>
            </div>

            <div class="mt-5 overflow-hidden">
                <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div>
                            <div class="space-y-6">
                                <div class="card">
                                    <div class="card-header bg-light dark:bg-slate-600">
                                        <h5 class="text-base">Personal Information</h5>
                                    </div>
                                    <div class="relative mx-auto mt-6 h-32 w-32">
                                        <img src="{{ !empty($admindata->photo) ? url('upload/profileimage/' . $admindata->photo) : url('upload/default.jpg') }}"
                                            alt="profile-image"
                                            class="rounded-full border border-gray-200 dark:border-gray-600 p-1">
                                        <i class="mdi mdi-star-circle absolute rounded-full text-center bottom-2.5 leading-6 end-0 h-6 w-6 text-lg bg-white text-success"
                                            title="verified user"></i>
                                    </div>

                                    <div class="p-6">
                                        <div class="mb-4">
                                            <strong>Full Name</strong>
                                            <p>{{ $admindata->name }}</p>
                                        </div>
                                        <div class="mb-4">
                                            <strong>Mobile</strong>
                                            <p>{{ $admindata->phone }}</p>
                                        </div>
                                        <div class="mb-4">
                                            <strong>Email</strong>
                                            <p>{{ $admindata->email }}</p>
                                        </div>
                                        <div>
                                            <strong>Location</strong>
                                            <p>{{ $admindata->address }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-light dark:bg-slate-600">
                                        <h5 class="text-base">Update Password</h5>
                                    </div>


                                    <div class="p-6">
                                        @include('profile.partials.update-password-form')
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="md:col-span-2">
                            <div class="card">
                                <div class="card-header bg-light dark:bg-slate-600">
                                    <h5 class="text-base">Update Profile</h5>
                                </div>

                                <div class="p-6">
                                    @include('admin.form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
