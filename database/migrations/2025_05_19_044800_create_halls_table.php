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
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('package_inclusions');
            $table->foreignIdFor(Hotel::class)->constrained()->cascadeOnDelete();
            $table->enum('hotel_tag',['mombasa', 'voi', 'ngulia']);
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->enum('service_tag', ['conferencing']);
            $table->string('capacity');
            $table->string('amenities');
            $table->string('arrangements_description');
            $table->string('arrangements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halls');
    }
};
