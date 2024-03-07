@extends('admin.dashboard')
@section('admin')
    <main class="p-6">
        <a href="{{ route('add.roles.permission') }}" type="button" class="btn bg-success text-white btn-lg mb-3">ADD
            PESMISSION TO ROLES</a>
        <h4 class="header-title">PERMISSION TO ROLES TABLE</h4>
        <div class="space-y-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>ROLE NAME</th>
                    <th>PERMISSIONS</th>
                    <th>Action</th>
                </tr>

                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            @foreach ($role->permissions as $perm)
                                <span class="badge px-1 rounded bg-danger">{{ $perm->name }}</span>
                            @endforeach

                        </td>
                        <td>

                            <a href="{{ route('admin.edit.roles', $role->id) }}"
                                class="btn bg-warning text-white rounded-full me-3 mb-3" id="edit">Edit</a>
                            <a href="{{ route('admin.delete.roles', $role->id) }}"
                                class="btn bg-danger text-white rounded-full me-3 mb-3" id="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </main>
@endsection
