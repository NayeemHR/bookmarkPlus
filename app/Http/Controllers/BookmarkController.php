<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::latest()->with('owner', 'tags')->get()->groupBy('status');
        // dd($bookmarks);
        return view('bookmarks.index', [
            'bookmarks' => $bookmarks['New'],
            'inprogressBookmarks' => $bookmarks['In Progress'],

            // 'featuredJobs' => $jobs[1],
            'tags' => Tag::all(),
        ]);

    }

    public function create()
    {
        return view('bookmarks.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $attributes = $request->validate([
            'title' => ['required'],
            'url' => ['required', 'active_url'],
            'type' => ['required'],
            'status' => ['required'],
            'notes' => ['nullable'],
            'tags' => ['nullable'],
        ]);
        // Ensure user directly creates bookmark
        $bookmark = Auth::user()->owner->bookmarks()->create(Arr::except($attributes, 'tags'));
        // dd($attributes['tags']);
        // Tag handling
        if ($attributes['tags'] ?? false) {

            foreach (explode(',', $attributes['tags']) as $tag) {
                $bookmark->tag($tag); // Assuming tag() is a valid method
            }
        }

        return redirect('/bookmarks')->with('success', 'Bookmark saved successfully');
    }

}
