<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('specification_values', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias');
            $table->integer('sort')->default(0);
            $table->enum('status', ['ACTIVE', 'DISABLED'])->default('DISABLED');
            $table->bigInteger('specification_id');
            $table->timestamps();
            $table->foreign('specification_id', 'value_specification_id')
                ->references('id')
                ->on('specifications')
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
        Schema::dropIfExists('specification_values');
    }
}
