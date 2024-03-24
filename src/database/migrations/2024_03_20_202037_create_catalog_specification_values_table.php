<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogSpecificationValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('catalog_specifications_value', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias');
            $table->integer('sort')->default(0);
            $table->enum('status', ['ACTIVE', 'DISABLED'])->default('DISABLED');
            $table->bigInteger('catalog_specification_id');
            $table->timestamps();
            $table->foreign('catalog_specification_id', 'value_specification_id')
                ->references('id')
                ->on('catalog_specifications')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('catalog_specifications_value');
    }
}
