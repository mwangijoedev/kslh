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
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->enum('category_tag', ['standard', 'executive']);
            $table->foreignIdFor(Hotel::class)->constrained()->cascadeOnDelete();
            $table->enum('hotel_tag', ['mombasa', 'voi', 'ngulia']);
            $table->enum('executive_tag',['Deluxe Single','Deluxe Double', 'Deluxe Family'])->nullable();
            $table->string('amenities');
            $table->timestamps();
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accommodations');       
        Schema::dropIfExists('styles');       
    }
};
 