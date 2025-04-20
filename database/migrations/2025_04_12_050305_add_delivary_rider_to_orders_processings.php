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
        Schema::table('orders_processings', function (Blueprint $table) {
            $table->unsignedBigInteger('delivery_rider_id')->nullable();
            $table->foreign('delivery_rider_id')->references('id')->on('restaurant_user_staffs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders_processings', function (Blueprint $table) {
            $table->dropForeign(['delivery_rider_id']);
            $table->dropColumn('delivery_rider_id');
        });
    }
};
