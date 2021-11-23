<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function adminProfile()
    {
        $adminData = Admin::find(1);
        return view('admin.admin_profile_view', compact('adminData'));
    }
    public function adminProfileEdit()
    {
        $editData = Admin::find(1);
        return view('admin.body.admin_edit.admin_profile_edit', compact('editData'));
    }
    public function adminProfileStore(Request $request)
    {
        $data = Admin::find(Auth::user()->id);
        $data->name = $request->name;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('backend/admin_files/admin_images/' . $data->profile_photo_path));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/admin_files/admin_images/'), $fileName);
            $data['profile_photo_path'] = $fileName;
        }
        $data->save();
        $notif = array(
            'message' => 'Profile update successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.profile')->with($notif);
    }
}
