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

        Schema::create('delivery_note', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->bigInteger('note');
            $table->json('item_description');
            $table->dateTime('delivery_datetime');
            $table->string('status', 25);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_note');
    }
};
