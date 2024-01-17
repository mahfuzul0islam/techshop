<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    }
    public function AdminProfile(){

        $id = Auth::user()->id;
        $admindata=User::find($id);
        return view('admin.profile',compact('admindata'));
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }   
    public function store(Request $request){
        $id = Auth::user()->id;
        $data=User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/profileimage/' . $data->photo)); 
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/profileimage'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message'=>'Profile Updated',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }
    
}
