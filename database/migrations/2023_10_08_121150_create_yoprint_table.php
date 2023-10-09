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
        Schema::create('yoprint', function (Blueprint $table) {
            $table->id();
            $table->string('unique_key')->unique();
            $table->longText('product_title')->nullable();;
            $table->longText('product_description')->nullable();;
            $table->longText('style')->nullable();;
            $table->longText('sanmar_mainframe_color')->nullable();;
            $table->longText('size')->nullable();;
            $table->longText('color_name')->nullable();;
            $table->longText('piece_price')->nullable();;
            $table->text('created_by')->nullable();;
            $table->timestamp('created_at')->nullable();
            $table->text('updated_by')->nullable();;
            $table->timestamp('updated_at')->nullable();
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yoprint');
    }
};
