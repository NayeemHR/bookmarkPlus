<?php

namespace Database\Seeders;

use App\Models\Bookmark;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class BookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();

        Bookmark::factory(20)->hasAttached($tags)->create();

    }
}
