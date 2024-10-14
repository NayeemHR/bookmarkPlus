<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;

class SearchController extends Controller
{
    public function __invoke()
    {
        $bookmarks = Bookmark::with('tags')->where('title', 'like', '%' . request('q') . '%')->orWhere('tags', 'like', '%' . request('q') . '%')->get();

        return view('results', [
            'bookmarks' => $bookmarks,
        ]);

    }
}
