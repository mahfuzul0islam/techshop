@extends('admin.dashboard')
@section('admin')
    <main class="p-6">
        <a href="{{ route('add.permission') }}" type="button" class="btn bg-success text-white btn-lg mb-3">ADD PREMISSION</a>
        <h4 class="header-title">PERMISSION Tables</h4>
        <div class="space-y-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>GROUP NAME</th>
                    <th>Action</th>
                </tr>
                @foreach ($permissions as $key => $permission)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->group_name }}</td>

                        <td>
                            <a href="{{ route('edit.permission', $permission->id) }}"
                                class="btn bg-warning text-white rounded-full">Edit</a>
                            <a href="{{ route('delete.permission', $permission->id) }}"
                                class="btn bg-danger text-white rounded-full me-3 mb-3" id="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </main>
@endsection
