<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Models\Bookmark;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $bookmarks = Bookmark::latest()->with('owner', 'tags')->limit(10)->get();
    $tags = Tag::latest()->limit(10)->get();
    return view('home', [
        'bookmarks' => $bookmarks,
        'tags' => $tags,
    ]);
})->name('home');

Route::get('/search', SearchController::class);

Route::get('/tags/{tag:name}', TagController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('bookmarks', BookmarkController::class);
