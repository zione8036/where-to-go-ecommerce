<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function profileEdit()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user.profile.profile_view', compact('user'));
    }
    public function profileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('frontend/images/users/images/' . $data->profile_photo_path));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('frontend/images/users/images/'), $fileName);
            $data['profile_photo_path'] = $fileName;
        }
        $data->save();
        $notif = array(
            'message' => 'User update successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('dashboard')->with($notif);
    }

    public function changePassword()
    {
        return view('user.profile.change_password');
    }
    public function updatePassword(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',

        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            $notif = array(
                'message' => 'Password change successfully',
                'alert-type' => 'success',
            );
            return redirect()->route('user.logout')->with($notif);
        } else {

            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        $notif = array(
            'message' => 'Logout successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('login')->with($notif);
    }
}
