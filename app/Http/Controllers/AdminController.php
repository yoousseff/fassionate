<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    // retrun admin dashboard
    public function AdminDashboard(){
        return view('admin.index');
    }

    // return admin login page
    public  function AdminLogin(){
        return view('admin.admin_login');
    }

    // admin logout function
    public function AdminDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->Route('adminLogin');
    }

    //admin profile data
    public function AdminProfile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    //update admin data
    public function AdminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    // admin change password view
    public function AdminChangePassword(){
        return view('admin.admin_change_password');
    }

    // admin change password functionality
    public function AdminUpdatePassword(Request $request){

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required | confirmed'
        ]);


        if (!Hash::check($request->old_password, Auth::user()->password)) {
            $errorNotification = array(
                'message' => 'Wrong Password',
                'alert-type' => 'error'
            );
            return back()->with($errorNotification);
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        $notification = array(
            'message' => 'Password updated successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);



    }

}
