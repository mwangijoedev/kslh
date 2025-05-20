<?php

use App\Models\Hotel;
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
        Schema::create('bars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('service_tag');
            $table->string('operating_hours')->nullable();
            $table->foreignIdFor(Hotel::class)->constrained()->cascadeOnDelete();
            $table->enum('hotel_tag', ['mombasa', 'voi', 'ngulia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bars');
    }
};
