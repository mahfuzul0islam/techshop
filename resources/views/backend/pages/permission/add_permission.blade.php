@extends('admin.dashboard')
@section('admin')
    <main class="p-6">
        <div class="mt-14">
            <div class="border-b border-gray-200 dark:border-slate-500/70">
                <h1 class="text-base">Add Permission</h1>
            </div>

            <div class="mt-5 overflow-hidden">
                <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="md:col-span-2">
                            <div class="card">
                                <div class="card-header bg-light dark:bg-slate-600">
                                    <h5 class="text-base">Add Permission</h5>
                                </div>

                                <div class="p-6">

                                    <form class="space-y-4" method='POST' action="{{ route('store.permission') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <label class="mt-1 mb-2" for="name">Permission Name</label>
                                            <input type="text" value="" name="name" id="name"
                                                class="form-input" required>
                                        </div>
                                        <div>
                                            <select name='group_name' class="form-select mt-3">

                                                <option selected="" disabled="">Select Gorup Name
                                                </option>
                                                <option value="category">category</option>
                                                <option value="tags">tags</option>
                                                <option value="damo1">damo1</option>
                                                <option value="damo2">damo2</option>
                                                <option value="damo3">damo3</option>

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
