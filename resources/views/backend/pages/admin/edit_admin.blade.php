@extends('admin.dashboard')
@section('admin')
    <main class="p-6">
        <div class="mt-14">
            <div class="border-b border-gray-200 dark:border-slate-500/70">
                <h1 class="text-base">edit Admin</h1>
            </div>

            <div class="mt-5 overflow-hidden">
                <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="md:col-span-2">
                            <div class="card">
                                <div class="card-header bg-light dark:bg-slate-600">
                                    <h5 class="text-base">edit Admin</h5>
                                </div>

                                <div class="p-6">

                                    <form class="space-y-4" method='POST' action="{{ route('update.admin', $admin->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <label class="mt-1 mb-2" for="name">Admin Name</label>
                                            <input type="text" value="{{ $admin->name }}" name="name" id="name"
                                                class="form-input" required>
                                        </div>
                                        <div>
                                            <label class="mt-1 mb-2" for="username">Admin User name</label>
                                            <input type="text" value="{{ $admin->username }}" name="username"
                                                id="username" class="form-input">
                                        </div>

                                        <div>
                                            <label class="mt-1 mb-2" for="address">Admin address</label>
                                            <input type="text" value="{{ $admin->address }}" name="address"
                                                id="address" class="form-input">
                                        </div>
                                        <div>
                                            <label class="mt-1 mb-2" for="phone">Admin phone</label>
                                            <input type="text" value="{{ $admin->phone }}" name="phone" id="phone"
                                                class="form-input">
                                        </div>
                                        <div>
                                            <label class="mt-1 mb-2" for="email">Admin Email</label>
                                            <input type="text" value="{{ $admin->email }}" name="email" id="email"
                                                class="form-input" required>
                                        </div>
                                        <div>
                                            <label class="mt-1 mb-2" for="name">Role Name</label>
                                            <select name='roles' class="form-select mt-3">
                                                <option selected="" disabled="">Select role Name</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}"
                                                        {{ $admin->hasRole($role->name) ? 'selected' : '' }}>
                                                        {{ $role->name }}</option>
                                                @endforeach
                                            </select>
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
@endsection
