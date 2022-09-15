<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $users = User::all();
        return view('frontend.profile.index', compact('users'));
    }

    public function editprofile()
    {
        $users = User::all();
        return view('frontend.profile.edit', compact('users'));
    }

    public function update(Request $request)
    {
        // if($request->hasFile('avatar')){
        //     $avatar = $request->file('avatar');
        //     $filename = time() . '.' . $avatar->getClientOriginalExtension();
        //     Image::make($avatar)->resize(300, 300)->save(public_path('assets/uploads/avatar/' .$filename));

        //     $users = Auth::user();
        //     $users->avatar = $filename;
        //     $users->save();
        // }
        $users = User::all()->first();
        if($request->hasFile('avatar'))
        {
            $path = 'assets/uploads/avatar/'.$users->avatar;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/avatar',$filename);
            $users->avatar = $filename;
        }
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->address1 = $request->input('address1');
        $users->address2 = $request->input('address2');
        $users->save();
        return redirect('profile')->with('status', "Profile Update Succesfully");
    }

    public function changePassword()
    {
        return view('frontend.profile.changePassword');
    }
    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
}
