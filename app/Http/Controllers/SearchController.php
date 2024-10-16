<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Tag;

class SearchController extends Controller
{
    public function __invoke()
    {
        $bookmarks = Bookmark::with('user', 'tags')->where('title', 'like', '%' . request('q') . '%')->get();
        $tags = Tag::Where('name', 'like', '%' . request('q') . '%')->get();

        return view('results', [
            'bookmarks' => $bookmarks,
            'tags' => $tags,
        ]);

    }
}
