@extends('admin.dashboard')
@section('admin')
    <main class="p-6">
        <a href="{{route('add.category')}}" type="button" class="btn bg-success text-white btn-lg mb-3">ADD CATEGORY</a>
        <h4 class="header-title">Category Tables</h4>
        <div class="space-y-12">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($categories as $key=> $category)
                    <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$category->title}}</td>
                            <td><img src="{{(!empty($category->image)) ? url('upload/categoryimage/'.$category->image): url('upload/defaultcategory.png')}}" alt="user-image"
                                class="h-12 w-12 rounded-full"></td>
                            
                            <td>
                                <a href="{{route('edit.category' , $category->id)}}" class="btn bg-warning text-white rounded-full">Edit</a>
                                <a href="{{route('delete.category' , $category->id)}}" class="btn bg-danger text-white rounded-full me-3 mb-3" id="delete">Delete</a>
                            </td>
                        </tr>
                        @endforeach 
                </table>
            
        </div>
    </main>
    
@endsection
