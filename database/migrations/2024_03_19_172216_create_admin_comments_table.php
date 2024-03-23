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
        Schema::create('admin_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->text('comment');
            $table->string('CommentType');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('admin_comments', function (Blueprint $table) {
            $table->dropColumn(['admin_id']);
        });
        Schema::dropIfExists('admin_comments');
    }
};
