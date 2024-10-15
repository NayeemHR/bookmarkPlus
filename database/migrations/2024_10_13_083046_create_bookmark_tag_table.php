<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookmark_tag', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(\App\Models\Bookmark::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Tag::class)->constrained()->cascadeOnDelete();

            // $table->foreignId('bookmark_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('tag_id')->constrained()->cascadeOnDelete();
            $table->unique(['bookmark_id', 'tag_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmark_tag');
    }
};
