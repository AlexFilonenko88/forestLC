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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->foreignId('profile_id')->index()->constrained('profiles');
            $table->foreignId('post_id')->index()->constrained('posts');
            $table->string("user")->nullable();
            $table->string("content")->nullable();
            $table->string("post")->nullable();
            $table->unsignedInteger("likes")->nullable();
            $table->string("parent")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
