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
        Schema::table('items', function (Blueprint $table) {
            //
            $table->foreignId('type_id', 'fk_items_to_types')->references('id')->on('types')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreignId('brand_id', 'fk_items_to_brands')->references('id')->on('brands')->onUpdate('CASCADE')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            //
             $table->dropForeign('fk_items_to_types');
             $table->dropForeign('fk_items_to_brands');
        });
    }
};
