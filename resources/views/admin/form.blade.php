
<form class="space-y-4" method='POST' action="{{route('admin.store')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <label class="mt-1 mb-2" for="FullName">Full Name</label>
        <input type="text" value="{{$admindata->name}}" name="name" id="FullName" class="form-input">
    </div>
    <div>
        <label class="mt-1 mb-2" for="Email">Email</label>
        <input type="email" value="{{$admindata->email}}" name="email" id="Email" class="form-input">
    </div>
    <div>
        <label class="mt-1 mb-2" for="Username">Username</label>
        <input type="text" value="{{$admindata->username}}" name="username" id="Username" class="form-input">
    </div>
    <div>
        <label class="mt-1 mb-2" for="phone">Phone</label>
        <input type="text" value="{{$admindata->phone}}" name="phone" id="phone" class="form-input">
    </div>
    <div>
        <label class="mt-1 mb-2" for="address">Address</label>
        <input type="text" value="{{$admindata->address}}" name="address" id="address" class="form-input">
    </div>
    <div>
        <label class="mt-1 mb-2" for="image">Photo</label>
        <input type="file" value="{{$admindata->photo}}" name="photo" id="image" class="form-input border">
    </div>
    <div class="mt-2">
        <img src="{{(!empty($admindata->photo)) ? url('upload/profileimage/'.$admindata->photo): url('upload/default.jpg')}}" id="showImage" alt="profile-image" class="rounded-full border border-gray-200 dark:border-gray-600 p-1">
    </div>

    <button class="btn mt-2 bg-primary text-white px-10" type="submit">Save</button>
</form>
