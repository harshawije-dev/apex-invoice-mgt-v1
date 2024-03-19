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
        Schema::disableForeignKeyConstraints();

        Schema::create('items', function (Blueprint $table) {
            $table->id()->foreign('history.item_id');
            $table->string('name', 100)->index();
            $table->string('brand', 50)->nullable();
            $table->float('price')->nullable();
            $table->bigInteger('quantity');
            $table->dateTime('purchased_on');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
