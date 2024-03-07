@extends('admin.dashboard')
@section('admin')
<main class="p-6">
    <a href="{{route('add.tags')}}" type="button" class="btn bg-success text-white btn-lg mb-3">ADD TAGS</a>
    <h4 class="header-title">Category Tables</h4>
    <div class="space-y-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>Action</th>
                </tr>
                @foreach ($tags as $key=> $tag)
                <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$tag->title}}</td>
                        <td>
                            <a href="{{route('delete.tag' , $tag->id)}}" class="btn bg-danger text-white rounded-full me-3 mb-3" id="delete">Delete</a>
                        </td>
                    </tr>
                    @endforeach 
            </table>
        
    </div>
</main>

@endsection