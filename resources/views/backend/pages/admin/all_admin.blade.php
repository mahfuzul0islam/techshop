@extends('admin.dashboard')
@section('admin')
    <main class="p-6">
        <a href="{{ route('add.admin') }}" type="button" class="btn bg-success text-white btn-lg mb-3">ADD Admin</a>
        <h4 class="header-title">Admin Tables</h4>
        <div class="space-y-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                @foreach ($alladmin as $key => $admin)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>
                            <img src="{{ !empty($admin->photo) ? url('upload/profileimage/' . $admin->photo) : url('upload/default.jpg') }}"
                                style="height: 40px; weight: 70px;">
                        </td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            @foreach ($admin->roles as $role)
                                <span class="badge badge-pill px-3 rounded bg-danger">{{ $role->name }}</span>
                            @endforeach
                        </td>

                        <td>
                            <a href="{{ route('edit.admin', $admin->id) }}"
                                class="btn bg-warning text-white rounded-full">Edit</a>
                            <a href="{{ route('delete.admin', $admin->id) }}"
                                class="btn bg-danger text-white rounded-full me-3 mb-3" id="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </main>
@endsection
