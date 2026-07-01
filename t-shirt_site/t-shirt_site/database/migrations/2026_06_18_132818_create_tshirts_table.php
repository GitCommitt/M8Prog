<?php

use App\Models\tshirt;
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
        Schema::create('tshirts', function (Blueprint $table) {
            $table->id();
            $table->string('text_line_1', 200);
            $table->string('text_line_2', 200);
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('colors_id');
            
            $table->foreign('categories_id')->references('id')->on('categories')->constrained();
            $table->foreign('colors_id')->references('id')->on('colors')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tshirts');
    }
};
