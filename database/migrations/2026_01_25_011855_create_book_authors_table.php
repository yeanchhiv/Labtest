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
        Schema::create('tbl_book_author', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('BookID');
            $table->unsignedBigInteger('AuthorID');
            $table->date('AuthorDate')->nullable();
            $table->text('Remark')->nullable();
            $table->timestamps();

            $table->foreign('BookID')
                  ->references('BookID')
                  ->on('tbl_book')
                  ->onDelete('cascade');

            $table->foreign('AuthorID')
                  ->references('AuthorID')
                  ->on('tbl_author')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_authors');
    }
};
