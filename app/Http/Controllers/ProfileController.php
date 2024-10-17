<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\User;

class ProfileController extends Controller
{
    public function showProfile($id)
    {
        $userinfo = User::where('id', $id)->first();
        $bookmarks = Bookmark::where('id', $id)->get();
        // dd($userinfo);
        // $name = $request->input('name');
        return view('bookmarks.profile', [
            'userinfo' => $userinfo,
            'bookmarks' => $bookmarks,
        ]);
    }
}
