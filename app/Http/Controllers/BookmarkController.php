<?php

// namespace App\Http\Controllers;

// use App\Models\Bookmark;
// use App\Models\Tag;
// use Illuminate\Http\Request;
// use Illuminate\Support\Arr;
// use Illuminate\Support\Facades\Auth;

// class BookmarkController extends Controller
// {
//     public function index()
//     {
//         $bookmarks = Bookmark::latest()->with('owner', 'tags')->get()->groupBy('status');
//         // dd($bookmarks);
//         return view('bookmarks.index', [
//             'bookmarks' => $bookmarks['New'],
//             'inprogressBookmarks' => $bookmarks['In Progress'],

//             // 'featuredJobs' => $jobs[1],
//             'tags' => Tag::all(),
//         ]);

//     }

//     public function create()
//     {
//         return view('bookmarks.create');
//     }

//     public function store(Request $request)
//     {
//         // dd($request->all());
//         $attributes = $request->validate([
//             'title' => ['required'],
//             'url' => ['required', 'active_url'],
//             'type' => ['required'],
//             'status' => ['required'],
//             'notes' => ['nullable'],
//             'tags' => ['nullable'],
//         ]);
//         // Ensure user directly creates bookmark
//         $bookmark = Auth::user()->owner->bookmarks()->create(Arr::except($attributes, 'tags'));
//         // dd($attributes['tags']);
//         // Tag handling
//         if ($attributes['tags'] ?? false) {

//             foreach (explode(',', $attributes['tags']) as $tag) {
//                 $bookmark->tag($tag); // Assuming tag() is a valid method
//             }
//         }

//         return redirect('/bookmarks')->with('success', 'Bookmark saved successfully');
//     }

// }

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Tag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $bookmarks = Bookmark::latest()->with('owner', 'tags')->get()->groupBy('status');
        return view('bookmarks.index', [
            'bookmarks' => $bookmarks['New'],
            'inprogressBookmarks' => $bookmarks['In Progress'],
            'tags' => Tag::all(),
        ]);

    }

    public function show(Bookmark $bookmark)
    {
        return view('bookmarks.show', [
            'bookmark' => $bookmark,
        ]);
    }

    public function create()
    {
        return view('bookmarks.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'url' => ['required', 'active_url'],
            'type' => ['required'],
            'status' => ['required'],
            'notes' => ['nullable'],
            'tags' => ['nullable'],
        ]);

        $bookmark = Auth::user()->owner->bookmarks()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $bookmark->tag($tag); // Assuming tag() is a valid method
            }
        }

        return redirect('/bookmarks')->with('success', 'Bookmark saved successfully');
    }

    public function edit(Bookmark $bookmark)
    {
        // Ensure the user can only edit their own bookmarks
        $this->authorize('update', $bookmark);

        return view('bookmarks.edit', ['bookmark' => $bookmark]);
    }

    public function update(Request $request, Bookmark $bookmark)
    {
        // Ensure the user can only update their own bookmarks
        $this->authorize('update', $bookmark);

        $attributes = $request->validate([
            'title' => ['required'],
            'url' => ['required', 'active_url'],
            'type' => ['required'],
            'status' => ['required'],
            'notes' => ['nullable'],
            'tags' => ['nullable'],
        ]);

        $bookmark->update(Arr::except($attributes, 'tags'));

        // Handle tags
        // if ($attributes['tags'] ?? false) {
        //     $bookmark->retag(explode(',', $attributes['tags'])); // Assuming retag() is a valid method to replace tags
        // }

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {

                $bookmark->tag($tag); // Assuming tag() is a valid method
            }
        }

        return redirect('/bookmarks')->with('success', 'Bookmark updated successfully');
    }

    public function destroy(Bookmark $bookmark)
    {
        // Ensure the user can only delete their own bookmarks
        $this->authorize('delete', $bookmark);

        $bookmark->delete();

        return redirect('/bookmarks')->with('success', 'Bookmark deleted successfully');
    }
}
