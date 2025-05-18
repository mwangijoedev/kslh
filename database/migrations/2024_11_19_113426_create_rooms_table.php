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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->enum('service_tag', ['accommodation']);
            $table->enum('category', ['standard', 'executive']);
            $table->integer('capacity');
            $table->string('image')->nullable();
            $table->string('amenities');
            $table->foreignIdFor(Hotel::class)->constrained()->cascadeOnDelete();
            $table->enum('hotel_tag', ['mombasa', 'voi', 'ngulia']);
            $table->enum('executive_type',['Deluxe Single','Deluxe Double', 'Deluxe Family'])->nullable();
            $table->timestamps();
            //include softdeletes
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');       
        Schema::dropIfExists('styles');       
    }
};
 