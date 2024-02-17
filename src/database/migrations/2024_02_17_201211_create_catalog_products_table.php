<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('catalog_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias');
            $table->integer('category_id')->default(0);
            $table->enum('status', ['ACTIVE', 'DISABLED'])->default('DISABLED');
            $table->boolean('new')->default(false);
            $table->boolean('sale')->default(false);
            $table->boolean('available')->default(true);
            $table->decimal('cost', 14);
            $table->decimal('cost_old', 14);
            $table->bigInteger('views')->default(0);
            $table->string('stock_keeping_unit')->nullable();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('keywords')->nullable();
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
        Schema::dropIfExists('catalog_products');
    }
}
