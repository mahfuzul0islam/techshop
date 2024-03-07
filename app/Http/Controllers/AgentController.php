<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function AgentDashboard(){
        return view('agent.index');
    }
    public function AgentProfile(){

        $id = Auth::user()->id;
        $agentdata=User::find($id);
        return view('agent.profile',compact('agentdata'));
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
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
