<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('catalog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias');
            $table->integer('parent_id')->default(0);
            $table->string('image')->nullable();
            $table->integer('views')->default(0);
            $table->enum('status', ['ACTIVE', 'DISABLE'])->default('ACTIVE');
            $table->integer('sort')->default(0);
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('catalog_categories');
    }
}
