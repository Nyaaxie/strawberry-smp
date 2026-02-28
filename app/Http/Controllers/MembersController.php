<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MembersController extends Controller
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
        $user = User::findOrFail($id);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
            $user->save();
        }

        return back()->with('success', 'Avatar updated!');
    }
}