<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MembersController 
{
    public function index()
    {
        $members = User::orderByRaw("
            CASE role
                WHEN 'owner'        THEN 1
                WHEN 'sub-owner'    THEN 2
                WHEN 'admin'        THEN 3
                WHEN 'unbreaking'   THEN 4
                WHEN 'loyalty'      THEN 5
                WHEN 'berry'        THEN 6
                WHEN 'salingkitkit' THEN 7
                WHEN 'member'       THEN 8
                ELSE                     9
            END
        ")->get();

        return view('members.index', compact('members'));
    }

   public function uploadAvatar(Request $request, $id)
{
    // Check secret token
    if ($request->input('secret') !== env('UPLOAD_SECRET')) {
        abort(403, 'Unauthorized');
    }

    $request->validate([
        'avatar' => [
            'required',
            'image',
            'mimes:jpeg,png,jpg,gif,webp',
            'max:2048',
        ]
    ]);

    $user = User::findOrFail($id);

    if ($request->hasFile('avatar')) {
        // Delete old avatar if exists
        if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
            Storage::disk('public')->delete($user->avatar);
        }

        $path = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $path;
        $user->save();
    }

    return back()->with('success', 'Avatar updated!');
}
}