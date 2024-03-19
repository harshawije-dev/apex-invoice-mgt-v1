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

        Schema::create('invoice', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('invoice_number');
            $table->bigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->json('items');
            $table->text('status');
            $table->float('total');
            $table->float('sub_total');
            $table->text('remarks')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('issued_by');
            $table->foreign('issued_by')->references('id')->on('users');
            $table->boolean('is_draft')->default(false);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
