<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('admin.edit-profile');
    }
    public function updateProfile(Request $request)
    {
        $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        $request->validate([
            'name' =>  'required',
            'email' =>  'required|email',
        ]);
        if ($request->password != '') {
            $request->validate([
                'password' =>  'required',
                'retype_password' =>  'required|same:password',
            ]);
            $admin->password = Hash::make($request->password);
        }
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' =>  'image|mimes:png,jpg',
            ]);
            // unlink(public_path('uploads/' . $admin->photo));
            $name = $request->file('photo')->getClientOriginalName();
            $name_file = $name;
            $request->file('photo')->move(public_path('uploads'), $name_file);
            $admin->photo = $name_file;
        }
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->update();

        return redirect()->back()->with('success', 'Data Berhasil Di Ubah !');
    }
}
