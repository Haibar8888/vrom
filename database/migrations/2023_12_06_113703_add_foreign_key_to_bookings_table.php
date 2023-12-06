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
        Schema::table('bookings', function (Blueprint $table) {
            //
            $table->foreignId('item_id', 'fk_bookings_to_items')->references('id')->on('items')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreignId('user_id', 'fk_bookings_to_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
            $table->dropForeign('fk_bookings_to_items');
            $table->dropForeign('fk_bookings_to_users');
        });
    }
};
