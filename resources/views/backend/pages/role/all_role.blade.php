@extends('admin.dashboard')
@section('admin')
    <main class="p-6">
        <a href="{{ route('add.roles') }}" type="button" class="btn bg-success text-white btn-lg mb-3">ADD ROLES</a>
        <h4 class="header-title">PERMISSION Tables</h4>
        <div class="space-y-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Action</th>
                </tr>

                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $role->name }}</td>

                        <td>
                            <a href="{{ route('edit.roles', $role->id) }}"
                                class="btn bg-warning text-white rounded-full">Edit</a>
                            <a href="{{ route('delete.roles', $role->id) }}"
                                class="btn bg-danger text-white rounded-full me-3 mb-3" id="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </main>
@endsection
