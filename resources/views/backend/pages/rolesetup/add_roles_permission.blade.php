@extends('admin.dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <main class="p-6">
        <div class="mt-14">
            <div class="border-b border-gray-200 dark:border-slate-500/70">
                <h1 class="text-base">Add Roles In Permissions</h1>
            </div>

            <div class="mt-5 overflow-hidden">
                <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="md:col-span-2">
                            <div class="card">
                                <div class="card-header bg-light dark:bg-slate-600">
                                    <h5 class="text-base">Add Roles In Permissions</h5>
                                </div>

                                <div class="p-6">

                                    <form class="space-y-4" method="POST" action="{{ route('roles.permission.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <label class="mt-1 mb-2" for="name">Role Name</label>
                                            <select name='role_id' class="form-select mt-3">

                                                <option selected="" disabled="">Select Gorup Name
                                                </option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>

                                            <div class="mt-2 mb-2">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="chackmain"
                                                        class="form-checkbox rounded-sm text-primary">
                                                    <label class="ms-2" id="chackmain">Permission All</label>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="">
                                                @foreach ($permission_group as $group)
                                                    <div class="col-3">
                                                        <div class="mt-2 mb-2">
                                                            <div class="flex items-center">
                                                                <input type="checkbox"
                                                                    class="form-checkbox rounded-sm text-primary">
                                                                <label
                                                                    class="ms-2 font-bold text-info">{{ $group->group_name }}</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @php
                                                        $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                                                    @endphp


                                                    @foreach ($permissions as $permission)
                                                        <div class="col-9">
                                                            <div class="mt-2 mb-2">
                                                                <div class="flex items-center">
                                                                    <input type="checkbox" name="permission[]"
                                                                        id="permission{{ $permission->id }}"
                                                                        value="{{ $permission->id }}"
                                                                        class="form-checkbox rounded-sm text-primary">
                                                                    <label class="ms-2"
                                                                        id="permission{{ $permission->id }}">{{ $permission->name }}</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endforeach
                                            </div>

                                        </div>

                                        <button class="btn mt-2 bg-primary text-white px-10" type="submit">Save</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script type="text/javascript">
        $('#chackmain').click(function() {
            if ($(this).is(':checked')) {
                $('input[type=checkbox]').prop('checked', true);
            } else {
                $('input[type=checkbox]').prop('checked', false);
            }
        })
    </script>
@endsection
