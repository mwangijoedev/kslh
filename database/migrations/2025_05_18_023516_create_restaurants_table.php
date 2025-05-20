<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Hotel;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('description');
            $table->string('service_tag');
            $table->foreignIdFor(Hotel::class)->constrained()->cascadeOnDelete();
            $table->string('hotel_tag');
            $table->integer('capacity');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('operating_hours');//separate with a comma delimeter
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
